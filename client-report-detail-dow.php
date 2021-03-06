<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                
            </div>
            
            <div id="content_wrapper">
              <div class="row-fluid ui-elements">
                
                <div class="span12">
                    

                    <div class="row-fluid">
                      <div class="row-fluid widget">
                      <div class="span12">
                        <h4 class="widget_title no_bottom_margin no_arrow">
                        <div class="btn-group pull-right more_button_padding">
                          <button class="glow left">Email <i class="icon-envelope"></i></button>
                          <button class="glow middle">Export <i class="icon-download-alt"></i></button>
                          <button class="glow right">Print <i class="icon-print"></i></button>
                        </div>
                        <i class="icon-bar-chart"></i> Intelligence &raquo; 
                        <?php echo $global_project_name_prefix; ?> Audit</h4>
                        <div class="navbar" id="report_navbar">
                          <div class="navbar-inner">
                            <div class="row-fluid">
                            <div class="span4 report_links_wrap">
                              <ul class="nav">
                                  <li>
                                    <a href="client-report-detail.php" class="active" >
                                      <i class="icon-home"></i> Overview
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-locations.php">
                                      <i class="icon-pushpin"></i> Locations
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-employees.php">
                                      <i class="icon-group"></i> Employees
                                    </a>
                                  </li>
                              </ul>
                            </div>
                            <div class="span4">
                              <form class="navbar-search">
                                <label>Search:</label>
                                <input type="text" class="search-query" placeholder="Find locations and people...">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                              </form>

                            </div>

                            
                            </div>
                            
                        </div>
                        </div>
                        <div class="row-fluid report_header padded">
                          <div class="span9">
                            <h3>Overview:
                              <select id="report_location" class="inline select2_jump">
                                <option value="client-report-locations.php" selected="selected">All Locations</option>
                                <optgroup label="Southwest Region">
                                  <option value="client-report-locations-detail.php">Braintree</option>
                                  <option value="client-report-locations-detail.php">Lexington</option>
                                  <option value="client-report-locations-detail.php">Milford</option>
                                  <option value="client-report-locations-detail.php">Stanford</option>
                                  <option value="client-report-locations-detail.php">Tournay</option>
                                  <option value="client-report-locations-detail.php">Jackson</option>
                                </optgroup>
                              </select>
                              <div id="report_daterange" class="report_jump_menu inline">
                                <i class="icon-calendar"></i> 
                                  <span></span>
                              </div>
                            </h3>
                          </div>
                          <div class="span3">
                            <div class="btn-group pull-right more_button_padding data_view_buttons">
                              <label class="inline">Data View: </label>
                              <button class="glow left " data-url="client-report-detail.php">Overview</button>
                              <button class="glow middle active" data-url="client-report-detail-dow.php">Day of Week</button>
                              <button class="glow right" data-url="client-report-detail-dp.php">Day Part</button>
                            </div>
                          </div>
                        </div>
                        
                                                
                        <div class="padded">
                      
                        <div class="row-fluid report_main_wrapper">
                        <div class="span3 report_small_col">
                          <h4 class="more_bottom_margin">Scores:</h4>
                         
                        <div class="row-fluid knobs-stacked">
                        
                          <?php for($i=0; $i<4; $i++){ ?>
                          <a href="client-report-detail-cashier.php" style="border-color:<?php
                            switch($i){
                              case 0: echo "#30a0eb"; break;
                              case 1: echo "orange"; break;
                              case 2: echo "#888888"; break;
                              case 3: echo "#e51d9b"; break;
                            }
                          ?>" class="knob-wrapper <?php if($i == 0) echo "active"; ?>">
                            <table>
                              <tr>
                                <td>
                                  <input type="text" value="<?php 
                                  
                                    switch($i){
                                      case 0: echo "75"; break;
                                      case 1: echo "49"; break;
                                      case 2: echo "95"; break;
                                      case 3: echo "81"; break;
                                    }

                                  ?>" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#dddddd" data-fgColor="<?php
                                    switch($i){
                                      case 0: echo "#30a0eb"; break;
                                      case 1: echo "orange"; break;
                                      case 2: echo "#888888"; break;
                                      case 3: echo "#e51d9b"; break;
                                    }
                                  
                                  ?>" data-width="60" data-height="35" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                                </td>
                                <td class="gauge_score">
                                  <?php
                                    switch($i){
                                      case 0: echo "Combined Score"; break;
                                      case 1: echo "Cashier"; break;
                                      case 2: echo "Expeditor"; break;
                                      case 3: echo "Quality Control"; break;
                                    }
                                  ?>
                                </td>
                              </tr>
                            </table>
                          </a>
                          <?php } ?>
                          </div>
                          
                          
                        </div>
                        <div class="span9 report_large_col">
                         <h4 class="more_bottom_margin">Score by Day of the Week: </h4>
                          <div class="row-fluid">
                            
                            <div class="chart">
                              <div class="tab-content flotchartcontainer">
                                <div class="tab-pane active" id="overall">
                                  <div class="row-fluid">
                                    <div id="dayofweekgraph" class="span12 flot_fix"></div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        
                          
                        <div class="row-fluid">
                          <div class="pull-right pagination_well">
                          Show: <select>
                            <option selected='selected'>25 rows</option>
                            <option>50 rows</option>
                            <option>100 rows</option>
                          </select>
                          &nbsp;|&nbsp; Viewing 1-25 of 62 &nbsp;|&nbsp;
                          
                          <div class="btn-group">
                            <a class="btn-flat btn-flat-small white left"><i class="icon-chevron-left"></i></a>
                            <a class="btn-flat btn-flat-small white right"><i class="icon-chevron-right"></i></a>
                          </div>
                          </div>
                          <h4 class="data_table_header">Scored Events <div class="filter_links">
                          Show: &nbsp; <a href="#" data-show="all" class="active">All (62)</a> | <a href="#" data-show="fail">Fails (13)</a> | <a href="#" data-show="pass">Passes (49)</a>
                        </div></h4>
                          
                          <table class="table table-hover block_table samples_table">
                            <thead>
                              <tr>
                                <th>Preview</th>
                                <th class="sortable">Score </th>
                                <th class="sortable">Metric </th>
                                <th class="sortable">Day of Week </th>
                                <th class="sortable">Date </th>
                                <th class="sortable">Time </th>
                                <th class="sortable">Location </th>
                                <th class="sortable align-center">Transaction </th>
                                <th class="close_holder"> </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php for($i=1; $i<15; $i++){ $pf = rand(0,2); ?>
                              <tr class="<?php $pf ? print"pass" : print"fail"; ?>">
                                <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                <td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span><?php if($i == 1){ ?>
                                    <br><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span>
                                  <?php } ?>
                                </td>
                                <td>Cashier<?php if($i == 1){ ?>
                                    <br>Quality Control
                                  <?php } ?></td>
                                <td><strong><?php $i <= 7 ? print "Monday" : print "Tuesday"; ?></strong></td>
                                <td>7/13/13</td>
                                <td>3:32 pm EST</td>
                                <td>Braintree</td>
                                <td class="align-center"><?php rand(0,1) ? print '<i class="icon-list-alt"></i>' : print ''; ?></td>
                                <td class="close_holder"><i class="icon-remove"></i></td>
                              </tr>
                              <tr class="detail_row <?php $pf ? print"pass" : print"fail"; ?>">
                                <td colspan=20>
                                  <div class="sample_wrapper row-fluid">
                                    <div class="span4">
                                      <h5>Video</h5>
                                      <a href="#" class="enlarge_cam"><img src="img/custom/panera-cam-condensed.jpg"></a>
                                    </div>
                                    <div class="span4">
                                      
                                      <h5>Score, Cashier Metric</h5>
                                        <div class="sample_receipt">
                                        <table class="block_table">
                                        <tr><td><strong>Score</strong></td><td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span></td></tr>
                                        <tr><td><strong>Employee:</strong></td><td><a href="client-report-detail-employee.php">Elizabeth Jones</a></td></tr>
                                        <tr><td colspan=2><strong>Comments:</strong></td></tr>
                                        <tr><td colspan=2><?php $pf ? print"Cashier offered to list the ingredients for the order.":print"Cashier did not offer to list the ingredients for the Chicken Caesar Salad and Bacon Turkey Bravo"; ?></td></tr>                                       
                                        </table>
                                        </div>
                                        <h5>Score, Quality Control</h5>
                                        <div class="sample_receipt">
                                        <table class="block_table">
                                        <tr><td><strong>Score</strong></td><td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span></td></tr>
                                        <tr><td><strong>Employee:</strong></td><td><a href="client-report-detail-employee.php">Elizabeth Jones</a></td></tr>
                                        <tr><td colspan=2><strong>Comments:</strong></td></tr>
                                        <tr><td colspan=2>An order was improperly entered.</td></tr>                                       
                                        </table>
                                        </div>
                                    </div>
                                    <div class="span4">
                                      <h5>Associated Receipt</h5>
                                      <div class="sample_receipt">
                                      <table class="block_table">
                                      <tr><td>Receipt #:</td><td>10145</td></tr>
                                      <tr><td>Register #:</td><td>1</td></tr>
                                      <tr><td>EnVR:</td><td>1521 - Braintree</td></tr>
                                      <tr><td>Cashier:</td><td><a href="client-report-detail-employee.php">Elizabeth Jones</a></td></tr>
                                      <tr><td colspan=2 class="align-center">
                                      
                                      Thursday 07/24 6:45:04 PM EDT<br>
                                      HERE
                                      </td></tr>
                                      <tr><td>1 You Pick 2</td><td>6.99</td></tr>
                                      <tr><td>1 Meal Upgrade</td><td>0.00</td></tr>
                                      <tr><td>1 Baguette</td><td>0.00</td></tr>
                                      <tr><td>1 Baguette</td><td>0.00</td></tr>
                                      <tr><td>1 Baguette</td><td>0.00</td></tr>
                                      <tr><td>1 Baguette</td><td>0.00</td></tr>
                                      <tr><td>1 Baguette</td><td>0.00</td></tr>
                                      
                                      </table>
                                      </div>
                                        
                                    </div>
                                  </div>
                                </td>
                              </tr>
                            <?php } ?>

                            </tbody>
                          </table>
                          <div class="pull-right pagination_well">
                          Viewing 1-25 of 60 &nbsp;|&nbsp;
                          
                          <div class="btn-group">
                            <a class="btn-flat btn-flat-small white left"><i class="icon-chevron-left"></i></a>
                            <a class="btn-flat btn-flat-small white right"><i class="icon-chevron-right"></i></a>
                          </div>
                          </div>
                        </div>
                        </div>
                        
                        
                        </div>
                        
                        </div>
                        </div>
                      </div>
                      </div>
                      
                    </div>
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