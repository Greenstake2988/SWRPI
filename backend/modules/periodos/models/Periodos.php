<?php

namespace backend\modules\periodos\models;
use backend\modules\fechadeproyecto\models\Fechadeproyecto;

use Yii;

/**
 * This is the model class for table "periodos".
 *
 * @property int $idperiodos
 * @property int $fechadeproyecto_idfechadeproyecto
 *
 * @property Fechadeproyecto $fechadeproyectoIdfechadeproyecto
 * @property Proyectosinternos[] $proyectosinternos
 */
class Periodos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'periodos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fechadeproyecto_idfechadeproyecto'], 'required'],
            [['fechadeproyecto_idfechadeproyecto'], 'integer'],
            [['fechadeproyecto_idfechadeproyecto'], 'exist', 'skipOnError' => true, 'targetClass' => Fechadeproyecto::className(), 'targetAttribute' => ['fechadeproyecto_idfechadeproyecto' => 'idfechadeproyecto']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idperiodos' => 'Idperiodos',
            'fechadeproyecto_idfechadeproyecto' => 'Fechadeproyecto Idfechadeproyecto',
        ];
    }

    /**
     * Gets query for [[FechadeproyectoIdfechadeproyecto]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFechadeproyectoIdfechadeproyecto()
    {
        return $this->hasOne(Fechadeproyecto::className(), ['idfechadeproyecto' => 'fechadeproyecto_idfechadeproyecto']);
    }

    /**
     * Gets query for [[Proyectosinternos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternos()
    {
        return $this->hasMany(Proyectosinternos::className(), ['periodos_idperiodos' => 'idperiodos']);
    }
}
