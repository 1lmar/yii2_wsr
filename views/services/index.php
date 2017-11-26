<?php
/**
 * Created by PhpStorm.
 * User: Ильмар
 * Date: 26.11.2017
 * Time: 18:28
 */
$this->title = 'Услуги';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Список услуг</h1>
<br>
<table class="table">
    <thead style="font-weight: bold">
    <tr>
        <td>№</td>
        <td>Название</td>
        <td>Кол-во мест</td>
        <td>Дата</td>
        <td>Записаться</td>
    </tr>
    </thead>
    <?php $i=1; foreach (\app\models\Service::find()->all() as $service){ ?>
        <tr>
            <td><?php echo $i++ ?></td>
            <td><?php echo $service->name ?></td>
            <td><?php echo $service->places ?></td>
            <td><?php echo $service->date ?></td>
            <td><button type="button" class="btn btn-default" aria-label="Left Align"><span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span></button></td>
        </tr>
    <?php } ?>
</table>