<?php $this->start('head'); ?>
<html lang="en">
<meta charset="UTF-8">

<?php $this->end(); ?>
<?php $this->start('body');?>
<link rel="stylesheet" type="text/css" href="css/main.css">
<h2 class='text-center topic'  style="color: #1A5276; font-family: Georgia, sans-serif " >SUBMITTED  CONTACT FORMS</h2>
<div class="container">
  <table class="responsive-table">
  
                        
							<thead>
								<tr >
                                    <th scope="col">Name</th>
                                    <th scope="col">Registration Number</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col"></th>
								</tr>
							</thead>
						
							<tbody>
                            
                            <?php foreach($this->updated as $updated): ?>
                                <tr >
                                    <th scope="row" >
                                    <a href="<?=PROOT?>SubmittedContact/details/<?=$updated->id?>" ><?=$updated->nameInitial?> </td>
                                    <td data-title="Registration Number"><?=$updated->regNumber?> </td>
                                    
                                    <td data-title="Subject"><?=$updated->subject?> </td>
                                    <td data-title="">
                                    <a href="<?=PROOT?>SubmittedContact/delete/<?=$updated->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
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
<?php $this->end();?>