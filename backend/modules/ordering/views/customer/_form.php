<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\MaskedInput;
/* @var $this yii\web\View */
/* @var $model backend\models\TblCustomer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tbl-customer-form">
    
    <?php $form = ActiveForm::begin(); ?>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'cus_id')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'cus_name')->textInput(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
                <?= $form->field($model, 'cus_tel')->widget(MaskedInput::className(), [
                    'mask' => '999-999-9999']) ?>
        </div>
    </div>
    <div class="row">
        <div class="form-group col-sm-5">
            <?= $form->field($model, 'cus_add')->textarea(['maxlength' => true]) ?>
        </div>
    </div>
    <div class="row">
        <?= Html::submitButton($model->isNewRecord ? 'บันทึก' : 'อัพเดท', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
    <?php ActiveForm::end(); ?>

</div>
