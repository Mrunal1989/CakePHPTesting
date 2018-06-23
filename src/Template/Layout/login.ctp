<html>
    <head>
        <title>
            SarhadTime : User Login
        </title>
        <?= $this->Html->meta('icon') ?>

        <?= $this->Html->css('login.css') ?>
        <?= $this->Html->css('bootstrap.min.css') ?>
          <?= $this->Html->css('logs.bootstrap.min') ?>
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
                            <?=  $this->Html->image('logo.jpg') ?>
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
