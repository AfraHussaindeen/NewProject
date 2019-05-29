<?php $this->setSiteTitle('Submitted Letters'); ?>
<html lang="en">

<?php $this->start('body'); ?>

<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" type="text/css" href="css/mainsubapp.css">

<h1 class="text-center ">State of Submitted letter </h1>
<div class="container well">
    <div class="limiter">

        <div class="wrap-table100">
            <div class="table">

                <div class="row header">

                    <div class="cell">Date of Stage1</div>
                    <div class="cell">Date of Stage2</div>
                    <div class="cell">Date of Stage3</div>
                    <div class="cell">Date of Stage4</div>
                    <div class="cell">Date of Stage5</div>
                    <div class="cell"></div>

                </div>


                <?php foreach($this->subDetails as $subDetail): ?>
                    <div class="row">
                        <div class="cell" data-title="Date of Stage1"><?= $subDetail->dateStage1 ?></div>
                        <div class="cell" data-title="Date of Stage2"><?= $subDetail->dateStage2 ?></div>
                        <div class="cell" data-title="Date of Stage3"><?= $subDetail->dateStage3 ?></div>
                        <div class="cell" data-title="Date of Stage4"><?= $subDetail->dateStage4 ?></div>
                        <div class="cell" data-title="Date of Stage5"><?= $subDetail->dateStage5 ?></div>
                        <div class="cell" data-title="">
                            <a href="<?= PROOT ?>letter/delete/<?= $submission->id ?>" class="btn  btn-danger btn-xs" onclick="if(!confirm('Are you sure that you want to delete?')){return false;}">
                                <i class="glyphicon glyphicon-trash"></i>Delete
                            </a>
                            <a href="<?= PROOT ?>letter/nextStage/<?= $submission->id ?>" class="btn  btn-info btn-xs" onclick="if(!confirm('Are you sure that you want to move to the next stage?')){return false;}">
                                </i>Next
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <?php $this->end(); ?>