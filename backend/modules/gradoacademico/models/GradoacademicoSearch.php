<?php

namespace backend\modules\gradoacademico\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\gradoacademico\models\Gradoacademico;

/**
 * GradoacademicoSearch represents the model behind the search form of `backend\modules\gradoacademico\models\Gradoacademico`.
 */
class GradoacademicoSearch extends Gradoacademico
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idgradoacademico'], 'integer'],
            [['nombre_de_grado', 'sigla_de_grado'], 'safe'],
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
        $query = Gradoacademico::find();

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
            'idgradoacademico' => $this->idgradoacademico,
        ]);

        $query->andFilterWhere(['like', 'nombre_de_grado', $this->nombre_de_grado])
            ->andFilterWhere(['like', 'sigla_de_grado', $this->sigla_de_grado]);

        return $dataProvider;
    }
}
