
<?php $this->setSiteTitle('Submitted Letters');?>

<?php $this->start('body'); ?>

<h1 class="text-center ">Submitted Letters </h1>
<div class="container">
  <table class="responsive-table">
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
            <td>
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

<?php $this->end(); ?>

