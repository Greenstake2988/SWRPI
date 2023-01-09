<?php

namespace backend\modules\fechadeproyecto\models;

use Yii;

/**
 * This is the model class for table "fechadeproyecto".
 *
 * @property int $idfechadeproyecto
 * @property string $fecha_registro
 * @property string $fecha_inicio
 * @property string $fecha_terminacion
 *
 * @property Periodos[] $periodos
 */
class Fechadeproyecto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'fechadeproyecto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_registro', 'fecha_inicio', 'fecha_terminacion'], 'required'],
            [['fecha_registro', 'fecha_inicio', 'fecha_terminacion'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idfechadeproyecto' => 'Idfechadeproyecto',
            'fecha_registro' => 'Fecha Registro',
            'fecha_inicio' => 'Fecha Inicio',
            'fecha_terminacion' => 'Fecha Terminacion',
        ];
    }

    /**
     * Gets query for [[Periodos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getPeriodos()
    {
        return $this->hasMany(Periodos::className(), ['fechadeproyecto_idfechadeproyecto' => 'idfechadeproyecto']);
    }
}
