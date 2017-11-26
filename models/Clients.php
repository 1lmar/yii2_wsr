<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 20:33
 */

namespace app\models;


use yii\db\ActiveRecord;

class Clients extends ActiveRecord
{

    public static function tableName()
{
    return 'clients';
}

}