<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Mail;

class MailController extends Controller
{

	public function	actionIndex() {
	}

	public function actionMail()
	{
		$model = new Mail;

		if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()) && $model->validate()) {

				$body = "
					Новый запрос с сайта\n
					Имя: $model->name\n
					E-mail: $model->email\n
					Детали: $model->description
				";

				$botToken = "";
 
				$website="https://api.telegram.org/bot".$botToken;
  				$chatId='-377148542';  //Receiver Chat Id
  				$params=[
      				'chat_id'=>$chatId,
      				'text'=> $body,
  				];
  				$ch = curl_init($website . '/sendMessage');
  				curl_setopt($ch, CURLOPT_HEADER, false);
  				curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  				curl_setopt($ch, CURLOPT_POST, 1);
  				curl_setopt($ch, CURLOPT_POSTFIELDS, ($params));
  				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  				$result = curl_exec($ch);
  				curl_close($ch);

  				return $result;
    		} 
	}
}