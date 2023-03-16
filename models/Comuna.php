<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comuna".
 *
 * @property int $id_comuna
 * @property string $nombre
 *
 * @property RolUsuarios[] $rolUsuarios
 */
class Comuna extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'comuna';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_comuna' => 'Id Comuna',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * Gets query for [[RolUsuarios]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getRolUsuarios()
    {
        return $this->hasMany(RolUsuarios::class, ['id_comuna' => 'id_comuna']);
    }
}
