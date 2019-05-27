
<?php $this->setSiteTitle('Submitted Letters');?>
<html lang="en">

<?php $this->start('body'); ?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<h1 class="text-center ">Submitted Letters </h1>
<div class="container">
  <table class="responsive-table">
    <thead>
    
        <th scope="col">Name with Initials</th>
        <th scope="col">NIC Number</th>
        <th scope="col">Reg Number</th>
        <th scope="col">Date of Stage1</th>
        <th scope="col">Date of Stage2</th>
        <th scope="col">Date of Stage3</th>
        <th scope="col">Date of Stage4</th>
        <th scope="col">Date of Stage5</th>
        <th scope="col"></th>
        
    </thead>

    <tbody>
        <?php foreach($this->submissions as $submission): ?>
            <tr>
            <td data-title= "Name with Initials"><?= $submission->nameInitial ?></td>
            <td data-title="NIC Number"><?= $submission->nicNumber ?></td>
            <td data-title="Reg Number"><?= $submission->regNumber ?></td>
            <td data-title="Date of Stage1"><?= $submission->dateStage1 ?></td>
            <td data-title="Date of Stage2"><?= $submission->dateStage2 ?></td>
            <td data-title="Date of Stage3"><?= $submission->dateStage3 ?></td>
            <td data-title="Date of Stage4"><?= $submission->dateStage4 ?></td>
            <td data-title="Date of Stage5"><?= $submission->dateStage5 ?></td>
            <td data-title="">
                <a href="<?=PROOT?>letter/delete/<?=$submission->id?>" class="btn  btn-danger btn-xs" onclick="if(!confirm('Are you sure that you want to delete?')){return false;}">
                    <i class="glyphicon glyphicon-trash"></i>Delete
                </a>
                <a href="<?=PROOT?>letter/nextStage/<?=$submission->id?>" class="btn  btn-info btn-xs" onclick="if(!confirm('Are you sure that you want to move to the next stage?')){return false;}">
                    </i>Next
                </a>
            </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
</div>

		<!-- Site footer -->
        <footer class="site-footer">
      
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-6 col-xs-12">
            <p class="copyright-text">Copyright &copy; 2017 All Rights Reserved by 
         <a href="#">Scanfcode</a>.
            </p>
          </div>

          <div class="col-md-4 col-sm-6 col-xs-12">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="dribbble" href="#"><i class="fa fa-dribbble"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>   
            </ul>
          </div>
        </div>
      </div>
</footer>

<?php $this->end(); ?>

