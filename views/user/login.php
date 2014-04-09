<?php
$this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Login");
$this->breadcrumbs=array(
	UserModule::t("Login"),
);
?>

<div id="login-container">


<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>


<h1><?= Yii::app()->name; ?></h1>
<div class="form well" id="login">
<?php echo CHtml::beginForm(); ?>
    <h2><?php echo UserModule::t("Login"); ?></h2>
	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>


	<div class="control-group">
		<?php echo CHtml::activeLabelEx($model,'username'); ?>
		<?php echo CHtml::activeTextField($model,'username') ?>
	</div>
	
	<div class="control-group">
		<?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password') ?>
	</div>
	<?php if(Yii::app()->getModule('user')->allowGuestRegister): ?>
	<div class="control-group">
		<p class="hint">
		<?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		</p>
	</div>
	<?php endif; ?>

    <label class="checkbox">
        <?php echo CHtml::activeCheckBox($model,'rememberMe'); ?> <?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
    </label>


    <?php if($model->hasErrors()): ?>
        <div class="alert alert-danger">
            <?php echo CHtml::errorSummary($model, false); ?>
        </div>
    <?php endif; ?>


	<div class="control-group submit">
		<?php echo CHtml::submitButton(UserModule::t("Login"), ['class'=>'btn btn-primary btn-large']); ?>
	</div>
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
</div>

<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>