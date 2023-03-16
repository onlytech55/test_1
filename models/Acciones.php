<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "acciones".
 *
 * @property int $id_accion
 * @property string $descripcion
 */
class Acciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'acciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['descripcion'], 'required'],
            [['descripcion'], 'string', 'max' => 250],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            // 'id_accion' => 'Id Accion',
            'descripcion' => 'Descripción',
        ];
    }
}
