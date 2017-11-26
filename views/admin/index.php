<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Панель администратора';
$this->params['breadcrumbs'][] = $this->title;

$user = Yii::$app->user->identity;
if($user->role){
    if($user->role == admin){
        echo '<h1>Привет, ' . $user->name . '</h1>';
    }else{
        echo 'Доступ запрещен <br>';
        echo '<a href="/site/login" class="btn btn-primary">Войти</a>';
        Yii::$app->end();
    }

}else{
    echo 'Доступ запрещен <br>';
    echo '<a href="/site/login" class="btn btn-primary">Войти</a>';
    Yii::$app->end();
}

?>
<br><br>
<div class="panel panel-default">
    <div class="panel-heading">
        Все услуги
    </div>
    <table class="table">
        <thead style="font-weight: bold">
            <tr>
                <td>№</td>
                <td>Название</td>
                <td>Кол-во мест</td>
                <td>Дата</td>
            </tr>
        </thead>
        <?php $i=1; foreach (\app\models\Service::find()->all() as $service){ ?>
            <tr>
                <td><?php echo $i++ ?></td>
                <td><?php echo $service->name ?></td>
                <td><?php echo $service->places ?></td>
                <td><?php echo $service->date ?></td>
            </tr>
        <?php } ?>
    </table>
</div>

<br>
<div class="panel panel-default">
    <div class="panel-heading">
        Мои услуги
    </div>
    <table class="table">
        <thead style="font-weight: bold">
        <tr>
            <td>№</td>
            <td>Название</td>
            <td>Кол-во мест</td>
            <td>Дата</td>
        </tr>
        </thead>

    </table>
</div>

<br>
<div class="panel panel-default">
    <div class="panel-heading">
        Добавить услугу
    </div>
    <div class="add-service" style="padding: 15px;">
        <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name') ?>

        <?= $form->field($model, 'space') ?>

        <?= $form->field($model, 'date')->textInput(['value' => date('Y.m.d'),'class'=>'datepicker form-control']) ?>


        <div class="form-group">
            <?= Html::submitButton('Добавить', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>