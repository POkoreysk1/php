<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="en">

    <!-- blueprint CSS framework -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
          media="screen, projection">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
          media="print">
    <!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

    <div id="header">
        <div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
    </div><!-- header -->

    <div id="mainmenu">
        <?php $this->widget('zii.widgets.CMenu', array(
            'items' => array(
                array('label' => 'Главная страница', 'url' => array('/news/index')),
                array('label' => 'Войти', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Зарегистрироваться', 'url' => array('users/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => 'Выйти', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest),
                array('label' => 'Добавить запись', 'url' => array('/users/index'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === ('user'))),
                array('label' => 'Добавить запись', 'url' => array('/users/index'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === ('admin'))),
                array('label' => 'Мои записи', 'url' => array('/article/myContent'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === ('user'))),
                array('label' => 'Мои записи', 'url' => array('/article/myContent'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === ('admin'))),
                array('label' => 'О нас', 'url' => array('/site/page', 'view' => 'about')),
                array('label' => 'Редактирование записей', 'url' => array('/admin/admin'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === 'admin')),
                array('label' => 'Пользователи', 'url' => array('/admin/users'), 'visible' => (!empty(Yii::app()->user->role)
                    && Yii::app()->user->role === 'admin')),

            ))); ?>
    </div><!-- mainmenu -->
    <?php
    if (isset($this->breadcrumbs)):?>
        <?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links' => $this->breadcrumbs,
        )); ?><!-- breadcrumbs -->
    <?php endif ?>

    <?php echo $content; ?>

    <div class="clear"></div>

    <!--	<div id="footer">-->
    <!--		Copyright &copy; --><?php //echo date('Y'); ?><!-- by My Company.<br/>-->
    <!--		All Rights Reserved.<br/>-->
    <!--		--><?php //echo Yii::powered(); ?>
    <!--	</div>-->

</div><!-- page -->

</body>
</html>
