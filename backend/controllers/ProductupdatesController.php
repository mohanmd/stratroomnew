<?php

namespace backend\controllers;

use Yii;
use common\models\ProductUpdates;
use common\models\Products;
use common\models\ProductUpdatesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ProductupdatesController implements the CRUD actions for ProductUpdates model.
 */
class ProductupdatesController extends Controller
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
     * Lists all ProductUpdates models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductUpdatesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ProductUpdates model.
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
     * Creates a new ProductUpdates model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ProductUpdates();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing ProductUpdates model.
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

    public function actionUpdateproduct($id)
    {
        $user_id = Yii::$app->user->identity->id;

        $updatemodel = $this->findModel($id);

        $productmodel = Products::findOne($updatemodel->product_id);
        $productmodel->variety = $updatemodel->variety;
        $productmodel->description = $updatemodel->description;
        $productmodel->specification = $updatemodel->specification;
        $productmodel->harvesting_period = $updatemodel->harvesting_period;
        $productmodel->region_grown = $updatemodel->region_grown;
        $productmodel->processing = $updatemodel->processing;
        $productmodel->texture = $updatemodel->texture;
        $productmodel->flavour = $updatemodel->flavour;
        $productmodel->delievary_time = $updatemodel->delievary_time;
        $productmodel->annual_volume = $updatemodel->annual_volume;
        $productmodel->altitude = $updatemodel->altitude;
        $productmodel->updated_at = time();

        $updatemodel->approved_at = time();
        $updatemodel->status = 1;
        $updatemodel->approved_by = $user_id;

        if ($updatemodel->save() && $productmodel->save()) {
            return $this->redirect(['index']);
        }
    }

    public function actionRejectproduct($id)
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
     * Deletes an existing ProductUpdates model.
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
     * Finds the ProductUpdates model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ProductUpdates the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ProductUpdates::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
