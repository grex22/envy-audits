<?php

function get_nav_menus(){

  $current_page = $_SERVER['PHP_SELF'];

?>

<div class="navbar navbar-inverse navbar-fixed-top navbar_envysion">
        <div class="navbar-inner">
            
            
<?php

  $menu_array = array();
  switch($current_page):
    case ("/envysion/auditor-scoring.php"):
      $menu_array = array(
        array("auditor-dashboard.php","",'icon-tasks',"Dashboard"),
        array("auditor-scoring.php","active",'icon-edit',"Score Samples"),
      );
      $brand_img = "panera";
      break;
    case ("/envysion/auditor-dashboard.php"):
      $menu_array = array(
        array("auditor-dashboard.php","active",'icon-tasks',"Dashboard"),
        array("auditor-scoring.php","",'icon-edit',"Score Samples"),
      );
      $brand_img = "panera";
      break;
    case ("/envysion/client-report-overview.php"):
    case ("/envysion/client-report-detail.php"):
      $menu_array = array(
        array("index.php","",'icon-tasks',"Dashboard"),
        array("#","",'icon-play-circle',"Watch Video"),
        array("client-report-overview.php","active",'icon-bar-chart',"Intelligence")
      );
      $brand_img = "panera";
      break;      
    default:
      $menu_array = array(
        array("index.php","active",'icon-tasks',"Dashboard"),
        array("#","",'icon-play-circle',"Watch Video"),
        array("client-report-overview.php","",'icon-bar-chart',"Intelligence")
      );
      $brand_img = "panera";
      break;
  endswitch;
  ?>
  <a class="brand" href="index.php"><img src="img/custom/<?php echo $brand_img; ?>.png"></a>
            <ul class="nav pull-left main_nav">
  <?php
  
    foreach($menu_array as $item):
      echo "<li><a href='".$item[0]."' role='button' class='".$item[1]."'><i class='".$item[2]."'></i> ".$item[3]."</a></li>";
    endforeach;
 ?>
            </ul>


            <ul class="nav pull-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle hidden-phone" data-toggle="dropdown">
                        Greg Burkett <span class='circle_callout'>12</span>
                        <!--<b class="caret"></b>-->
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="personal-info.html">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Export your data</a></li>
                        <li><a href="#">Send feedback</a></li>
                    </ul>
                </li>
                <li class="dropdown support">
                    <a href="personal-info.html" class="dropdown-toggle iconlink" data-toggle="dropdown" role="button">
                        <span class="navbar_icon"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="personal-info.html">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li><a href="#">Billing</a></li>
                        <li><a href="#">Export your data</a></li>
                        <li><a href="#">Send feedback</a></li>
                    </ul>
                </li>
                <li class="dropdown settings">
                    <a href="personal-info.html" class="dropdown-toggle iconlink" data-toggle="dropdown" role="button">
                        <span class="navbar_icon"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="personal-info.html">Personal info</a></li>
                        <li><a href="#">Account settings</a></li>
                        <li class="divider"></li>
                        <li style="margin-left:20px;"><strong>For Demo Nav:</strong></li>
                        <li class="divider"></li>
                        <li style="margin-left:20px;"><strong>Client</strong></li>
                        <li><a href="index.php">Dashboard</a></li>
                        <li><a href="client-report-overview.php">Audit Overview</a></li>
                        <li><a href="client-report-detail.php">Audit Detail</a></li>
                        <li style="margin-left:20px;"><strong>Auditor</strong></li>
                        <li><a href="auditor-dashboard.php">Auditor Dashboard</a></li>
                        <li><a href="auditor-scoring.php">Scoring Sample</a></li>
                    </ul>
                </li>
            </ul>            
        </div>
        <?php if(false /*$_SERVER['PHP_SELF'] == "/envysion/index.php"*/): ?>
        <div class="notice_static"><a href="#" class="close_notice">&times;</a>Notice: System Downtime Scheduled for March 11 from 9pm - 10pm EST</div>
        <?php endif; ?>
    </div>
    <!-- end navbar --><?php
    
}