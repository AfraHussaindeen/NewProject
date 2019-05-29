<?php $this->setSiteTitle($this->SubmittedApplication->nameInitial);?>

<?php $this->start('head'); ?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->end(); ?>

<?php $this->start('body'); ?>

<div class="container">
			<div class="inner">
				<div class="image-holder" style="transform: translateX(100px);">
                <img  style="width: 250px ; height: 300px" src="<?php echo PROOT ?>/css/detail.png"  alt="">
                 </div>
            <div class="container" style="padding-top: 50px  ;font-size: 20px ;font-family:'Times New Roman', Times, serif ;transform: translateX(0px);">
            <p ><strong>Name: </strong><?=$this->SubmittedApplication->nameInitial?></p>
        <p ><strong>Register Number: </strong><?=$this->SubmittedApplication->regNumber?></p>
        <p><strong>Email: </strong><?=$this->SubmittedApplication->email?></p>
        <p><strong>Contact Number: </strong><?=$this->SubmittedApplication->contact?></p>
        <p><strong>Field: </strong><?=$this->SubmittedApplication->field?></p>
        <p><strong>Departure: </strong><?=$this->SubmittedApplication->departure?></p>
        <p><strong>Arrival: </strong><?=$this->SubmittedApplication->arrival?></p>
        <br><br>
        <a href="<?=PROOT?>SubmittedApplication" class="subButton">Back</a>
    </div>
    
        
			</div>
		</div>


<!-- 
<div class="col-md-8 col-md-offset-2 well">
    
    <a href="<?=PROOT?>SubmittedApplication" class="btn btn-xs btn-default">Back</a>
    <h2 class=" text-center"><?=$this->SubmittedApplication->nameInitial?></h2>
    <div class="container">
        <p><strong>Register Number: </strong><?=$this->SubmittedApplication->regNumber?></p>
        <p><strong>Email: </strong><?=$this->SubmittedApplication->email?></p>
        <p><strong>Contact Number: </strong><?=$this->SubmittedApplication->contact?></p>
        <p><strong>Field: </strong><?=$this->SubmittedApplication->field?></p>
        <p><strong>Departure: </strong><?=$this->SubmittedApplication->departure?></p>
        <p><strong>Arrival: </strong><?=$this->SubmittedApplication->arrival?></p>
    </div>
</div> -->
    

<?php $this->end();?> 