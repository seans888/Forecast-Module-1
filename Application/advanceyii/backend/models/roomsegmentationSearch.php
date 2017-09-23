<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\roomsegmentation;

/**
 * roomsegmentationSearch represents the model behind the search form about `app\models\roomsegmentation`.
 */
class roomsegmentationSearch extends roomsegmentation
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'monthYear_id'], 'integer'],
            [['roomType'], 'safe'],
            [['actualRNS', 'budgetRNS', 'lastYearRNS', 'actualARR', 'budgetARR', 'lastYearARR', 'growthRateRNS', 'growthRateARR', 'actualR', 'budgetR', 'lastYearR', 'growthRateR'], 'number'],
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
        $query = roomsegmentation::find();

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
            'actualRNS' => $this->actualRNS,
            'budgetRNS' => $this->budgetRNS,
            'lastYearRNS' => $this->lastYearRNS,
            'actualARR' => $this->actualARR,
            'budgetARR' => $this->budgetARR,
            'lastYearARR' => $this->lastYearARR,
            'growthRateRNS' => $this->growthRateRNS,
            'growthRateARR' => $this->growthRateARR,
            'actualR' => $this->actualR,
            'budgetR' => $this->budgetR,
            'lastYearR' => $this->lastYearR,
            'growthRateR' => $this->growthRateR,
            'monthYear_id' => $this->monthYear_id,
        ]);

        $query->andFilterWhere(['like', 'roomType', $this->roomType]);

        return $dataProvider;
    }
}
