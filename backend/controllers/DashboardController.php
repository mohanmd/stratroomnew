<?php

namespace backend\controllers;
use common\models\RoleType;

class DashboardController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $roletypes = RoleType::find()->all();
        return $this->render('index', [
            'roletypes' => $roletypes,
        ]);
    }

}
