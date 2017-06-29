<?php

namespace backend\modules\ordering\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TblCustomer;

/**
 * CustomerSearch represents the model behind the search form about `backend\models\TblCustomer`.
 */
class CustomerSearch extends TblCustomer
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['cus_id', 'cus_name', 'cus_tel', 'cus_add'], 'safe'],
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
        $query = TblCustomer::find();

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
        $query->andFilterWhere(['like', 'cus_id', $this->cus_id])
            ->andFilterWhere(['like', 'cus_name', $this->cus_name])
            ->andFilterWhere(['like', 'cus_tel', $this->cus_tel])
            ->andFilterWhere(['like', 'cus_add', $this->cus_add]);

        return $dataProvider;
    }
}
