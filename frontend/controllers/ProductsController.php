<?php

namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\Category;
use common\models\Products;
use common\models\ProductsSearch;
use yii\data\Pagination; //I added this in my attempts
use common\models\Enquirymasters;
use common\models\Inbox;
use common\models\Producerimage;
use common\models\ProducerimageTypes;
use common\models\Producervideo;
use common\models\ProductImages;
use yii\filters\AccessControl;

class ProductsController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index'],
                'rules' => [
                    [
                        'allow' => true,
                       'actions' => ['index'],
                       'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    public function actionIndex()
    {
        $query = Products::find()->where(['status' => 1]);
        if( Yii::$app->request->get('category_id'))
        {
            $query->andWhere(['category_id' => Yii::$app->request->get('category_id')]);
        }
        if( Yii::$app->request->get('subcategory_id'))
        {
            $query->andWhere(['subcategory_id' => Yii::$app->request->get('subcategory_id')]);
        }
        $countQuery = clone $query;
        $pages = new Pagination(['totalCount' => $countQuery->count()]);
   //     $pages->setPageSize(1);

        $enquirymasters = Enquirymasters::find()->where(['delete_status' => 0 ])->all();
        $modelenquiry = new Inbox();

        $models = $query->offset($pages->offset)
            ->limit($pages->limit)
            ->all();
        
        $categories=Category::find()->all();
        
		
        return $this->render('index',[
        'categories'=>$categories,
        'models' => $models,
        'pages' => $pages,
        'enquirymasters' => $enquirymasters,
        'modelenquiry' => $modelenquiry
        ]);

    }
    public function actionProducer($id)
    {
        $query = Products::find()->where(['id' => $id]);

        return $this->render('producerdetails',[
            'model' => $query->one(),
            ]);
    }


   public function actionPost_by_requirement(){
	  return $this->render('post_by_requirement');
   }










    public function actionView($id)
    {
        $query = Products::find()->where(['id' => $id])->one();
        $product_images = ProductImages::find()->where(['product_id' => $id,'delete_status' => 0])->all();   

        $modelenquiry = new Inbox();     

        $enquirymasters = Enquirymasters::find()->where(['delete_status' => 0 ])->all();

        if ($values = Yii::$app->request->post()) {

            if ($values['occupation'] != 0) {
                $data = Enquirymasters::findOne($values['occupation']);

                $values['Inbox']['subject'] = $data->subject;
                $values['Inbox']['description'] = $data->description;
            } 

            $modelenquiry->load($values);
            $modelenquiry->category_id = $query->category_id;
            $modelenquiry->subcategory_id = $query->subcategory_id;
            $modelenquiry->status = 1;
            $modelenquiry->from_id = Yii::$app->user->identity->id;
            $modelenquiry->to_id = $query->created_by;

            if ($modelenquiry->save()) {
                Yii::$app->session->setFlash('enquiry_submitted', "Your Enquiry for this product is sent successfully");
            }
        }
        $image_types = ProducerimageTypes::find()->where(['delete_status' => 0])->all();

        $images = array();
        foreach($image_types as $image_type) {
            $images[$image_type->name] = Producerimage::find()->where(['type_id' => $image_type->id, 'delete_status' => 0,'producer_id' =>$query->created_by])->all();
        }

        $videos = Producervideo::find()->where(['delete_status' => 0,'producer_id' => $query->created_by])->all();

        return $this->render('view',[
            'model' => $query,
            'enquirymasters'=>$enquirymasters,
            'modelenquiry' =>  $modelenquiry,
            'images' => $images,
            'videos' => $videos,
            'product_images' => $product_images
            ]);
    
    }
    public function actionEnquiry()
    {
        print_r($_POST);
        exit();
    }

    public function actionSendmail()
    {
        Yii::$app->mail->compose()
        ->setTo(["pkarthik@xmediasolution.com" => "karthik"])
        ->setSubject("test mail")
        ->setTextBody("sample text")
        ->send();
    }

}
