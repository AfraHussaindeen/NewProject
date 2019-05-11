<?php $this->setSiteTitle('Edit Application');?>
<?php $this->start('body');?>
<div class="col-md-8 col-md-offset-2 well">
<h2 class=" text-center">Edit <?=$this->SubmittedApplication->nameInitial?></h2>
    <?php $this->partial('SubmittedApplication','form')?>
</div>
<?php $this->end();?>