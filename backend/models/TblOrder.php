<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tbl_order".
 *
 * @property string $order_id
 * @property string $cus_id
 * @property string $pro_id
 */
class TblOrder extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_order';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['order_id', 'cus_id', 'pro_id'], 'required'],
            [['order_id', 'cus_id', 'pro_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'รหัสสั่งซื้อ',
            'cus_id' => 'ลูกค้า',
            'pro_id' => 'สินค้า',
        ];
    }
}
