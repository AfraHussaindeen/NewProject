
<?php $this->setSiteTitle('New Submission');?>
<link rel="stylesheet"  href="<?php echo PROOT ?>/css/form.css">
<?php $this->start('body');?>



<div class="wrapper">
			<div class="inner">
				<div class="image-holder">
                <img src="<?php echo PROOT ?>/css/new.png"  alt="">
                </div>


				<form action="" method="post">
                    <h3 class="header">New Submission</h3>
                    
                    <div class="bg-danger"><?=$this->displayErrors ?></div>
                    <br>
                    
                    <div class="form-row">
                        <input type='text' id='nameInitial' name='nameInitial' class='form-control' placeholder="Name with Initials" value='<?=$this->post['nameInitial']?>'>
                    </div>

                    <div class="form-row">
                        <input type='text' id='regNumber' name='regNumber' class='form-control' placeholder="Register Number" value='<?=$this->post['regNumber']?>'>
                
                    </div>
                    
                    <div class="form-group">
                        <input type='text' id='nicNumber' name='nicNumber' class='form-control' placeholder="NIC Number" value='<?=$this->post['nicNumber']?>'>
                    </div>
<br>
                    
                    <input class="subButton" type="submit" value="Submit">
                    
				</form>
				
			</div>
		</div>

<br>
<br>
        <?php include 'C:\xampp\htdocs\NewProject\app\views\layouts\footer.php' ?>
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
