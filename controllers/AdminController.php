<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 25.11.2017
 * Time: 20:02
 */

namespace app\controllers;


use app\models\Service;
use app\models\ServiceForm;
use yii\base\Controller;
use Yii;

class AdminController extends Controller
{

    public function actionIndex(){

        $services = Service::find()
        ->asArray()
        ->all();

        $model = new ServiceForm();
        if($model->load(Yii::$app->request->post()) && $model->validate()){
            $service = new Service();
            $service->name = $model->name;
            $service->date = $model->date;
            $service->places = $model->space;
            $service->save();
        }

        return $this->render('index', ['services' => $services, 'model' => $model]);
    }

}