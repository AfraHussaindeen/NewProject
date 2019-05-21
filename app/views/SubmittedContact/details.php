<?php $this->setSiteTitle($this->SubmittedContact->nameInitial);?>
<?php $this->start('body');?>
<div class="col-md-8 col-md-offset-2 well">
    
    <a href="<?=PROOT?>SubmittedContact" class="btn btn-xs btn-default">Back</a>
    <h2 class=" text-center"><?=$this->SubmittedContact->nameInitial?></h2>
    <div class="container">
        <p><strong>Register Number: </strong><?=$this->SubmittedContact->regNumber?></p>
        <p><strong>Email: </strong><?=$this->SubmittedContact->email?></p>
        <p><strong>Subject: </strong><?=$this->SubmittedContact->subject?></p>
        <p><strong>Message: </strong><?=$this->SubmittedContact->message?></p>
    </div>
</div>
    

<?php $this->end();?> 