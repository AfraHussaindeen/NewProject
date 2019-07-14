<!doctype html>
<html lang="en">
  <head>
  <link rel="shortcut icon" href="<?=PROOT?>css/favicon.ico" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name="viewport" content="idth=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=PROOT?>css/bootstrap.min.css" media='screen' title='no title' charset='utf-8'>
    <link rel="stylesheet" href="<?=PROOT?>css/custom.css" media='screen' title='no title' charset='utf-8'>
    
    <!-- related to addding bootstrap icons -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?=PROOT?>js/jQuery-2.2.4.min.js"></script>

    <script src="<?=PROOT?>js/bootstrap.min.js"></script>

    <title><?= $this->siteTitle();?></title>
    <?= $this->content('head');?>
    

  </head>

  <body>
    <?php include('main_menu.php')?>

    <div class="container-fluid " style="min-height:cal(100%-125px);">
      <?= Session::displayMsg();?>
      <?= $this->content('body');?>
    </div>
    
   
   

  </body>
</html>
