<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 18:27
 */

namespace app\controllers;


use yii\web\Controller;

class ServicesController extends Controller
{

    public function actionIndex(){
        return $this->render('index');
    }

}