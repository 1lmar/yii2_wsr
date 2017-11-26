<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 18:45
 */
$this->title = 'Личный кабинет';
$this->params['breadcrumbs'][] = $this->title;

$user = Yii::$app->user->identity;
if($user->role){
    if(!$user->role == user){
        echo 'Доступ запрещен <br>';
        echo '<a href="/site/login" class="btn btn-primary">Войти</a>';
        Yii::$app->end();
    }
}else{
    echo 'Доступ запрещен <br>';
    echo '<a href="/site/login" class="btn btn-primary">Войти</a>';
    Yii::$app->end();
}

$sign = \app\models\Clients::find()->where(['user_id' => $user->id])->all();

?>

<div class="col-md-12">
    <h1> <?php echo $user->name ?> </h1><br><br>

    <div class="panel panel-default">
        <div class="panel-heading">Мои услуги</div>
        <table class="table">
            <thead style="font-weight: bold">
            <tr>
                <td>№</td>
                <td>Название</td>
                <td>Кол-во мест</td>
                <td>Дата</td>
            </tr>
            </thead>
            <?php $count = 1; for($i=0;$i<count($sign);$i++){ ?>
                <?php $service_id = \app\models\Service::find()->where(['id' => $sign[$i]->service_id])->all(); ?>
                <tr>
                    <td><?php echo $count++; ?></td>
                    <td><?php echo $service_id[0]->name ?></td>
                    <td><?php echo $service_id[0]->places ?></td>
                    <td><?php echo $service_id[0]->date ?></td>
                </tr>
            <?php } ?>
        </table>
    </div>

</div>
