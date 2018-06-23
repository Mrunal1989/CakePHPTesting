<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'SarhadTime';
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
            <?= $cakeDescription ?>:
            <?= $this->fetch('title') ?>
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('login.css,bootstrap.min.css') ?>
        <?= $this->Html->script('jquery.min.js') ?>

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body id="body-login">
        <div class="wrapper">
            <div class="v-align">
                <header role="banner">
                    <div id="header">
                        <div class="logo">
                            <img src="<?php echo $this->Url->image("logo.jpg"); ?>" /> 
                        </div>
                    </div>
                </header>
            </div>
            <br>
            <div class="container">
                <div class="row">
                    <div style="width:100%;">
                        <div class="form-group">
                            <input type="text" id="txtUserCode" name="txtUserCode" class="form-control" required>
                            <label class="form-control-placeholder" for="txtUserCode">User Code</label>
                        </div>
                        <div class="form-group">
                            <input type="text" id="txtUserName" name="txtUserName" class="form-control" required>
                            <label class="form-control-placeholder" for="txtUserName">User Name</label>
                        </div>
                        <div class="form-group">
                            <input type="password" id="txtPassword" name="txtPassword" class="form-control" required>
                            <label class="form-control-placeholder" for="txtPassword">Password</label>
                        </div>
                    </div>
                    <div id="submit-wrapper" style="width:100%;">
                        <input type="button" id="btnLogin" class="login primary" title="" value="Log in"  style="width:100%;">
                        <div class="submit-icon icon-confirm-white"></div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>
