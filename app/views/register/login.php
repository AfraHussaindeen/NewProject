
                
<?php $this->setSiteTitle('LogIn');?>

<?php $this->start('head'); ?>
    
<?php $this->end(); ?>

<?php $this->start('body'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">


<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                <img src="<?php echo PROOT ?>/css/login.png"  alt="">
                </div>


				<form action="<?=PROOT?>register/login" method="post">
                    <h3 class="header">Log In</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    
                    <div class="form-row">
                        <input type="text" name="nicNumber" id="nicNumber" class="form-control" placeholder="NIC Number">
                    </div>

                    <div class="form-row">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                
                    </div>
                    
                    <div class="form-group">
                        <label for="remember_me">Remember Me <input type="checkbox" id ="remember_me" name="remember_me" value="on"></label>
                    </div>

                    
            <input type="submit" value="login">
        <div class="text-right">
        <a href="<?=PROOT?>register/register" >Register</a>
        </div>
				</form>
				
			</div>
		</div>

<?php $this->end(); ?>