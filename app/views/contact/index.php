<?php $this->setSiteTitle('Contact');?>

<?php $this->start('body'); ?>

<div class='col-md-6 col-md-offset-3 well'>
    <form class="form" action="" method='post'>
        <h3 class='text-center'>Contact us</h3><hr>
        <div class="bg-danger"><?= $this->displayErrors?></div>
        <div class="form-group">
            <label for="nameInitial">Name with Initials</label>
            <?php if(currentUser()):?>
                <?php $value = currentUser()->nameInitial?>
            <?php else:?>
                <?php $value = $this->post['nameInitial']?>
            <?php endif?>
            <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=$value?>'>
        </div>        
        <div class="form-group">
            <label for="regNumber">Register Number</label>
            <?php if(currentUser()):?>
                <?php $value = currentUser()->regNumber?>
            <?php else:?>
                <?php $value = $this->post['regNumber']?>
            <?php endif?>
            <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=$value?>'>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <?php if(currentUser()):?>
                <?php $value = currentUser()->email?>
            <?php else:?>
                <?php $value = $this->post['email']?>
            <?php endif?>
            <input type='email' id='email' name='email' class='form-control' value='<?=$value?>'>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type='text' id='subject' name='subject' class='form-control' value='<?=$this->post['subject']?>'>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type='text' id='message' name='message' class='form-control' value='<?=$this->post['message']?>'>
        </div>
        <div class='pull-right'>
            <input type='submit' class='btn btn-primary btn-large' value='Submit'>
        </div>
    </form>
</div>


<?php $this->end(); ?>
