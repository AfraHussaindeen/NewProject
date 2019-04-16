<?php
    $menu = Router::getMenu('menu_acl');
    $currentPage=currentPage();
?>

<link rel="stylesheet" href="css/style.css">

<nav class=" navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="#main_menu" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand " href="#"><span>TC</span>Service</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="nav navbar-nav mr-auto">
        <?php foreach($menu as $key=>$val):
            $active = ($val == $currentPage)?'active' : '' ;?>
            <?php if($key =="Login"):?>
              <li><a class="<?=$active?>" href="<?=$val?>"><?=$key?></a></li>
            <?php else: ?>
              <li><a class="<?=$active?>" href="<?=$val?>"><?=$key?></a></li>
            <?php endif;?>
            
        <?php endforeach;?>
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if(currentUser()): ?>
            <li><a href="#">Hello <?=ucwords(currentUser()->fname) ?> </a></li>
        <?php endif;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

