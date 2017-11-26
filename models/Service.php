<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 13:28
 */

namespace app\models;


use yii\db\ActiveRecord;

class Service extends ActiveRecord
{

    public static function tableName()
    {
        return 'service';
    }

}