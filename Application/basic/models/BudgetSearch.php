<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Budget;

/**
 * BudgetSearch represents the model behind the search form about `app\models\Budget`.
 */
class BudgetSearch extends Budget
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'monthYear_id'], 'integer'],
            [['roomsRevenue', 'roomsIndividual', 'roomsGroup', 'roomsOthers', 'roomsAvailable', 'roomsSold', 'occupancy', 'adr', 'roomsRevPar'], 'number'],
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
        $query = Budget::find();

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
            'roomsRevenue' => $this->roomsRevenue,
            'roomsIndividual' => $this->roomsIndividual,
            'roomsGroup' => $this->roomsGroup,
            'roomsOthers' => $this->roomsOthers,
            'roomsAvailable' => $this->roomsAvailable,
            'roomsSold' => $this->roomsSold,
            'occupancy' => $this->occupancy,
            'adr' => $this->adr,
            'roomsRevPar' => $this->roomsRevPar,
            'monthYear_id' => $this->monthYear_id,
        ]);

        return $dataProvider;
    }
}
