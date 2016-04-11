<?php
/* @var $this SiteController */
/* @var $model LoginForm */
?>

<?php $form = $this->beginWidget('CActiveForm', ['id' => 'login-form']); ?>
<div id="upper">
    <p><label for="username"></p>
    <label for="username">Sidm Al-Lathifa Mulia

</div>
<?= ($model->getError('username')) ?>
<?= ($model->getError('password')) ?>
<!--<label for="username">Username:</label>-->
<input name="LoginForm[username]" id="LoginForm_username" type="text" placeholder="Username"/>
<!--<label for="password">Password:</label>-->
<input name="LoginForm[password]" id="LoginForm_password" type="password" placeholder="Password"/>

<div id="lower">

    <?php echo $form->checkBox($model, 'rememberMe'); ?>
    <?php echo $form->label($model, 'rememberMe'); ?>
    <?php echo $form->error($model, 'rememberMe'); ?>

    <input type="submit" name="yt0" value="Login" />
       
        
</div><!--/ lower-->
<?php $this->endWidget() ?>