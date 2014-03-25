<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>

<h1><?php echo UserModule::t("Restore"); ?></h1>

<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<div class="form">
<?php $defaultActiveForm = Yii::app()->getModule('user')->defaultActiveForm; ?>
<?php $form=$this->beginWidget($defaultActiveForm['path'], $defaultActiveForm['options'] + array(
    'id'=>'recovery-form',
)); ?>

	<?php $form->errorSummary($model); ?>
	
	<div class="control-group">
		<?php echo $form->labelEx($model,'login_or_email'); ?>
        <div class="controls">
            <?php echo $form->textField($model,'login_or_email') ?>
            <p class="hint"><?php echo UserModule::t("Please enter your login or email address."); ?></p>
        </div>
	</div>
	
	<div class="control-group submit">
		<?php echo CHtml::submitButton(UserModule::t("Restore")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
<?php endif; ?>