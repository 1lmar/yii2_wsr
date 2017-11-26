<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 18:44
 */

namespace app\controllers;


use app\models\Service;
use yii\web\Controller;


class UserController extends Controller
{

    public function actionIndex(){
        $services = Service::find()
            ->asArray()
            ->all();

        return $this->render('index', compact("$services"));
    }

}