
<?php $this->setSiteTitle('Letter Submission');?>

<?php $this->start('body'); ?>
<h1 class="text-center ">Submitted Letters </h1>
<table class="table table-striped table-condensed table-bordered">
    <thead>
    
        <th>Name with Initials</th>
        <th>NIC Number</th>
        <th>Reg Number</th>
        <th>Date of Stage1</th>
        <th>Date of Stage2</th>
        <th>Date of Stage3</th>
        <th>Date of Stage4</th>
        <th>Date of Stage5</th>
        <th></th>
        
    </thead>

    <tbody>
        <?php foreach($this->submissions as $submission): ?>
            <tr>
            <td><?= $submission->nameInitial ?></td>
            <td><?= $submission->nicNumber ?></td>
            <td><?= $submission->regNumber ?></td>
            <td><?= $submission->dateStage1 ?></td>
            <td><?= $submission->dateStage2 ?></td>
            <td><?= $submission->dateStage3 ?></td>
            <td><?= $submission->dateStage4 ?></td>
            <td><?= $submission->dateStage5 ?></td>
            <td></td>
            </tr>
        <?php endforeach; ?>
    </tbody>


<?php $this->end(); ?>

