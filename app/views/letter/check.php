<?php $this->setSiteTitle('State of Submitted Letter')?>

<?php $this->start('body');?>

<div class='col-md-6 col-md-offset-3 well'>
<h1 class="text-center ">State of Submitted letter </h1>
<div class="container">
  <table class="responsive-table">
    <thead>
    
        <th scope="col">Date of Stage1</th>
        <th scope="col">Date of Stage2</th>
        <th scope="col">Date of Stage3</th>
        <th scope="col">Date of Stage4</th>
        <th scope="col">Date of Stage5</th>
        <th scope="col"></th>
        
    </thead>

    <tbody>
        <?php foreach($this->subDetails as $subDetail): ?>
            <tr>
            
            <td data-title="Date of Stage1"><?= $subDetail->dateStage1 ?></td>
            <td data-title="Date of Stage2"><?= $subDetail->dateStage2 ?></td>
            <td data-title="Date of Stage3"><?= $subDetail->dateStage3 ?></td>
            <td data-title="Date of Stage4"><?= $subDetail->dateStage4 ?></td>
            <td data-title="Date of Stage5"><?= $subDetail->dateStage5 ?></td>
            
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
    </div>
</div>

<?php $this->end();?>