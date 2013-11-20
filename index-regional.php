<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <h3>
                        Dashboard &raquo; Active Projects
                        <a class="btn-flat primary pull-right" href="#widget_modal" data-toggle="modal">
                          <i class="icon-th-large"></i> Edit Widgets
                        </a>
                      </h3>
                      <div id="header_panel">
                        <h4>Edit Widgets Interface</h4>
                        &laquo; Placeholder &raquo;
                      </div>
                    </div>
                </div>
            </div>
            
            <div id="content_wrapper">
              <div class="row-fluid ui-elements">
                <div class="span9">
                <div class="row-fluid">
                <?php
                $dasharray = array(
                  array(
                    'title' => 'Panera 2.0',
                    'gauges' => array(
                      'Combined' => 75,
                      'Cashier' => 75,
                      'QC' => 96,
                      'Expeditor' => 81,
                      'Deployment' => 88
                    )
                  ),
                  array(
                    'title' => 'Enable The Manager',
                    'gauges' => array(
                      'Combined' => 75,
                      'Opening MIC' => 75,
                      'Mid MIC' => 96,
                      'Closing MIC' => 49
                    )
                  ),
                  array(
                    'title' => 'Line-Time &amp; Abandonment',
                    'gauges' => array(
                      'Combined' => 55,
                      'Line-Time' => 75,
                      'Abandonment' => 49
                    )
                  ),
                  array(
                    'title' => 'Customer Experience',
                    'gauges' => array(
                      'Combined' => 88,
                      'Surveys' => 75,
                      'Time-to-Order' => 75,
                      'Time-to-Pickup' => 96,
                    )
                  ),
                  array(
                    'title' => 'LP Exceptions',
                    'gauges' => array(
                      'Combined' => 87,
                      'Empl Disc\'s' => 75,
                      'Small Txns' => 96,
                      'Refunds' => 88
                    )
                  ),
                );
                $i = 1;
                foreach($dasharray as $card):
                  $numgauges = sizeof($card['gauges']);
                  if(($i % 2) == 1) echo "</div><div class='row-fluid'>";
                  ?>
                  
                  <div class="span6">
                    <div class="row-fluid widget projectcard">
                    <h4 class="widget_title no_bottom_margin">
                      <div class="btn-group pull-right">
                        <a class="btn-flat gray btn-flat-small pull-right" href="client-report-detail.php">Full Report</a>
                      </div>
                      <i class="icon-bar-chart"></i> <?php echo $card['title']; ?>
                    </h4>
                    <div class="project-overlay-container">
                    <a href="#" class="project-overlay">View Full Report <i class='icon-white icon-arrow-right'></i></a>
                    <div class="row-fluid chart">
                      <div class="flotchartcontainer">
                        <div id="statsChartoverview<?php echo $i; ?>" class="flot_fix" data-num-of-gauges="<?php echo $numgauges; ?>"></div>
                      </div>
                    </div>                
                    
                    <div class="row-fluid">                        
                        <div class="row-fluid less_padding knobs-table">
                        	<table cellpadding="0" cellspacing="0">
                          	<tr>
                            <?php $j = 0; ?>
                            <?php foreach($card['gauges'] as $key => $value): ?>
                            <?php if($numgauges == 2 && $j == 0) continue; ?>
                            <td>
                          <a href="client-report-detail.php" style="border-color:<?php
                            switch($j){
                              case 0: echo "#30a0eb"; break;
                              case 1: echo "orange"; break;
                              case 2: echo "#888888"; break;
                              case 3: echo "#e51d9b"; break;
                              case 4: echo "#7e91aa"; break;
                            }
                          ?>" class="knob-wrapper">
                          
                            	<input type="text" value="<?php echo $value; ?>" class="knob" data-thickness=".25" data-inputColor="#333" data-bgColor="#dddddd" data-fgColor="<?php
                                    switch($j){
                                      case 0: echo "#30a0eb"; break;
                                      case 1: echo "orange"; break;
                                      case 2: echo "#888888"; break;
                                      case 3: echo "#e51d9b"; break;
                                      case 4: echo "#7e91aa"; break;
                                    }
                                  
                                  ?>" data-width="55" data-height="30" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                           				<span><?php echo $key; ?></span>
                                  </a>
                                  </td>
                          <?php $j++; ?>
                          <?php endforeach; ?>
                                 
                            </tr>
                          </table>

                          </div>
                          
                          
                        
                    </div>
                
                  </div>
                  </div>
                  </div>
                  
                  <?php
                  
                  $i++;
                endforeach;
                ?>

                  
                  </div>
                </div>
                
                <div class="span3">
                
                  <div class="row-fluid widget">
                    <h4 class="widget_title">
                      <i class="icon-envelope"></i> Messages
                      <a class="btn-flat gray btn-flat-small pull-right">Go to Inbox</a>
                    </h4>
                    <div class="email_mini email_notice">
                      <a href="#">New Report Data is Available!</a>
                      <span class="date">&raquo; 8/12/13</span>
                      <a href="#"><i class="icon-remove"></i></a>
                    </div>
                    <div class="email_mini email_notice">
                      <a href="#">New Report Data is Available!</a>
                      <span class="date">&raquo; 8/11/13</span>
                      <a href="#"><i class="icon-remove"></i></a>
                    </div>
                    <div class="email_mini email_warning">
                      <a href="#">You Have a New Shared Clip</a>
                      <span class="date">&raquo; 8/9/13</span>
                      <a href="#"><i class="icon-remove"></i></a>
                    </div>
                    <div class="email_mini email_warning">
                      <a href="#">You Have a New Shared Clip</a>
                      <span class="date">&raquo; 8/7/13</span>
                      <a href="#"><i class="icon-remove"></i></a>
                    </div>
                  </div>
                  
                  <div class="row-fluid widget">
                    <h4 class="widget_title no_bottom_margin">
                      <i class="icon-pushpin"></i> My Locations
                    </h4>
                    <img src="img/custom/fake-map.jpg">
                  </div>
                  
                  
                  
                </div>                  
                
              
              </div>
              
              
            </div>
            
        </div>
        
    </div>
    
    <!-- Modals -->
    <div id="widget_modal" class="modal hide fade">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Edit Dashboard Widgets</h3>
      </div>
      <div class="modal-body">
        <p>Placeholder...for now!</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn-flat gray" aria-hidden="true" data-dismiss="modal">Close</a>
        <a href="#" class="btn-flat primary">Save changes</a>
      </div>
    </div>

    <?php include ('inc/footer.php'); ?>