<?php $this->setSiteTitle('Overseas Training');?>

<?php $this->start('head'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>



<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                <img src="<?php echo PROOT ?>/css/ost.png"  alt="">
                </div>


				<form action="" method="post">
                    <h3 class="header">Overseas Training Application</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    
                    <div class="form-group">
                        <label for="nameInitial">Name with initials</label>
                        <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=currentUser()->nameInitial;?>' readonly="readonly">
                    </div>    
                    <div class="form-group">
                        <label for="regNumber">Register Number</label>
                        <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=currentUser()->regNumber;?>' readonly="readonly">
                    </div>    
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type='text' id='email' name='email' class='form-control' value='<?=currentUser()->email;?>' readonly="readonly">
                    </div>    
                    <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type='text' id='contact' name='contact' class='form-control' value='<?=currentUser()->contact;?>' readonly="readonly">
                    </div>    
                    <div class="form-group">
                        <label for="field">Field</label>
                        <select id='field' name='field' class='form-control'>
                            <option value='Anesthesiologist'>Anesthesiologist</option>
                            <option value='Allergist'>Allergist</option>
                            <option value='Cardiologist'>Cardiologist</option>
                            <option value='Pediatricians'>Pediatricians</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="arrival">Date Of Arrival</label>
                        <input type='date' id='arrival' name='arrival' class='form-control' value='<?=$this->post['arrival']?>'>
                    </div>   
                    <div class="form-group">
                        <label for="departure">Date Of Departure</label>
                        <input type='date' id='departure' name='departure' class='form-control' value='<?=$this->post['departure']?>' >
                    </div>
                    
                    <br>
                    <input class="subButton" type="submit" value="Submit">
                    
				</form>
				
			</div>
        </div>
        <br>
        <?php include 'C:\xampp\htdocs\NewProject\app\views\layouts\footer.php' ?>
<?php $this->end(); ?>
