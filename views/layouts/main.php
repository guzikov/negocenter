<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);

$this->title = 'Retailer';
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="<?=Yii::getAlias('@web/img/favicon/favicon.ico');?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?=Yii::getAlias('@web/img/favicon/apple-touch-icon-180x180.png')?>">
    <meta name="keywords" content="Теги сайта">
    <meta name="description" content="Описание сайта">
    <meta name="author" lang="ru" content="Helen Portna">
    <link rel="stylesheet" href="css/main.min.css">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<?= $content ?>
<footer class="footer">
    <div class="wrap">
        <div class="footer__wrap">
            <div class="logo-wrap">
                <div class="logo">
                    <svg class="logo-color">
                        <use xlink:href="img/logo.svg#logo"></use>
                    </svg>
                </div>
            </div>
            <div class="social"><a href="#" class="social__item fb">
                    <svg class="fb">
                        <use xlink:href="img/icons/fb.svg#fb"></use>
                    </svg></a><a href="#" class="social__item tw">
                    <svg class="skype">
                        <use xlink:href="img/icons/skype.svg#skype"></use>
                    </svg></a><a href="#" class="social__item ins">
                    <svg class="whatsapp">
                        <use xlink:href="img/icons/whatsapp.svg#whatsapp"></use>
                    </svg></a></div>
            <div class="footer-info">
                <div class="footer-info__wrap">
                    <div class="footer-info__title">Эксперт в коммуникациях на рынке торговой недвижимости</div>
                    <div class="footer-info__text">15 лет мы знакомим нужных друг другу людей и способствуем заключению выгодных сделок</div>
                </div>
            </div>
            <div class="contacts">
                <div class="contacts__tel">
                    <svg class="tel">
                        <use xlink:href="img/icons/phone_white.svg#phone_white"></use>
                    </svg><a href="tel:+78005006606">+ 7(800) 500-66-06</a>
                </div>
                <div class="contacts__mail">
                    <svg class="mail">
                        <use xlink:href="img/icons/mail.svg#mail"></use>
                    </svg><a href="mailto:ask@retailer.ru">ask@retailer.ru</a>
                </div>
            </div>
            <div class="rights">Хорошего понедельника! © 2018 - RETAILER.ru</div>
        </div>
    </div>
</footer>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>


