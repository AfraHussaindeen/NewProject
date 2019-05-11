<?php $this->setSiteTitle($this->SubmittedApplication->nameInitial);?>
<?php $this->start('body');?>
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
</div>
    

<?php $this->end();?> 