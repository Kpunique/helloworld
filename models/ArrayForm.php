<?php

namespace app\models;

use Yii;
use yii\base\Model;

class ArrayForm extends Model
{
    public $item;
   

    public function rules()
    {
        return [
            ['item', 'required']
        
        ];
    }
}