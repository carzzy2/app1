
<?php 
    use yii\bootstrap\ActiveForm;
    use \yii\helpers\Html;     
    use yii\helpers\ArrayHelper;
    use kartik\select2\Select2;
    use yii\widgets\MaskedInput;
?> 
  <?php $form = ActiveForm::begin([
    'options'=>['enctype'=>'multipart/form-data']
]);?>
    
    <?= $form->field($model, "province")->dropDownList(
        ArrayHelper::map($provinceList,'PROVINCE_ID','PROVINCE_NAME'),[
            "prompt"=>"เลือกจังหวัด"
        ]
    )?>
    <?= $form->field($model, 'province_2')->widget(Select2::classname(), [
        'data' => ArrayHelper::map($provinceList,'PROVINCE_ID','PROVINCE_NAME'),
        'language' => 'th',
        'options' => ['placeholder' => 'Select a state ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]);?>
    <?= $form->field($model, 'tel')->widget(MaskedInput::className(), [
    'mask' => '999-999-9999']) ?>

   <?= $form->field($model, 'province_select2_multiple')->widget(Select2::className(), [
        //'initValueText' => $model1->assign, // set the initial display text
        'data' => ArrayHelper::map($provinceList,'PROVINCE_ID','PROVINCE_NAME'),
        'options' => ['placeholder' => 'กรุณาเลือก...', 'multiple' => true, 'id'=>'assign-select',],
        'pluginOptions' => [
            'allowClear' => true,
            'tags' => true,
            'tokenSeparators' => [',', ' '],
        ]
    ])
?>

    <?= $form->field($model, "province_radio")->radioList(
        ArrayHelper::map($provinceList,'PROVINCE_ID','PROVINCE_NAME')
    )?>
    <?= $form->field($model, 'file')->fileInput()?>
    <?= Html::submitButton("save",['class'=>'btn btn-warning'])?>
<?php ActiveForm::end();?>