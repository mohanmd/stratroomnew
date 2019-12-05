<?php

namespace frontend\controllers;

use Yii;
use common\models\Users;
use common\models\UserProfileupdate;
use common\models\ProducerDetails;
use common\models\Producerimage;
use common\models\ProducerimageTypes;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
use common\models\InboxSearch;
use common\models\Products;
use common\models\ProductsSearch;
use common\models\Producervideo;
use common\models\ProductImages;
use common\models\ProductUpdates;
use frontend\components\UseraccessHelper;


class MyaccountController extends \yii\web\Controller
{
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['producerinfo','imagegallery','addimage','removeimage',
                            'videogallery','addvideo', 'removevideo', 'manageproduct',
                            'addproduct','viewproduct','producercreate'
                            ],
                'rules' => [
                    [
                       // 'actions' => ['index'],
                        'allow' => UseraccessHelper::hasAccess(),
                        'roles' => ['?'],
                    ],
                ],
            ],
        ];
    }

    public function actionIndex()
    {

        $user_id = Yii::$app->user->identity->id;

        if ($values = Yii::$app->request->post()) {
            
            $model = new UserProfileupdate;
            $model->user_id = $user_id;
            $model->firstname = $values['Users']['firstname'];
            $model->lastname = $values['Users']['lastname'];
            $model->designiation = $values['Users']['designation'];
            $model->mobile = $values['Users']['mobile'];
            $model->emailid = $values['Users']['email'];

            if (!empty($values['Users']['password'])) {
                $model->password = $values['Users']['password'];
            }   

        if ( $model->save()) {
            Yii::$app->session->setFlash('profile_updated', "Your profile update request is send, it will be updated after approved by admin");
        } 
      
    }
        $model = $this->findUser($user_id);
        $model->scenario = Users::SCENARIO_UPDATE;

        return $this->render('myprofile',[
            'model' => $model
        ]);
    }

    public function actionProducerinfo()
    {
        $user_id = Yii::$app->user->identity->id;
        
        $model = ProducerDetails::find()->where(['producer_id'=> $user_id])->one();

        if (empty($model)) {
            return $this->redirect('producercreate');    
        }
        
        return $this->render('producerupdateinfo',[
            'model' => $model
        ]);
    }
   public function actionInbox()
    {
        $user_id = Yii::$app->user->identity->id;

        $inboxsearchmodel = new InboxSearch();
        $inboxdataprovider = $inboxsearchmodel->search(Yii::$app->request->queryParams);
        $inboxdataprovider->query->where(['to_id'=>$user_id]);

		return $this->render('inbox',[
            'inboxdataprovider' => $inboxdataprovider
        ]);
	}
	public function actionSentitems()
    {
        $user_id = Yii::$app->user->identity->id;

        $sentitemssearchmodel = new InboxSearch();
        $sentitemsdataprovider = $sentitemssearchmodel->search(Yii::$app->request->queryParams);
        $sentitemsdataprovider->query->where(['from_id'=>$user_id]);

	    return $this->render('sentitems',[
            'sentitemsdataprovider' => $sentitemsdataprovider
        ]);

	}
	
	 public function actionImagegallery()
    {
        $user_id = Yii::$app->user->identity->id;

        $image_types = ProducerimageTypes::find()->where(['delete_status' => 0])->all();

        $images = array();
        foreach($image_types as $image_type) {
            $images[$image_type->name] = Producerimage::find()->where(['type_id' => $image_type->id, 'delete_status' => 0,'producer_id' => $user_id])->all();
        }
	    return $this->render('imagegallery',[
            'images' => $images
        ]);

    }
    
    public function actionAddimage()
    {
        $model = new Producerimage;

        if ($values = Yii::$app->request->post()) {

            $type_id = $values['Producerimage']['type_id'];
            $caption = $values['Producerimage']['caption'];

            $user_id = Yii::$app->user->identity->id;

            $model->producer_id = $user_id;
            $files = UploadedFile::getInstances($model, 'image_name');

            for($i=0;$i<count($type_id);$i++) {

                $model = new Producerimage;
                $model->producer_id = $user_id;
                $model->type_id = $type_id[$i];
                $model->caption = $caption[$i];
                $model->image_name = $files[$i];


                $uid = uniqid();
                $model->image_name->saveAs('frontend/web/img/image-gallery/'.$uid. '.' . $model->image_name->extension);
                $model->image_name = 'frontend/web/img/image-gallery/'.$uid. '.' . $model->image_name->extension;
                $model->save();
               
            }

            return $this->redirect('imagegallery');
        }

        return $this->render('addimage',[
            'model' => $model
        ]);
    }

    public function actionRemoveimage($id)
    {
        $model = Producerimage::findOne($id);
        $model->delete_status = 1;

        if ($model->save()) {
            return $this->redirect('imagegallery');
        }


    }

    public function actionRemoveproductimage($id,$product_id)
    {
        
        $model = ProductImages::findOne($id);
        $model->delete_status = 1;

        if ($model->save()) {
            return $this->redirect(['viewproduct','id' => $product_id]);
        }


    }

	public function actionVideogallery()
    {
        $user_id = Yii::$app->user->identity->id;

        $videos = Producervideo::find()->where(['delete_status' => 0,'producer_id' => $user_id])->all();

		return $this->render('videogallery',[
            'videos' => $videos
        ]);
    }
    
    public function actionAddvideo()
    {
        $model = new Producervideo;

        if ($values = Yii::$app->request->post()) {

            $caption = $values['Producervideo']['caption'];
            $video_url = $values['Producervideo']['video_url'];
            $user_id = Yii::$app->user->identity->id;

            for ($i=0;$i<count($video_url);$i++) {

                $model = new Producervideo;
                $model->caption = $caption[$i];
                $model->video_url = $video_url[$i];
                $model->producer_id = $user_id;
                $model->save();

            }

            return $this->redirect('videogallery');

        }

        return $this->render('addvideo',[
            'model' => $model
        ]);
    }

    public function actionRemovevideo($id)
    {
        $model = Producervideo::findOne($id);
        $model->delete_status = 1;

        if ($model->save()) {
            return $this->redirect('videogallery');
        }
    }

	public function actionManageproduct()
    {
		$searchModel = new ProductsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $user_id = Yii::$app->user->identity->id;

        $dataProvider->query->where(['created_by'=>$user_id]);

     return $this->render('manageproduct', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);

	}
	public function actionAddproduct()
    {
        $model = new Products();
        $images = new ProductImages();

        if ($model->load(Yii::$app->request->post())) {
            $model->created_by = Yii::$app->user->identity->id;

            $files = UploadedFile::getInstances($images, 'image_name');

            if($model->save())
            {

                for($i=0;$i<count($files);$i++) {

                    $images = new ProductImages;
                    $images->product_id = $model->id;
                    $images->image_name = $files[$i];
    
    
                    $uid = uniqid();
                    $images->image_name->saveAs('frontend/web/img/product/'.$uid. '.' . $images->image_name->extension);
                    $images->image_name = 'frontend/web/img/product/'.$uid. '.' . $images->image_name->extension;
                    $images->save();
                   
                }

                
                return $this->redirect(['manageproduct']);

            }
        }

        return $this->render('addproduct', [
            'model' => $model,
            'images' => $images
        ]);
	//	return $this->render('addproduct');

	}
	public function actionViewproduct($id)
	{
$product = Products::find()->where(['id' => $id])->one();
$images = ProductImages::find()->where(['product_id'=>$id,'delete_status'=> 0])->all();

     return $this->render('viewproduct', [
            'model' => $product,
            'images'  => $images
        ]);
    }
    
    public function actionUpdateproduct($id)
    {
        $model = Products::findOne($id);
        $images = new ProductImages();

        if ($values = Yii::$app->request->post()) {

            $model1 = new ProductUpdates;

            $value['_csrf-frontend'] = $values['_csrf-frontend'];
            $value['ProductUpdates'] = $values['Products'];

            if ($model1->load($value)) {

                $model1->user_id = Yii::$app->user->identity->id;
                $model1->product_id = $model->id;
    
                $files = UploadedFile::getInstances($images, 'image_name');

                if($model1->save())
                {
    
                    for($i=0;$i<count($files);$i++) {
    
                        $images = new ProductImages;
                        $images->product_id = $model->id;
                        $images->image_name = $files[$i];
        
        
                        $uid = uniqid();
                        $images->image_name->saveAs('frontend/web/img/product/'.$uid. '.' . $images->image_name->extension);
                        $images->image_name = 'frontend/web/img/product/'.$uid. '.' . $images->image_name->extension;
                        $images->save();
                       
                    }
    
                    
                    return $this->redirect(['manageproduct']);
    
                } 
            }
            
      
    }

        return $this->render('updateproduct',[
            'model' => $model,
            'images' => $images
        ]);
    }

    public function actionProducercreate()
    {
        $user_id = Yii::$app->user->identity->id;

        $model = new ProducerDetails;

        if (Yii::$app->request->post()) {

            $model->load(Yii::$app->request->post());
            $model->producer_id = $user_id;
            $model->producer_profile = UploadedFile::getInstance($model, 'producer_profile');

            if ($model->validate()) {

                $uid=uniqid();
                $model->producer_profile->saveAs('frontend/web/producerprofile/'.$uid. '.' . $model->producer_profile->extension);
                $model->producer_profile = 'frontend/web/producerprofile/'.$uid. '.' . $model->producer_profile->extension;

                if ($model->save()) {

                return $this->redirect('producerinfo');

                }
           }
        }

        return $this->render('producerinfo',[
            'model' => $model
        ]);
    }

    protected function findUser($id)
    {
        if (($model = Users::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}
