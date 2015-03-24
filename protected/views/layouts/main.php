<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<?php Yii::app()->bootstrap->registerBootstrapCss(); ?>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/akins-admin.css" />
	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">
            <?php
	 $this->widget(    'bootstrap.widgets.TbNavbar',
    array(
    'type' => 'inverse', // null or 'inverse'
    'brand' => '',
    'brandUrl' => '#',
    'collapse' => true, // requires bootstrap-responsive.css
    'fixed' => false,
    'items' => array(
    array(
    'class' => 'bootstrap.widgets.TbMenu',
        'submenuHtmlOptions' => array('class' => 'multi-level'),
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
                                array('label'=>'Admins', 'url'=>array('/admins/admin')),
                                array('label'=>'User Reg', 'url'=>array('/users/admin')),
                                array('label'=>'Events', 'url'=>array('/events/admin')),
//                                array('label'=>'Food Category', 'url'=>array('/foodCat/admin')),
//                                array('label'=>'Food Items', 'url'=>array('/foodItems/admin')),
//                                array('label'=>'Food Menu', 'url'=>array('/foodMenu/admin')),
//                                array('label'=>'Guests', 'url'=>array('/guests/admin')),
//                                array('label'=>'Present List', 'url'=>array('/presentList/create')),
//                                array('label'=>'Tables', 'url'=>array('/tables/admin')),
//                                array('label'=>'Seating', 'url'=>array('/seating/admin')),
//                                array('label'=>'Uploads', 'url'=>array('/uploads/admin')),
                                //array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				//array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
	)
        )
        )
        ); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> Tesla Vault.<br/>
		All Rights Reserved.<br/>
                <i><b>Tesla Vault</b></i>
		<?php //echo Yii::powered; ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
