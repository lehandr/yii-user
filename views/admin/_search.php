<div class="wide form">

<?php $defaultActiveForm = Yii::app()->getModule('user')->defaultActiveForm; ?>
<?php $form=$this->beginWidget($defaultActiveForm['path'], $defaultActiveForm['options'] + array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'id',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'id'); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'username',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20)); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'email',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'activkey',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'activkey',array('size'=>60,'maxlength'=>128)); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'create_at',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'create_at'); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'lastvisit_at',array('class'=>'control-label')); ?>
            <?php echo $form->textField($model,'lastvisit_at'); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'superuser',array('class'=>'control-label')); ?>
            <?php echo $form->dropDownList($model,'superuser',$model->itemAlias('AdminStatus')); ?>
        </div>
    </div>

    <div class="control-group">
        <div class="controls">
            <?php echo $form->labelEx($model,'status',array('class'=>'control-label')); ?>
            <?php echo $form->dropDownList($model,'status',$model->itemAlias('UserStatus')); ?>
        </div>
    </div>

    <div class="control-group buttons">
        <?php echo CHtml::submitButton(UserModule::t('Search')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->