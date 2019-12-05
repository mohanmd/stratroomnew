<?php

namespace backend\controllers;

use Yii;
use common\models\Products;
use common\models\ProductsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\ProductImages;
use yii\web\UploadedFile;

/**
 * ProductsController implements the CRUD actions for Products model.
 */
class ProductsController extends Controller
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
     * Lists all Products models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Products model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $images = ProductImages::find()->where(['product_id'=>$id,'delete_status'=> 0])->all();

        return $this->render('view', [
            'model' => $this->findModel($id),
            'images' => $images
        ]);
    }
    public function actionApproveproduct($id)
    {
        $user = Products::findOne($id);
        $user->status=1;
        $user->save();
        Yii::$app->session->setFlash('success', "Product Approved Successfully.");
        return $this->redirect(['products/index']);


    }
    public function actionDisapproveproduct($id)
    {
        $user = Products::findOne($id);
        $user->status=2;
        $user->save();
        Yii::$app->session->setFlash('danger', "Product Disapproved Successfully.");
        return $this->redirect(['products/index']);


    }
    /**
     * Creates a new Products model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Products();
        $images = new ProductImages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {

            $files = UploadedFile::getInstances($images, 'image_name');

            for($i=0;$i<count($files);$i++) {

                $images = new ProductImages;
                $images->product_id = $model->id;
                $images->image_name = $files[$i];


                $uid = uniqid();
                $images->image_name->saveAs('admin/uploads/productimage/'.$uid. '.' . $images->image_name->extension);
                $images->image_name = 'admin/uploads/productimage/'.$uid. '.' . $images->image_name->extension;
                $images->save();
               
            }

            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'images' => $images
        ]);
    }

    /**
     * Updates an existing Products model.
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
     * Deletes an existing Products model.
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
     * Finds the Products model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Products the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Products::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
