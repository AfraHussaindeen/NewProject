<?php $this->setSiteTitle('State of Submitted Letter')?>

<?php $this->start('body');?>

<div class='col-md-6 col-md-offset-3 well'>
<h1 class="text-center ">State of Submitted letter </h1>
<table class="table table-striped table-condensed table-bordered">
    <thead>
    
        <th>Date of Stage1</th>
        <th>Date of Stage2</th>
        <th>Date of Stage3</th>
        <th>Date of Stage4</th>
        <th>Date of Stage5</th>
        <th></th>
        
    </thead>

    <tbody>
        <?php foreach($this->subDetails as $subDetail): ?>
            <tr>
            
            <td><?= $subDetail->dateStage1 ?></td>
            <td><?= $subDetail->dateStage2 ?></td>
            <td><?= $subDetail->dateStage3 ?></td>
            <td><?= $subDetail->dateStage4 ?></td>
            <td><?= $subDetail->dateStage5 ?></td>
            
            </tr>
        <?php endforeach; ?>
    </tbody>
</div>

<?php $this->end();?>