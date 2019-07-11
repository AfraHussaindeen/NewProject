<?php $this->setSiteTitle('Profile');?>

<?php $this->start('head'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>



<div class="wrapper">
			<div class="inner">
				<div class="image-holder " style="height: 40% ; width:20% ">
                <img src="<?php echo PROOT ?>/css/profile.png"  alt="">
                </div>


                <form action="" method="post">  
                    <h3 class="header">Profile</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    

                    <div class="form-group d-inline-block">
                        <label for="fname">First Name</label>
                        <input type='text' id='fname' name='fname' class='form-control' value='<?=currentUser()->fname;?>' >
                    </div>    
                    <div class="form-group">
                        <label for="nameInitial">Name with initials</label>
                        <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=currentUser()->nameInitial;?>' >
                    </div>    
                    <div class="form-group">
                        <label for="nicNumber">NIC Number</label>
                        <input type='text' id='nicNumber' name='nicNumber' class='form-control' value='<?=currentUser()->nicNumber;?>' >
                    </div>  
                    <div class="form-group">
                        <label for="regNumber">Register Number</label>
                        <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=currentUser()->regNumber;?>' >
                    </div>    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type='text' id='email' name='email' class='form-control' value='<?=currentUser()->email;?>' >
                    </div>    
                    <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type='text' id='contact' name='contact' class='form-control' value='<?=currentUser()->contact;?>'>
                    </div>    
                 
                    <br>
                    <input class="subButton" type="submit" value="Save">
                    
				</form>


				
			</div>
		</div>

<?php $this->end(); ?>
