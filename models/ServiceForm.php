<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 23.11.2017
 * Time: 16:56
 */

namespace app\models;

use yii\base\Model;


class ServiceForm extends Model
{
    public $name;
    public $space;
    public $date;

    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'space', 'date'], 'required'],
            ['space', 'integer'],
            ['date', 'compare', 'operator' => '>=', 'compareValue' => Date('Y.m.d')],
            ['date', 'string','max' => '10'],
        ];
    }

    public function attributeLabels() {
        return [
            'name' => 'Название услуги',
            'space' => 'Количество доступных мест',
            'date' => 'Дата',
        ];
    }



}