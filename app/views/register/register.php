<?php $this->setSiteTitle('Register');?>

<?php $this->start('head'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>



<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                <img src="<?php echo PROOT ?>/css/register.png"  alt="">
                </div>


				<form action="" method="post">
                    <h3 class="header">Register Here</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    
                    <div class="form-row">
                        <input type='text' id='fname' name='fname' class='form-control' placeholder="First Name" value='<?=$this->post['fname']?>'>
                    </div>

                    <div class="form-row">
                    <input type='text' id='nameInitial' name='nameInitial' class='form-control' placeholder="Name with Initials" value='<?=$this->post['nameInitial']?>'>
                
                    </div>

                    <div class="form-row">
                    <input type='text' id='nicNumber' name='nicNumber' class='form-control' placeholder="NIC Number" value='<?=$this->post['nicNumber']?>'>
                
                    </div>

                    <div class="form-row">
                    <input type='text' id='regNumber' name='regNumber' class='form-control' placeholder="Register Number" value='<?=$this->post['regNumber']?>'>
                
                    </div>

                    <div class="form-row">
                    <input type='text' id='contact' name='contact' class='form-control' placeholder="Contact Number" value='<?=$this->post['contact']?>'>
                
                    </div>

                    <div class="form-row">
                    <input type='email' id='email' name='email' class='form-control' placeholder="Email" value='<?=$this->post['email']?>'>
                
                    </div>

                    <div class="form-row">
                    <input type='password' id='password' name='password' class='form-control' placeholder="Choose a password" value='<?=$this->post['password']?>'>

                    </div>
                    
                    
                    <div class="form-group">
                    <input type='password' id='confirm' name='confirm' class='form-control' placeholder="Confirm password" value='<?=$this->post['confirm']?>'>
                    </div>

                    
                    <input class="subButton" type="submit" value="Register">

				</form>
				
			</div>
		</div>

<!-- 


<div class='col-md-6 col-md-offset-3 well'>
    <form class="form" action="" method='post'>
        <h3 class='text-center'>Register Here!</h3><hr>
        <div class="bg-danger"><?= $this->displayErrors?></div>
        <div class="form-group">
            <label for="fname">First Name</label>
            <input type='text' id='fname' name='fname' class='form-control' value='<?=$this->post['fname']?>'>
        </div>
        <div class="form-group">
            <label for="nameInitial">Name with Initials</label>
            <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=$this->post['nameInitial']?>'>
        </div>        
        <div class="form-group">
            <label for="nicNumber">NIC number</label>
            <input type='text' id='nicNumber' name='nicNumber' class='form-control' value='<?=$this->post['nicNumber']?>'>
        </div>
        <div class="form-group">
            <label for="regNumber">Register Number</label>
            <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=$this->post['regNumber']?>'>
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type='text' id='contact' name='contact' class='form-control' value='<?=$this->post['contact']?>'>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type='email' id='email' name='email' class='form-control' value='<?=$this->post['email']?>'>
        </div>
        <div class="form-group">
            <label for="password">Choose a Password</label>
            <input type='password' id='password' name='password' class='form-control' value='<?=$this->post['password']?>'>
        </div>
        <div class="form-group">
            <label for="confirm">Confirm Password</label>
            <input type='password' id='confirm' name='confirm' class='form-control' value='<?=$this->post['confirm']?>'>
        </div>
        <div class='pull-right'>
            <input type='submit' class='btn btn-primary btn-large' value='Register'>
        </div>
    </form>
</div> -->

<?php $this->end(); ?>
