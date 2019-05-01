
<?php $this->setSiteTitle('New Submission');?>

<?php $this->start('body');?>
    <div class="col-md-8 col-md-offset-2 well">
        <h2 class="text-center ">New Submission</h2>
        <hr>
        <div class="bg-danger"><?= $this->displayErrors?></div>
        <form class="form" action="" method="post">
            <div class="form-group">
                <label for="nameInitial">Name with Initials</label>
                <input type='text' id='nameInitial' name='nameInitial' class='form-control' value='<?=$this->post['nameInitial']?>'>
            </div> 
            <div class="form-group">
                <label for="regNumber">Register Number</label>
                <input type='text' id='regNumber' name='regNumber' class='form-control' value='<?=$this->post['regNumber']?>'>
            </div> 
            <div class="form-group">
                <label for="nicNumber">NIC Number</label>
                <input type='text' id='nicNumber' name='nicNumber' class='form-control' value='<?=$this->post['nicNumber']?>'>
            </div> 
        
            <div class='pull-right '>
                <input type='submit' class='btn btn-primary btn-large btn-primary-spacing' value='Submit' >
            </div>
           

        </form>

    </div>


<?php $this->end();?>


<?php 

// xs = extra small screens (mobile phones)
// sm = small screens (tablets)
// md = medium screens (some desktops)
// lg = large screens (remaining desktops)

//Usually a column is divided into 12 equal parts.
//col-md-8 => in medium screen use 8 parts outof 12 parts.

//well adds a rounded boarder around the element.
//well-sm =>small wells
//well-lg => large wells
?>