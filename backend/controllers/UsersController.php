<?php

namespace backend\controllers;

use Yii;
use common\models\Users;
use common\models\UsersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ProducerDetails;
use yii\web\UploadedFile;

/**
 * UsersController implements the CRUD actions for Users model.
 */
class UsersController extends Controller
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
     * Lists all Users models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andFilterWhere(['in','roleid',$searchModel->inuserroles()]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionActivateuser($id)
    {
        $user = Users::findOne($id);
        $user->status=1;
        $user->save();
        Yii::$app->session->setFlash('success', "User Activated Successfully.");
        return $this->redirect(['users/index']);

    }
    public function actionDeactivateuser($id)
    {
        $user = Users::findOne($id);
        $user->status=2;
        $user->save();
        Yii::$app->session->setFlash('danger', "User Deactivated Successfully.");
        return $this->redirect(['users/producers']);

    }

    public function actionActivateproducer($id)
    {
        $user = Users::findOne($id);
        $user->status=1;
        $user->save();
        Yii::$app->session->setFlash('success', "User Activated Successfully.");
        return $this->redirect(['users/producers']);

    }
    public function actionDeactivateproducer($id)
    {
        $user = Users::findOne($id);
        $user->status=2;
        $user->save();
        Yii::$app->session->setFlash('danger', "User Deactivated Successfully.");
        return $this->redirect(['users/index']);

    }
    public function actionList($id)
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->andWhere('typeid='.$id);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionProducers()
    {
        $searchModel = new UsersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $dataProvider->query->where('roleid=2');
        return $this->render('producer/list', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionCreateproducer()
    {
        $model = new Users();
        $model2 = new ProducerDetails();

        if (Yii::$app->request->post() ) {
            $model->password_hash=Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = Yii::$app->security->generateRandomString();
        $model->created_at=time();
            if($model->load(Yii::$app->request->post())&& $model->save() && $model2->load(Yii::$app->request->post()))
            {  
                $model2->producer_profile = UploadedFile::getInstance($model2, 'producer_profile');

                $model2->producer_id=$model->id;
                if ($model2->validate()) {
                    $uid=uniqid();
                    $model2->producer_profile->saveAs('uploads/producerprofile/'.$uid. '.' . $model2->producer_profile->extension);
                    $model2->producer_profile='uploads/producerprofile/'.$uid. '.' . $model2->producer_profile->extension;
               if($model2->save())
               {
                return $this->redirect(['viewproducer', 'id' => $model->id]);
               }
            }
            }
            else
            {
                $model2->load(Yii::$app->request->post());

            }
            return $this->render('producer/create', [
                'model' => $model,
                'model2' =>$model2,
            ]);

        }

        return $this->render('producer/create', [
            'model' => $model,
            'model2' =>$model2,
        ]);
    }
    /**
     * Displays a single Users model.
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
    public function actionViewproducer($id)
    {
        $model2 = ProducerDetails::find()->where(['producer_id' => $id])->one();
        return $this->render('producer/view', [
            'model' => $this->findModel($id),
            'model2'=> $model2,
        ]);
    }

    /**
     * Creates a new Users model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Users();

        if ($model->load(Yii::$app->request->post())) {
            $model->password_hash=Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = Yii::$app->security->generateRandomString();
             $model->created_at=time();
                if($model->save())
                {
                    return $this->redirect(['view', 'id' => $model->id]);
                }  
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Users model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $model->password_hash=Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = Yii::$app->security->generateRandomString();
             $model->created_at=time();
             if( $model->save())
             {
                return $this->redirect(['view', 'id' => $model->id]);
             }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionUpdateproducer($id)
    {
        $model = $this->findModel($id);
        $model2 = ProducerDetails::find()->where(['producer_id' => $id])->one();
        $oldprofile=$model2->producer_profile;

        if (Yii::$app->request->post() ) {
            $model->password_hash=Yii::$app->security->generatePasswordHash($model->password);
            $model->auth_key = Yii::$app->security->generateRandomString();
            $model->updated_at=time();
                if($model->load(Yii::$app->request->post())&& $model->save() && $model2->load(Yii::$app->request->post()))
                {   
                     if(isset($_FILES))
                    {
                    $model2->producer_profile = UploadedFile::getInstance($model2, 'producer_profile');
                    }
                    $model2->producer_id=$model->id;
                    if ($model2->validate()) {
                        if($model2->producer_profile)
                {
                        $uid=uniqid();
                        $model2->producer_profile->saveAs('uploads/producerprofile/'.$uid. '.' . $model2->producer_profile->extension);
                        $model2->producer_profile='uploads/producerprofile/'.$uid. '.' . $model2->producer_profile->extension;
                }
                else
                {
                    $model2->producer_profile=$oldprofile;

                } 
                        if($model2->save())
                   {
                    return $this->redirect(['viewproducer', 'id' => $model->id]);
                   }
                }
                }
                else
                {
                    $model2->load(Yii::$app->request->post());
    
                }
                return $this->render('producer/update', [
                    'model' => $model,
                    'model2' =>$model2,
                ]);
    
            }

        return $this->render('producer/update', [
            'model' => $model,
            'model2' =>$model2,
        ]);
    }
    /**
     * Deletes an existing Users model.
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

    /**
     * Finds the Users model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Users the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
