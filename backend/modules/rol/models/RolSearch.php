<?php

namespace backend\modules\rol\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\rol\models\Rol;

/**
 * RolSearch represents the model behind the search form of `backend\modules\rol\models\Rol`.
 */
class RolSearch extends Rol
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['tipo_rol', 'nivel_rol'], 'safe'],
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
        $query = Rol::find();

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
        ]);

        $query->andFilterWhere(['like', 'tipo_rol', $this->tipo_rol])
            ->andFilterWhere(['like', 'nivel_rol', $this->nivel_rol]);

        return $dataProvider;
    }
}
