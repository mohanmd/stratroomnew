<?php
namespace frontend\components;

use Yii;

class UseraccessHelper {
    const ADMIN = 1;
    const PRODUCER = 2;
    const USER = 3;

    public static function hasAccess()
    {
		if(isset(Yii::$app->user->identity->roleid))
		{
        $role_id = Yii::$app->user->identity->roleid;

        if ($role_id === self::PRODUCER) {
            return true;
        } 
		}
		            return false;

    }
}


?>