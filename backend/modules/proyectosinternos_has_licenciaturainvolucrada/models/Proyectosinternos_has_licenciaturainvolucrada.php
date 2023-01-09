<?php

namespace backend\modules\proyectosinternos_has_licenciaturainvolucrada\models;
use backend\modules\proyectosinternos\models\Proyectosinternos;
use backend\modules\licenciaturainvolucrada\models\Licenciaturainvolucrada;
use Yii;

/**
 * This is the model class for table "proyectosinternos_has_licenciaturainvolucrada".
 *
 * @property int $id
 * @property int $licenciaturainvolucrada_idlicenciaturainvolucrada
 * @property int $proyectosinternos_id
 *
 * @property Licenciaturainvolucrada $licenciaturainvolucradaIdlicenciaturainvolucrada
 * @property Proyectosinternos $proyectosinternos
 */
class Proyectosinternos_has_licenciaturainvolucrada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'proyectosinternos_has_licenciaturainvolucrada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['licenciaturainvolucrada_idlicenciaturainvolucrada', 'proyectosinternos_id'], 'required'],
            [['licenciaturainvolucrada_idlicenciaturainvolucrada', 'proyectosinternos_id'], 'integer'],
            [['licenciaturainvolucrada_idlicenciaturainvolucrada'], 'exist', 'skipOnError' => true, 'targetClass' => Licenciaturainvolucrada::className(), 'targetAttribute' => ['licenciaturainvolucrada_idlicenciaturainvolucrada' => 'id']],
            [['proyectosinternos_id'], 'exist', 'skipOnError' => true, 'targetClass' => Proyectosinternos::className(), 'targetAttribute' => ['proyectosinternos_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'licenciaturainvolucrada_idlicenciaturainvolucrada' => 'Licenciaturainvolucrada Idlicenciaturainvolucrada',
            'proyectosinternos_id' => 'Proyectosinternos ID',
        ];
    }

    /**
     * Gets query for [[LicenciaturainvolucradaIdlicenciaturainvolucrada]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getLicenciaturainvolucradaIdlicenciaturainvolucrada()
    {
        return $this->hasOne(Licenciaturainvolucrada::className(), ['id' => 'licenciaturainvolucrada_idlicenciaturainvolucrada']);
    }

    /**
     * Gets query for [[Proyectosinternos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternos()
    {
        return $this->hasOne(Proyectosinternos::className(), ['id' => 'proyectosinternos_id']);
    }
}
