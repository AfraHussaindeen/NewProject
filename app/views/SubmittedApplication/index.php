<?php $this->start('head'); ?>
<<<<<<< HEAD
<html lang="en">
=======
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<?php $this->end(); ?>
<?php $this->start('body');?>
<<<<<<< HEAD
<h2 class='text-center topic'  style="color: #1A5276; font-family: Georgia, sans-serif " >SUBMITTED  APPLICATIONS</h2>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110 ">
					<div class="table100-head">
						<table class= "table-hover">
=======
<h2 class='text-centre'>Submitted Applications<h2>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
					
					

					

				<div class="table100 ver1 m-b-110">
					<div class="table100-head">
						<table>
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
                        
							<thead>
								<tr class="row100 head">
									<th class="cell100 column1">Name </th>
<<<<<<< HEAD
									<th class="cell100 column2"> Registration Number</th>
=======
									<th class="cell100 column2">  Reg Number</th>
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
									<th class="cell100 column3">  Email Address</th>
									<th class="cell100 column4">  Contact</th>
									<th class="cell100 column5">Field</th>
									<th class="cell100 column6">Departure</th>
                                    <th class="cell100 column7">Arrival</th>
                                    <th class="cell100 column8"> </th>
								</tr>
							</thead>
						</table>
					</div>

					<div class="table100-body js-pscroll">
<<<<<<< HEAD
						<table class= "table-hover">
							<tbody>
                            <?php foreach($this->notupdated as $notupdated): ?>
                                <tr class="row100 body" style="background-color:#EAF2F8">
=======
						<table>
							<tbody>
                            <?php foreach($this->notupdated as $notupdated): ?>
                                <tr class="row100 body" style="background-color:#CEECF5">
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
                                    <td >
                                    <a href="<?=PROOT?>SubmittedApplication/details/<?=$notupdated->id?>" class="cell100 column1"><?=$notupdated->nameInitial?> </td>
                                    <td class="cell100 column2"><?=$notupdated->regNumber?> </td>
                                    <td class="cell100 column3"><?=$notupdated->email?> </td>
                                    <td class="cell100 column4"><?=$notupdated->contact?> </td>
                                    <td class="cell100 column5"><?=$notupdated->field?> </td>
                                    <td class="cell100 column6"><?=$notupdated->departure?> </td>
                                    <td class="cell100 column7"><?=$notupdated->arrival?> </td>
                                    <td class="cell100 column8">
<<<<<<< HEAD
                                    <a href="<?=PROOT?>SubmittedApplication/edit/<?=$notupdated->id?>" class="btn btn-info btn-xs">
                                            <i class="glyphicon glyphicon-pencil"></i>Edit
                                        </a>
                                        <a href="<?=PROOT?>SubmittedApplication/delete/<?=$notupdated->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
                                            <i class="glyphicon glyphicon-remove"></i>Delete
                                        </a>
                                        </td>
                                    </tr>
=======
                                        <a href="<?PROOT?>SubmittedApplication/edit/<?=$notupdated->id?>" class="btn btn-info btn-xs">
                                            <i class="glyphicon glyphicon-pencil"></i>Edit
                                        </a>
                                        <a href="<?PROOT?>SubmittedApplication/delete/<?=$notupdated->id?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')">
                                            <i class="glyphicon glyphicon-remove"></i>Delete
                                        </a>
>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
                            <?php endforeach ;?>
                            <?php foreach($this->updated as $updated): ?>
                                <tr class="row100 body">
                                    <td >
                                    <a href="<?=PROOT?>SubmittedApplication/details/<?=$updated->id?>" class="cell100 column1"><?=$updated->nameInitial?> </td>
                                    <td class="cell100 column2"><?=$updated->regNumber?> </td>
                                    <td class="cell100 column3"><?=$updated->email?> </td>
                                    <td class="cell100 column4"><?=$updated->contact?> </td>
                                    <td class="cell100 column5"><?=$updated->field?> </td>
                                    <td class="cell100 column6"><?=$updated->departure?> </td>
                                    <td class="cell100 column7"><?=$updated->arrival?> </td>
<<<<<<< HEAD
                                </tr>
                            <?php endforeach ;?>
                                
=======
                            <?php endforeach ;?>

>>>>>>> 09d4dcc509cab799111b72258a3e04b77778f998
                            </tbody>
                            </table>
                    </div>   
                </div>
            </div>
        </div>
    </div>
<?php $this->end();?>