<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Averageroomrate;

/**
 * AverageroomrateSearch represents the model behind the search form about `app\models\Averageroomrate`.
 */
class AverageroomrateSearch extends Averageroomrate
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'room_has_monthYear_id'], 'integer'],
            [['growthRateARR', 'actualARR', 'budgetARR', 'lastYearARR'], 'number'],
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
        $query = Averageroomrate::find();

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
            'growthRateARR' => $this->growthRateARR,
            'actualARR' => $this->actualARR,
            'budgetARR' => $this->budgetARR,
            'lastYearARR' => $this->lastYearARR,
            'room_has_monthYear_id' => $this->room_has_monthYear_id,
        ]);

        return $dataProvider;
    }
}
