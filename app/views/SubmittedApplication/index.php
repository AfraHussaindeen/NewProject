<?php $this->start('head'); ?>
<html lang="en">
<meta charset="UTF-8">

<?php $this->end(); ?>
<?php $this->start('body'); ?>
<link rel="stylesheet" type="text/css" href="css/mainsubapp.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<h2 class='text-center topic' style="color: #1A5276; font-family: Georgia, sans-serif ">SUBMITTED APPLICATIONS</h2>

<div class="container-table100">
    <div class="limiter">

        <div class="wrap-table100">
            <div class="table">

                <div class="row header">

                    <div class="cell">Name</div>
                    <div class="cell">Registration Number</div>
                    <div class="cell">Email Address</div>
                    <div class="cell">Contact</div>
                    <div class="cell">Field</div>
                    <div class="cell">Departure</div>
                    <div class="cell">Arrival</div>
                    <div class="cell"></div>


                </div>

                <?php foreach ($this->notupdated as $notupdated) : ?>
                    <div class="row" style="background-color: rgba(54, 93, 82, 0.1)">
                    <div class="cell" data-title="Name"><a href="<?= PROOT ?>SubmittedApplication/details/<?= $notupdated->id ?>"><?= $notupdated->nameInitial ?></a> </div>
                        <div class="cell" data-title="Registration Number"><?= $notupdated->regNumber ?> </div>
                        <div class="cell" data-title="Email Address"><?= $notupdated->email ?> </div>
                        <div class="cell" data-title="Contact"><?= $notupdated->contact ?> </div>
                        <div class="cell" data-title="Field"><?= $notupdated->field ?> </div>
                        <div class="cell" data-title="Departure"><?= $notupdated->departure ?> </div>
                        <div class="cell" data-title="Arrival"><?= $notupdated->arrival ?> </div>
                        <div class="cell" data-title="">
                            <a href="<?= PROOT ?>SubmittedApplication/edit/<?= $notupdated->id ?>" class="btn btn-info btn-xs">
                                <i class="glyphicon glyphicon-pencil"></i>Edit
                            </a>
                            <a href="<?= PROOT ?>SubmittedApplication/delete/<?= $notupdated->id ?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
                                <i class="glyphicon glyphicon-remove"></i>Delete
                            </a>
                        </div>
                    </div>

                <?php endforeach; ?>
                <?php foreach ($this->updated as $updated) : ?>
                    <div class="row">

                        <div class="cell" data-title="Name"><a href="<?= PROOT ?>SubmittedApplication/details/<?= $updated->id ?>"><?= $updated->nameInitial ?></a> </div>
                        <div class="cell" data-title="Registration Number"><?= $updated->regNumber ?> </div>
                        <div class="cell" data-title="Email Address"><?= $updated->email ?> </div>
                        <div class="cell" data-title="Contact"><?= $updated->contact ?> </div>
                        <div class="cell" data-title="Field"><?= $updated->field ?> </div>
                        <div class="cell" data-title="Departure"><?= $updated->departure ?> </div>
                        <div class="cell" data-title="Arrival"><?= $updated->arrival ?> </div>
                        <div class="cell" data-title="">
                            <a href="<?= PROOT ?>SubmittedApplication/delete/<?= $updated->id ?>" class="btn btn-danger btn-xs" onclick="if(!confirm('Are you sure you want to delete this record')){return false;}">
                                <i class="glyphicon glyphicon-remove"></i>Delete
                            </a>
                        </div>

                    </div>
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>