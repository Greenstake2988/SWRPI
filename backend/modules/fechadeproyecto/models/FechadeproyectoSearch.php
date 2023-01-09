<?php

namespace backend\modules\fechadeproyecto\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\fechadeproyecto\models\Fechadeproyecto;

/**
 * FechadeproyectoSearch represents the model behind the search form of `backend\modules\fechadeproyecto\models\Fechadeproyecto`.
 */
class FechadeproyectoSearch extends Fechadeproyecto
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idfechadeproyecto'], 'integer'],
            [['fecha_registro', 'fecha_inicio', 'fecha_terminacion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Crears data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Fechadeproyecto::find();

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
            'idfechadeproyecto' => $this->idfechadeproyecto,
            'fecha_registro' => $this->fecha_registro,
            'fecha_inicio' => $this->fecha_inicio,
            'fecha_terminacion' => $this->fecha_terminacion,
        ]);

        return $dataProvider;
    }
}
