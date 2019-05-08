<?php
    $menu = Router::getMenu('menu_acl');
    $currentPage=currentPage();
?>

<nav class="navbar navbar-default  " style="height: 100px   ">
  <div class="container-fluid ">
     <!-- Start Header Navigation -->
     <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main_menu">
                <i class="fa fa-bars"></i>
            </button>
            <ul class="navbar-brand list-inline">
              <li><img src="css/logo.png" width="60px" height="70px" class="logo"  alt=""></li>
              <li><span class="font_type"><span style=@>TC</span>Service</span></li>
            </ul>
      </div>
        <!-- End Header Navigation -->

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="main_menu">
      <ul class="nav navbar-nav navbar-left">
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