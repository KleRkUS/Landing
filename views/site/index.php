<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

Yii::$app->language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$this->title = Yii::t('app', 'Villevald Vladislav | fullstack web-development');
$first_project = " active";
?>
<div class="land__back-img container-fluid padding">
	<div class="triangle main-triangle-1"></div>
	<div class="triangle main-triangle-2"></div>
	<div class="row">
		<div class="col-md-6">
			<?= Html::img('@web/images/morozhenka.png')?>
		</div>
		<div class="col-md-6">
    		<h1><?= Yii::t('app', 'Ice cream')?></h1><br>
    		<span>
    			<?= Yii::t('app', "It's just an ice cream, but I am website developer, okay?")?>
    		</span>
    	</div>
    </div>
</div>

<svg version="1.1" id="svg1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1000 382.3" style="enable-background:new 0 0 1000 382.3;" xml:space="preserve">
<style type="text/css">
	.st0{fill:#573357; min-width: 100%;}
</style>
<defs>
    <filter id="f3" x="0" y="0" width="100%" height="100%">
      <feOffset result="offOut" in="SourceAlpha" dx="0" dy="0" />
      <feGaussianBlur result="blurOut" in="offOut" stdDeviation="1" />
      <feBlend in="SourceGraphic" in2="blurOut" mode="normal" />
    </filter>
 </defs>
<path filter="url(#f3)" class="st0" d="M999.5-1.5v245c-114,4,25-208-75-207c-86.8,0.9,11,118-52,116s27-111-57-112c-109-1.3,3,93-60,97
	c-68.9,4.4,37.9-108.8-78-104c-73,3,6,104.2-54,100c-43-3,34-115-55-114c-81,0.9-12,105-57,105c-50.2,0,20-94.1-54-95
	c-84-1,10,146-50,148c-58.1,1.9,20-113-71-114c-106-1.2,19,161-56,165c-87.9,4.7,26.1-110.9-80-109c-114,2,30,177-61,177
	c-87.9,0,11.6-123.5-64-121c-83.1,2.7,58,172.1-76,177v-354H999.5z"/>
</svg>

<div class="land__content container-fluid">
	<div class="about part">
		<div class="col-md-7"></div>
		<h2 class="part-title col-md-4">
			<?= Yii::t('app', 'Who am I?')?>
		</h2>
		<div class="col-md-7 ul">
			<ul>
				<li>
					<h3><?= Yii::t('app', 'My name is <i>Villevald Vladislav</i>')?></h3>
				</li>
				<li>
					<span>
						<?= Yii::t('app', "I'm in <b>web development</b> since 2013")?>
					</span>
				</li>
				<li>
					<span>
						<?= Yii::t('app', "I love to <b>reach the goals</b>")?>
					</span>
				</li>
				<li>
					<span>
						<?= Yii::t('app', '<b>Details</b> in projects is my love')?>
					</span>
				</li>
				<li>
					<span>
						<?= Yii::t('app', "Following <b>deadlines</b> is the business of my honor")?>
					</span>
				</li>
				<li>
					<span>
						<?= Yii::t('app', "I'm always <b>on the line</b>")?>
					</span>
				</li>
			</ul>
		</div>
		<div class="col-md-5">
			<?= Html::img('@web/images/123456_1_of_1-min.jpg')?>
		</div>
		<div class="col-md-7">
			<a href="#offer" id="scroll__order">
				<?= Yii::t('app', 'Order now')?>
			</a>
		</div>
		<div class="mission col-md-5">
		<h2>
			<?= Yii::t('app', 'My mission is creating product <b>which works</b>')?>
		</h2>
		</div>
	</div><!--
	--><div class="part-triangle about-triangle"></div><!--
	--><div class="top-triangle top-projects-triangle"></div>
	<div class="projects part padding">
		<h2 class="part-title">
			<?= Yii::t('app', 'My projects')?>
		</h2>
		<div class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<?php foreach ($projects as $project):
						if ($projects[0] != $project) {
							$first_project = "";
						}
					?>

					<?= Html::beginTag('div', ['class' => "carousel-item{$first_project}", 'name' => 'ProjectBox'])?>
						<?= Html::img("@web/images/{$project->img}", ['width' => '100%'])?>
						<?= Html::beginTag('div', ['class' => 'carousel-caption d-none d-md-block', 'name' => 'ProjectDescription'])?>
							<?= Html::tag('h4', Html::encode($project->title))?>
							<?= Html::tag('p', Html::encode(Yii::t('app', "$project->description")))?> 
						</div>
					</div>					
				<?php endforeach; ?>
		</div>
	</div>
</div>
		<div class="part-triangle projects-triangle"></div>
		<div class="top-triangle top-product-triangle"></div>
		<div class="product part padding">
			<h2 class="part-title">
				<?= Yii::t('app', 'What can I do for you?')?>
			</h2>
			<div class="row m-1">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Creating website from scratch on base of Yii2 framework')?>
					</h3>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Creating static landing pages from scratch')?>
					</h3>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Correcting existing websites with PHP/HTML5/JS')?>
					</h3>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Integrating backend in existing static websites')?>
					</h3>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Configuring databases and hosting for website')?>
					</h3>
				</div>
				<div class="col-md-4 col-sm-4 col-xs-4">
					<h3>
						<?= Yii::t('app', 'Administrating existing websites')?>
					</h3>
				</div>
			</div>
		</div>
		<div class="part-triangle product-triangle"></div>
		<div class="top-triangle top-offer-triangle"></div>
	<div class="offer part padding" id="offer">
		<div class="row offer-row">
		<?php $form = ActiveForm::begin([
			"action" => ['index.php/mail/mail'],
			"options" => [
				"id" => "offer-form",
				"class" => "offer-form col-md-5 col-sm-5 col-xs-5"
			]
		]);?>
			<h3><?= Yii::t('app', 'Connect me with your project details!')?></h3>
			<?= $form->field($model, 'name')->textInput(['class' => 'offer-input', 'placeholder' => 'Name', 'id' => 'offer-name'])?>
			<?= $form->field($model, 'email')->textInput(['class' => 'offer-input', 'placeholder' => 'E-mail', 'id' => 'offer-email']) ?>
			<?= $form->field($model, 'description')->textInput(['class' => 'offer-input', 'placeholder' => 'Description', 'id' => 'offer-description'])?>
			<?= Html::submitButton(Yii::t('app', 'Confirm'), ['id' => 'offer-submit'])?>	
		<?php ActiveForm::end()?>
		<div class="col-md-7 col-sm-7 col-xs-7">
			<div class="content">
			<h2>
				<?= Yii::t('app', "Past your idea here and I'll reply you!")?>
			</h2>
			<h2>
				<?= Yii::t('app', "By the way you can connect my with my socials in footer and view this landing on <b><a href=''>Github</a></b>!")?>
			</h2>
			</div>
		</div>
		</div>
	</div>
</div>
<footer class="land__footer">
	<h3>
		2019 <?= Yii::t('app', 'Villevald Vladislav')?>
	</h3>
		<a class="link" href="">VK</a>
		<a class="link" href="">FB</a>
		<a class="link" href="">TG</a>
</footer>

<?php
$js = <<<JS
$("#offer-form").submit(function(event) {
	event.preventDefault();
	var data = $(this).serializeArray();
	var url = $(this).attr('action');
	$.ajax({
		url: url,
		type: "POST",
		data: data,
		success: function(res) {
			console.log(res);
		},
		error: function() {
			console.log('loh');
		}
	});
});
JS;

$this->registerJs($js);