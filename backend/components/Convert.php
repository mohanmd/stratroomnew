<?php
namespace backend\components;
use Yii;

class Convert
{
    public static function unixtohumandatetime($time) {
       return date('d-m-Y H:i:s', $time);
    }
}