<?php
    $menu = Router::getMenu('menu_acl');
    $currentPage=currentPage();
?>

<nav class="navbar navbar-default bootsnav ">
  <div class="container">
     <!-- Start Header Navigation -->
     <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
                <i class="fa fa-bars"></i>
            </button>
            <!-- <a class="navbar-brand" href="#brand"><img src="LOGO_ADDRESS" class="logo" alt=""></a> -->
            <a class="navbar-brand" href="#">TCService</a>
        </div>
        <!-- End Header Navigation -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <!-- <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="#main_menu" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TCService</a>
    </div> -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="nav navbar-nav">
        <?php foreach($menu as $key=>$val):
          $active = '';?>
          <?php if (is_array($val)): ?>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?=$key?><span class="caret"></span></a>
              <ul class="dropdown-menu">
              <?php foreach($val as $k=>$v):
                $active = ($v==$currentPage)? 'active':''; ?>
                <?php if($k== 'seperator'): ?>
                  <li role="seperator" class="divider"></li>
                <?php else: ?>
                  <li><a class="<?=$active?>" href="<?=$v?>"><?=$k?></a></li>
                <?php endif; ?>
              <?php endforeach; ?>
              </ul>
            </li>
          <?php else: 
            $active= ($val == $currentPage )? 'active':''; ?>
            <li><a class="<?=$active?>" href="<?=$val?>"><?=$key?></a></li>
          <?php endif; ?>
        <?php endforeach; ?>
      
      </ul>
      
      <ul class="nav navbar-nav navbar-right">
        <?php if(currentUser()): ?>
            <li><a href="#">Hello <?=currentUser()->fname ?> </a></li>
        <?php endif;?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>