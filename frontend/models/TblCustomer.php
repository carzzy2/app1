<?php

namespace app\models;

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
            [['cus_id', 'cus_tel'], 'string', 'max' => 10],
            [['cus_name', 'cus_add'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'cus_id' => 'Cus ID',
            'cus_name' => 'Cus Name',
            'cus_tel' => 'Cus Tel',
            'cus_add' => 'Cus Add',
        ];
    }
}
