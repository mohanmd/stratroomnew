<?php

namespace backend\controllers;

use Yii;
use common\models\UserProfileupdate;
use common\models\UserProfileupdatesearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Users;

/**
 * UserprofileupdateController implements the CRUD actions for UserProfileupdate model.
 */
class UserprofileupdateController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UserProfileupdate models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UserProfileupdatesearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single UserProfileupdate model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new UserProfileupdate model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new UserProfileupdate();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UserProfileupdate model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing UserProfileupdate model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    public function actionUpdateprofile($id)
    {
        $user_id = Yii::$app->user->identity->id;

        $updatemodel = $this->findModel($id);

        $usermodel = Users::findOne($updatemodel->user_id);
        $usermodel->scenario = Users::SCENARIO_UPDATE;
        $usermodel->firstname = $updatemodel->firstname;
        $usermodel->lastname = $updatemodel->lastname;
        $usermodel->designation = $updatemodel->designiation;
        $usermodel->mobile = $updatemodel->mobile;
        $usermodel->email = $updatemodel->emailid;
        $usermodel->updated_at = time();

        if (!empty($updatemodel->password)) {
            $usermodel->password = $updatemodel->password;
            $usermodel->password_hash = Yii::$app->security->generatePasswordHash($updatemodel->password);
            $usermodel->auth_key = Yii::$app->security->generateRandomString();
        }

        $updatemodel->approved_at = time();
        $updatemodel->status = 1;
        $updatemodel->approved_by = $user_id;

        if ($updatemodel->save() && $usermodel->save()) {
            return $this->redirect(['index']);
        }   
    }

    public function actionRejectprofile($id)
    {
        $user_id = Yii::$app->user->identity->id;

        $model = $this->findModel($id);
        $model->approved_at = time();
        $model->status = 2;
        $model->approved_by = $user_id;

        if ($model->save()) {
            return $this->redirect(['index']);
        }
    }

    /**
     * Finds the UserProfileupdate model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UserProfileupdate the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UserProfileupdate::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
