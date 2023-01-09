<?php

namespace backend\modules\licenciaturainvolucrada\models;

use Yii;

/**
 * This is the model class for table "licenciaturainvolucrada".
 *
 * @property int $id
 * @property int $clave_licenciatura
 * @property string $nombre_licenciatura 1.Administracion\\\\\\\\n2.Ambiental\\\\\\\\n3.Civil\\\\\\\\n4.Gestionempresarial\\\\\\\\n5.Industrial\\\\\\\\n6.Sistemas
 *
 * @property ProyectosinternosHasLicenciaturainvolucrada[] $proyectosinternosHasLicenciaturainvolucradas
 */
class Licenciaturainvolucrada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'licenciaturainvolucrada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['clave_licenciatura', 'nombre_licenciatura'], 'required'],
            [['clave_licenciatura'], 'integer'],
            [['nombre_licenciatura'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'clave_licenciatura' => 'Clave Licenciatura',
            'nombre_licenciatura' => 'Nombre Licenciatura',
        ];
    }

    /**
     * Gets query for [[ProyectosinternosHasLicenciaturainvolucradas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternosHasLicenciaturainvolucradas()
    {
        return $this->hasMany(ProyectosinternosHasLicenciaturainvolucrada::className(), ['licenciaturainvolucrada_idlicenciaturainvolucrada' => 'id']);
    }
}
