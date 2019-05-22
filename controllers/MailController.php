<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\Mail;

class MailController extends Controller
{

	public function	actionIndex() {
		echo 'lol';
	}

	public function actionMail()
	{
		$model = new Mail;

		if (Yii::$app->request->isAjax && $model->load(Yii::$app->request->post()) && $model->validate()) {

			$body = "
				Имя: $model->name <br>
				E-mail: $model->email <br>
				Детали: $model->description
			";

			Yii::$app->mailer->compose()->
			setFrom(Yii::$app->user->identity->email)
			->setTo('villevald.vladislav.sleep@gmail.com')
			->setSubject('Новый заказ')
			->setTextBody('Таки дела')
			->setHtmlBody($body)->send();

			return "ok";
		} 
	}
}