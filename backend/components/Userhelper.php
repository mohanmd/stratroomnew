<?php
namespace backend\components;
use Yii;

// namespace app\components; // For Yii2 Basic (app folder won't actually exist)
class Userhelper
{
    public static function isloggedin() {
		
            if(Yii::$app->user->isGuest){
			return false;
			}else{
				return true;
		}
    }
}
