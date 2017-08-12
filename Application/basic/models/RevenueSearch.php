<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Revenue;

/**
 * RevenueSearch represents the model behind the search form about `app\models\Revenue`.
 */
class RevenueSearch extends Revenue
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_has_monthYear_id'], 'integer'],
            [['gRateRev', 'actualRev', 'budgetRev', 'lastYearRev'], 'number'],
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
        $query = Revenue::find();

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
            'id' => $this->id,
            'gRateRev' => $this->gRateRev,
            'actualRev' => $this->actualRev,
            'budgetRev' => $this->budgetRev,
            'lastYearRev' => $this->lastYearRev,
            'room_has_monthYear_id' => $this->room_has_monthYear_id,
        ]);

        return $dataProvider;
    }
}
