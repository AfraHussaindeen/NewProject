<?php $this->setSiteTitle(' Access restricted ');?>

<?php $this->start('body');?>
  <h3 class='text-center  '> You do not have permission to view this page.</h3>

  <div class="container-fluid">
  <img class="center-block" src="<?php echo PROOT ?>/css/lock.png"  alt="" height="55%" width="50%">
  </div>

<?php $this->end();?>
