<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_customer".
 *
 * @property string $cus_id
 * @property string $cus_name
 * @property string $cus_tel
 * @property string $cus_add
 */
class TblCustomer extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_customer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_id', 'cus_name', 'cus_tel', 'cus_add'], 'required'],
            [['cus_id'],'required','message'=>'กรุณากรอกรหัสลูกค้า'],
            [['cus_id', 'cus_tel'], 'string', 'max' => 12],
            [['cus_tel'],'required','message'=>'กรุณากรอกเบอร์โทรศัพท์'],
            [['cus_name', 'cus_add'], 'string', 'max' => 255],
            [['cus_add'],'required','message'=>'กรุณากรอกที่อยู่'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cus_id' => 'รหัสลูกค้า',
            'cus_name' => 'ชื่อลูกค้า',
            'cus_tel' => 'เบอร์โทรศัพท์',
            'cus_add' => 'ที่อยู่',
        ];
    }
}
