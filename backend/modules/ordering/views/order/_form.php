<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper; 

?>

<div class="tbl-order-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, "cus_id")->dropDownList(
        ArrayHelper::map($customer,'cus_id','cus_name'),[
            "prompt"=>"กรุณาเลือกลูกค้า"
        ]
    )?>
    <?= $form->field($model, "pro_id")->dropDownList(
        ArrayHelper::map($product,'pro_id','pro_name'),[
            "prompt"=>"เลือกสินค้า"
        ]
    )?>
    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
