<?php

namespace app\models;

use yii\base\Model;

class ApplicationForm extends Model
{
    public $name;
    public $email;
    public $phone;
    public $message;

    public function rules()
    {
        return [
            [['name', 'email', 'phone', 'message'], 'required'],
            ['email', 'email'],
        ];
    }
    public function attributeLabels(){
        return [
            'name'=> 'Имя',
            'email'=> 'Почта',
            'phone'=> 'Номер телефона',
                'message'=> 'Сообщение',];
    }

}
