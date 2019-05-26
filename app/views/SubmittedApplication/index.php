<?php $this->start('head'); ?>
<html lang="en">
<meta charset="UTF-8">

<?php $this->end(); ?>
<?php $this->start('body');?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<h2 class='text-center topic'  style="color: #1A5276; font-family: Georgia, sans-serif " >SUBMITTED  APPLICATIONS</h2>
<div class="container">
  <table class="responsive-table">
  
                        
							<thead>
								<tr >
                                    <th scope="col">Name</th>
                                    <th scope="col">Registration Number</th>
                                    <th scope="col">Email Address</th>
                                    <th scope="col">Contact</th>
                                    <th scope="col">Field</th>
                                    <th scope="col">Departure</th>
                                    <th scope="col">Arrival</th>
                                    <th scope="col"></th>
									
								</tr>
							</thead>
						
					

					
							<tbody>
                            <?php foreach($this->notupdated as $notupdated): ?>
                                <tr style="background-color: rgba(54, 93, 82, 0.1)" >
                                    <th scope="row" >
                                    <a href="<?=PROOT?>SubmittedApplication/details/<?=$notupdated->id?>" ><?=$notupdated->nameInitial?> </th>
                                    <td data-title="Registration Number"><?=$notupdated->regNumber?> </td>
                                    <td data-title="Email Address"><?=$notupdated->email?> </td>
                                    <td data-title="Contact"><?=$notupdated->contact?> </td>
                                    <td data-title="Field"><?=$notupdated->field?> </td>
                                    <td data-title="Departure"><?=$notupdated->departure?> </td>
                                    <td data-title="Arrival"><?=$notupdated->arrival?> </td>
                                    <td data-title="">
                                    <a href="<?=PROOT?>SubmittedApplication/edit/<?=$notupdated->id?>" class="btn btn-info btn-xs">
                                            <i class="glyphicon glyphicon-pencil"></i>Edit
                                        </a>
                                        <a href="<?=PROOT?>SubmittedApplication/delete/<?=$notupdated->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
                                            <i class="glyphicon glyphicon-remove"></i>Delete
                                        </a>
                                        </td>
                                    </tr>
                            <?php endforeach ;?>
                            <?php foreach($this->updated as $updated): ?>
                                <tr >
                                    <th scope="row" >
                                    <a href="<?=PROOT?>SubmittedApplication/details/<?=$updated->id?>" ><?=$updated->nameInitial?> </td>
                                    <td data-title="Registration Number"><?=$updated->regNumber?> </td>
                                    <td data-title="Email Address"><?=$updated->email?> </td>
                                    <td data-title="Contact"><?=$updated->contact?> </td>
                                    <td data-title="Field"><?=$updated->field?> </td>
                                    <td data-title="Departure"><?=$updated->departure?> </td>
                                    <td data-title="Arrival"><?=$updated->arrival?> </td>
                                    <td data-title="">
                                    <a href="<?=PROOT?>SubmittedApplication/delete/<?=$updated->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
                                            <i class="glyphicon glyphicon-remove"></i>Delete
                                        </a>
                                    </td>
                                </tr>
                            <?php endforeach ;?>
                                
                            </tbody>
                            </table>
                    </div>   
                </div>
            </div>
        </div>
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
<?php $this->end();?>