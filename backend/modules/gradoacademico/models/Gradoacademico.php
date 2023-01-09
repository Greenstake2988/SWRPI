<?php

namespace backend\modules\gradoacademico\models;

use Yii;

/**
 * This is the model class for table "gradoacademico".
 *
 * @property int $idgradoacademico
 * @property string $nombre_de_grado
 * @property string $sigla_de_grado
 *
 * @property Perfil[] $perfils
 */
class Gradoacademico extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'gradoacademico';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idgradoacademico', 'nombre_de_grado', 'sigla_de_grado'], 'required'],
            [['idgradoacademico'], 'integer'],
            [['nombre_de_grado', 'sigla_de_grado'], 'string', 'max' => 45],
            [['idgradoacademico'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idgradoacademico' => 'Idgradoacademico',
            'nombre_de_grado' => 'Nombre De Grado',
            'sigla_de_grado' => 'Sigla De Grado',
        ];
    }

    /**
     * Gets query for [[Perfils]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPerfils()
    {
        return $this->hasMany(Perfil::className(), ['idgradoacademico' => 'idgradoacademico']);
    }
}
