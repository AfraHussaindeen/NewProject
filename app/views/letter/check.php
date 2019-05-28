<?php $this->setSiteTitle('State of Submitted Letter')?>

<?php $this->start('body');?>

<div class='col-md-6 col-md-offset-3 well'>
<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/utiltable.css">
<link rel="stylesheet" type="text/css" href="css/maincheck.css">
<h1 class="text-center ">State of Submitted letter </h1>
<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table">

					<div class="row header">
                
                        <div class="cell">Date of Stage1</div>
                        <div class="cell">Date of Stage2</div>
                        <div class="cell">Date of Stage3</div>
                        <div class="cell">Date of Stage4</div>
                        <div class="cell">Date of Stage5</div>
                        
        
                    </div>

        <?php foreach($this->subDetails as $subDetail): ?>
        <div class="row">
			
            
            <div class="cell" data-title="Date of Stage1"><?= $subDetail->dateStage1 ?></div>
            <div class="cell" data-title="Date of Stage2"><?= $subDetail->dateStage2 ?></div>
            <div class="cell" data-title="Date of Stage3"><?= $subDetail->dateStage3 ?></div>
            <div class="cell" data-title="Date of Stage4"><?= $subDetail->dateStage4 ?></div>
            <div class="cell" data-title="Date of Stage5"><?= $subDetail->dateStage5 ?></div>
            
        </div>
        <?php endforeach; ?>
    
    </div>
    </div>
</div>

<?php $this->end();?>