<?php
/* @var $this SiteController */
/* @var $model LoginForm */
?>

<?php $form = $this->beginWidget('CActiveForm', ['id' => 'login-form']); ?>
<div id="upper">
    <p><label for="username"></p>
    <label for="username">Siadm Al-Lathifah Mulia

</div>
<?= ($model->getError('username')) ?>
<?= ($model->getError('password')) ?>
<!--<label for="username">Username:</label>-->
<input name="LoginForm[username]" id="LoginForm_username" type="text" placeholder="Nama Pengguna"/>
<!--<label for="password">Password:</label>-->
<input name="LoginForm[password]" id="LoginForm_password" type="password" placeholder="Kata Sandi"/>

<div id="lower">

    

    <input type="submit" name="yt0" value="Masuk" />
       
        
</div><!--/ lower-->
<?php $this->endWidget() ?>