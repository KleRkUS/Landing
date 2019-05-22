<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Mail extends Model
{
	public $name;
	public $email;
	public $description;

	public function	rules()
	{
		return [
			[['name', 'email', 'description'], 'required'],
			['email', 'email'],
		];
	}
}