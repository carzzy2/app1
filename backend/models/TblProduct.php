<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_product".
 *
 * @property string $pro_id
 * @property string $pro_name
 * @property integer $pro_price
 * @property integer $pro_unit
 */
class TblProduct extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_product';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_name', 'pro_price'], 'required'],
            [['pro_price'], 'integer'],
            [['pro_id'], 'string', 'max' => 10],
            [['pro_name'], 'string', 'max' => 255],
            [['pro_unit'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pro_id' => 'รหัสสินค้า',
            'pro_name' => 'ชื่อสินค้า',
            'pro_price' => 'ราคา',
            'pro_unit' => 'หน่วยนับ',
        ];
    }
}
