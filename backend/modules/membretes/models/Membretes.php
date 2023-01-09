<?php

namespace backend\modules\membretes\models;

use Yii;

/**
 * This is the model class for table "membretes".
 *
 * @property int $idmembretes
 * @property resource $superior_membrete
 * @property resource $inferior_membrete
 *
 * @property Proyectosinternos[] $proyectosinternos
 */
class Membretes extends \yii\db\ActiveRecord
{
    public $archivoS;
    public $archivoI;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'membretes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['idmembretes',], 'required'],
            [['idmembretes'], 'integer'],
          //  [['superior_membrete'], 'string'],
           // [['inferior_membrete'], 'string'],
            [['archivoS'],'file','extensions'=>'jpg,png'],
            [['archivoI'],'file','extensions'=>'jpg,png'],
            [['idmembretes'], 'unique'],


        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'idmembretes' => 'Id',
          //  'superior_membrete' => 'Superior Membrete',
            //'inferior_membrete' => 'Inferior Membrete',
            'archivoS'=> 'Superior Membrete',
            'archivoI'=> 'Inferior Membrete',
        ];
    }

    /**
     * Gets query for [[Proyectosinternos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProyectosinternos()
    {
        return $this->hasMany(Proyectosinternos::className(), ['membretes_idmembretes' => 'idmembretes']);
    }
}
