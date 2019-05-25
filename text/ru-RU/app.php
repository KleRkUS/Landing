<?php

use app\models\Projects;

$projects = Projects::find()->all();

foreach ($projects as $project) {
	$arr1[$project->description] = $project->description_ru;
}

$arr2 = [
	"Creating and correcting websites, PHP/HTML5/JS. Always online!" => "Создание и поддержка сайтов на PHP/HTML5/JS. Быстрый ответ и качественная работа!",
	"Villevald Vladislav | fullstack web-development" => "Виллевальд Владислав | качественная веб-разработка",
	"Ice cream" => "Мороженое",
	"It's just an ice cream, but I am website developer, okay?" => "Это просто мороженое, а я - веб разработчик",
	"Who am I?" => "Кто я?",
	"My name is <i>Villevald Vladislav</i>" => "Моё имя - <i>Виллевальд Владислав</i>",
	"I'm in <b>web development</b> since 2013" => "Я занимаюсь <b>веб разработкой</b> с 2013",
	"I love to <b>reach the goals</b>" => "Я люблю <b>достигать поставленных целей</b>",
	"<b>Details</b> in projects is my love" => "Для меня очень значимы <b>детали</b>",
	"Following <b>deadlines</b> is the business of my honor" => "Я всегда стараюсь уложиться <b>в срок</b> и уважаю тех, кто это делает",
	"I'm always <b>on the line</b>" => "Я всегда <b>на связи</b>",
	"Order now" => "Заказать",
	"My mission is creating product <b>which works</b>" => "Моя миссия - сделать <b>работающий</b> продукт",
	"My projects" => "Мои проекты",
	"What can I do for you?" => "Чем я занимаюсь?",
	"Creating website from scratch on base of Yii2 framework" => "Создание сайта под ключ на основе Yii2",
	"Creating static landing pages from scratch" => "Создание статических landing page под ключ",
	"Correcting existing websites with PHP/HTML5/JS" => "Внесение корректив в существующие сайты на PHP/HTML5/JS",
	"Integrating backend in existing static websites" => "Интеграция серверной части в статические сайты",
	"Configuring databases and hosting for website" => "Настройка баз данных и хостинга",
	"Administrating existing websites" => "Администрирование вебсайтов",
	"Connect me with your project details!" => "Свяжитесь со мной, указав детали и контактные данные!",
	"Confirm" => "Отправить",
	"Past your idea here and I'll reply you!" => "Опишите вашу идею, нажмите ОТПРАВИТЬ и я отвечу вам!",
	"By the way you can connect my with my socials in footer and view this landing on <b><a href='https://github.com/KleRkUS/Landing' class='link'>Github</a></b>!" => "К тому же вы можете увидеть исходный код данного сайта на <b><a href='https://github.com/KleRkUS/Landing' class='link'>Github</a></b>!",
	"Villevald Vladislav" => "Виллевальд Владислав",
];

return array_merge($arr1, $arr2);