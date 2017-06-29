<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\TblProduct */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-product-form">

    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'pro_id')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'pro_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'pro_price')->textInput() ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'pro_unit')->textInput() ?>
        </div>
    </div>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
