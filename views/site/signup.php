<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Регистрация';

?>

<div class="site-reg">
    <h1><?= Html::encode($this->title) ?></h1><br>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(); ?>

                <?= $form->field($model, 'name') ?>

                <?= $form->field($model, 'email') ?>

                <?= $form->field($model, 'username') ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'checkPassword')->passwordInput() ?>

                <?= $form->field($model, 'image')->fileInput() ?>



                <div class="form-group">
                    <?= Html::submitButton('Регистрация', ['class' => 'btn btn-primary']) ?>
                </div>

                <?php ActiveForm::end(); ?>

            </div>
        </div>

</div>