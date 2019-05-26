<?php $this->setSiteTitle('LogIn');?>

<?php $this->start('head'); ?>
    <link rel="stylesheet"  href="<?PROOT?>css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="col-md-6 col-md-offset-3 well">
    <form class="form" action="<?=PROOT?>register/login" method="post">
        <div class="bg-danger"><?=$this->displayErrors ?></div>
        <h3 class="text-center">Log In</h3>
        <div class="form-group">  
            <label for="nicNumber">NIC Number</label>
            <input type="text" name="nicNumber" id="nicNumber" class="form-control">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
            <label for="remember_me">Remember Me <input type="checkbox" id ="remember_me" name="remember_me" value="on"></label>
        </div>

        <div class="form-group">
            <input type="submit" value="login" class="btn btn-large btn-primary">
        </div>
        <div class="text-right">
        <a href="<?=PROOT?>register/register" class="text-primary">Register</a>
        </div>
    </form>
</div>


<div class="form-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <form class="form-horizontal">
                    <span class="heading">please login</span>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputName2">your email</label>
                        <input required="" name="login[username]" type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label class="control-label" for="exampleInputName2">password</label>
                        <input required="" name="login[password]" type="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-default">login</button>
                    </div>
                    <div class="form-group">
                        <a href="#" class="signup">Sign up</a>
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $this->end(); ?>