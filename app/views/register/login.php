<?php $this->setSiteTitle('LogIn');?>

<?php $this->start('head'); ?>
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

<style>
.form-bg{
    background: url(../images/img-1.jpg);
    background-size: cover;
    position: relative;
}
.form-bg:before{
    content: "";
    width: 100%;
    height: 100%;
    background: rgba(73, 116, 130, 0.9);
    position: absolute;
    top: 0;
    left: 0;
    opacity: 0.8;
}
.form-horizontal{
    padding: 60px 40px 55px 40px;
    margin-top: 40px;
    background: #fff;
    border-radius: 10px;
}
.form-horizontal:before{
    content: "\f007";
    font-family: "Font Awesome 5 Free";
    font-weight: 900;
    width: 100px;
    height: 100px;
    line-height: 96px;
    border-radius: 50%;
    border: 4px solid #fff;
    background: #14a3aa;
    font-size: 40px;
    color: #fff;
    text-align: center;
    margin: 0 auto;
    position: absolute;
    top: -10px;
    left: 0;
    right: 0;
}
.form-horizontal .heading{
    display: block;
    font-size: 28px;
    color: #597886;
    text-transform: capitalize;
    text-align: center;
    margin-bottom: 20px;
}
.form-horizontal .form-group{
    margin: 0 0 30px 0;
    position: relative;
}
.form-horizontal .form-group:last-child{ margin: 0; }
.form-horizontal .form-control{
    height: 50px;
    border: 2px solid #cbe9ea;
    border-radius: 5px;
    box-shadow: none;
    padding: 0 20px 0 26%;
    font-size: 16px;
    font-weight: bold;
    color: #94abb6;
    position: relative;
    transition: all 0.3s ease 0s;
}
.form-horizontal .form-control:focus{
    box-shadow: none;
    outline: 0 none;
}
.form-horizontal .control-label{
    width: 25%;
    height: 46px;
    line-height: 46px;
    background: #f5ffff;
    padding: 0;
    font-size: 16px;
    font-weight: bold;
    color: #94abb6;
    text-transform: capitalize;
    text-align: center;
    border-right: 2px solid #cbe9ea;
    position: absolute;
    top: 2px;
    left: 2px;
    z-index: 1;
}
.form-horizontal .btn,
.form-horizontal .btn:focus{
    width: 100%;
    height: 50px;
    line-height: 50px;
    padding: 0 30px;
    background: #14a3aa;
    border: none;
    border-radius: 6px;
    font-size: 18px;
    font-weight: bold;
    color: #fff;
    text-transform: uppercase;
    position: relative;
}
.form-horizontal .btn:hover{ background: #14a3aa; }
.form-horizontal .btn:before{
    content: "\f084";
    font-family: "Font Awesome 5 Free"; font-weight: 900;
    position: absolute;
    top: 0;
    left: 30px;
    font-size: 24px;
    color: #fff;
}
.form-horizontal .signup,
.form-horizontal .forgot-pass{
    display: inline-block;
    font-size: 17px;
    font-weight: bold;
    color: #14a3aa;
}
.form-horizontal .forgot-pass{
    float: right;
    color: #58aebc;
}
@media only screen and (max-width: 990px){
    .form-horizontal:before{ top: -50px; }
}
@media only screen and (max-width: 480px){
    .form-horizontal{ padding: 60px 20px 40px 20px; }
    .form-horizontal .control-label{ font-size: 12px; }
}
</style>
<?php $this->end(); ?>