<?php $this->setSiteTitle('Contact');?>

<?php $this->start('body'); ?>
<div class="container">  
<h2 class='text-center topic' >CONTACT US</h2>
    <div class="row panel panel-default ">
    <div class="panel-body">
        <div class="col-md-6 ">
            <div id="googlemap" style="width:100%; height:400px;"></div>
            <!-- <h6>Telephone number - 07705015830</h6> -->
        </div>
       
        <div class="col-md-6 panel panel-default well">
            <form class="my-form panel-body" action="" method='post'>
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
                    <textarea type='text' id='message' name='message' class='form-control' value='<?=$this->post['message']?>'></textarea>
                </div>
                
                <input type='submit' class='btn btn-default' value='Submit'>
                
            </form>
        </div>
        </div>
    </div><br><br>
</div>


<style>
    .my-form {
        color: #305896;
    }
    .my-form .btn-default {
        background-color: #305896;
        color: #fff;
        border-radius: 0;
    }
    .my-form .btn-default:hover {
        background-color: #4498C6;
        color: #fff;
    }
    .my-form .form-control {
        border-radius: 0;
        color:#104979;
    }
    .topic{
        font-family:    Georgia, serif; 
        color: #104979;
    }
</style>

<script src="https://maps.googleapis.com/maps/api/js"></script>
<script type="text/javascript">
    jQuery(function ($) {
        // Google Maps setup
        var googlemap = new google.maps.Map(
            document.getElementById('googlemap'),
            {
                center: new google.maps.LatLng(6.039545, 80.221621),
                zoom: 8,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        );

        var marker = new google.maps.Marker(
            {position: {lat:6.039545, lng: 80.221621},
             map: googlemap}
        );


    });
</script>


<?php $this->end(); ?>
