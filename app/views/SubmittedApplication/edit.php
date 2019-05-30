<?php $this->setSiteTitle('Edit Application');?>

<?php $this->start('head');?>
    <link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body');?>

<div class="wrapper">

			<div class="inner">
				<div class="image-holder">
                <img src="<?php echo PROOT ?>/css/edit.png"  alt="">
                </div>


				<form action="" method="post">
                    <h3 class=" text-center header">Edit <?=$this->SubmittedApplication->nameInitial?></h3>
                    <h3 class="header">Overseas Training Application</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    
                    <div class="form-group">
                        <label for="nameInitial">Name with initials</label>
                        <input type='text' id='nameInitial' name='nameInitial' class='form-control' readonly="readonly" value='<?=$this->SubmittedApplication->nameInitial;?>' >
                    </div>    

                    <div class="form-group">
                        <label for="regNumber">Register Number</label>
                        <input type='text' id='regNumber' name='regNumber' class='form-control' readonly="readonly" value='<?=$this->SubmittedApplication->regNumber;?>' >
                    </div>    

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type='text' id='email' name='email' class='form-control' readonly="readonly" value='<?=$this->SubmittedApplication->email;?>' >
                    </div>    

                    <div class="form-group">
                        <label for="contact">Contact Number</label>
                        <input type='text' id='contact' name='contact' class='form-control' readonly="readonly" value='<?=$this->SubmittedApplication->contact;?>' >
                    </div>    

                    <div class="form-group">
                        <label for="field">Field</label>
                        <select id='field' name='field' class='form-control' value='<?=$this->SubmittedApplication->field?>'>
                            <option value='Anesthesiologist'>Anesthesiologist</option>
                            <option value='Allergist'>Allergist</option>
                            <option value='Cardiologist'>Cardiologist</option>
                            <option value='Pediatricians'>Pediatricians</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="arrival">Date Of Arrival</label>
                        <input type='date' id='arrival' name='arrival' class='form-control' value='<?=$this->SubmittedApplication->arrival?>'>
                    </div>   

                    <div class="form-group">
                        <label for="departure">Date Of Departure</label>
                        <input type='date' id='departure' name='departure' class='form-control' value='<?=$this->SubmittedApplication->departure?>'>
                    </div>
                    <br>
                    <input class="subButton" type="submit" value="Update">
                    
				</form>
				
			</div>
		</div>










<!-- 
<div class="col-md-8 col-md-offset-2 well">
<h2 class=" text-center">Edit <?=$this->SubmittedApplication->nameInitial?></h2>
<form class="form" action="" method='post'>
        <h3 class='text-center'>Overseas Training Application</h3><hr>
        <div class="bg-danger"><?= $this->displayErrors?></div>
        <div class="form-group">
            <label for="nameInitial">Name with initials</label>
            <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=$this->SubmittedApplication->nameInitial;?>' >
        </div>    
        <div class="form-group">
            <label for="regNumber">Register Number</label>
            <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=$this->SubmittedApplication->regNumber;?>' >
        </div>    
        <div class="form-group">
            <label for="email">Email</label>
            <input type='text' id='email' name='email' class='form-control' value='<?=$this->SubmittedApplication->email;?>' >
        </div>    
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type='text' id='contact' name='contact' class='form-control' value='<?=$this->SubmittedApplication->contact;?>' >
        </div>    
        <div class="form-group">
            <label for="field">Field</label>
            <select id='field' name='field' class='form-control' value='<?=$this->SubmittedApplication->field?>'>
                <option value='Anesthesiologist'>Anesthesiologist</option>
                <option value='Allergist'>Allergist</option>
                <option value='Cardiologist'>Cardiologist</option>
                <option value='Pediatricians'>Pediatricians</option>
            </select>
        </div>
        <div class="form-group">
            <label for="arrival">Date Of Arrival</label>
            <input type='date' id='arrival' name='arrival' class='form-control' value='<?=$this->SubmittedApplication->arrival?>'>
        </div>   
        <div class="form-group">
            <label for="departure">Date Of Departure</label>
            <input type='date' id='departure' name='departure' class='form-control' value='<?=$this->SubmittedApplication->departure?>'>
        </div>
        
        <div class='pull-right'>
            <input type='submit' class='btn btn-primary btn-large' value='Update'>
        </div>
        
    </form>
</div> -->
<?php $this->end();?>