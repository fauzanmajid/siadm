<html>

    <link rel="stylesheet" href="<?php Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/login.css'); ?>">
    <link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:900' rel='stylesheet' type='text/css'>
    <body>

        <p class="hint">
            <?php
            foreach (Yii::app()->user->getFlashes() as $key => $message) {
                echo '<div class="flash-' . $key . '">' . $message . "</div>\n<br>";
            }
            ?>
        </p>
        <div id="container">
            <?php echo $content; ?>
        </div>

    </body>
</html>