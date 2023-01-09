<?php

namespace backend\modules\lineadeinvestigacion\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion;

/**
 * LineadeinvestigacionSearch represents the model behind the search form of `backend\modules\lineadeinvestigacion\models\Lineadeinvestigacion`.
 */
class LineadeinvestigacionSearch extends Lineadeinvestigacion
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['clave_linea', 'nombre_linea'], 'safe'],
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
        $query = Lineadeinvestigacion::find();

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

        $query->andFilterWhere(['like', 'clave_linea', $this->clave_linea])
            ->andFilterWhere(['like', 'nombre_linea', $this->nombre_linea]);

        return $dataProvider;
    }
}
