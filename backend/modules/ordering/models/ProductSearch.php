<?php

namespace backend\modules\ordering\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblProduct;

/**
 * ProductSearch represents the model behind the search form about `backend\models\TblProduct`.
 */
class ProductSearch extends TblProduct
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pro_id', 'pro_name'], 'safe'],
            [['pro_price', 'pro_unit'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = TblProduct::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'pro_price' => $this->pro_price,
            'pro_unit' => $this->pro_unit,
        ]);

        $query->andFilterWhere(['like', 'pro_id', $this->pro_id])
            ->andFilterWhere(['like', 'pro_name', $this->pro_name]);

        return $dataProvider;
    }
}
