<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change password"),
);
$this->menu=array(
	((UserModule::isAdmin())
		?array('label'=>UserModule::t('Manage Users'), 'url'=>array('/user/admin'))
		:array()),
    array('label'=>UserModule::t('List User'), 'url'=>array('/user')),
    array('label'=>UserModule::t('Profile'), 'url'=>array('/user/profile')),
    array('label'=>UserModule::t('Edit'), 'url'=>array('edit')),
    array('label'=>UserModule::t('Logout'), 'url'=>array('/user/logout')),
);
?>

<h1><?php echo UserModule::t("Change password"); ?></h1>

<div class="form">
<?php $defaultActiveForm = Yii::app()->getModule('user')->defaultActiveForm; ?>
<?php $form=$this->beginWidget($defaultActiveForm['path'], $defaultActiveForm['options'] + array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	<?php echo $form->errorSummary($model); ?>
	
	<div class="control-group">
	    <?php echo $form->labelEx($model,'oldPassword',array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->passwordField($model,'oldPassword'); ?>
            <?php echo $form->error($model,'oldPassword'); ?>
        </div>
	</div>
	
	<div class="control-group">
        <?php echo $form->labelEx($model,'password',array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->passwordField($model,'password'); ?>
            <?php echo $form->error($model,'password'); ?>
            <p class="hint">
            <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
            </p>
        </div>
	</div>
	
	<div class="control-group">
        <?php echo $form->labelEx($model,'verifyPassword',array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->passwordField($model,'verifyPassword'); ?>
            <?php echo $form->error($model,'verifyPassword'); ?>
        </div>
	</div>
	
	
	<div class="control-group submit">
	    <?php echo CHtml::submitButton(UserModule::t("Save")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->