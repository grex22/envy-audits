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
                        <i class="icon-bar-chart"></i> Intelligence &raquo; 
                        Panera 2.0 Audit</h4>
                        <div class="navbar" id="report_navbar">
                          <div class="navbar-inner">
                            <div class="row-fluid">
                            <div class="span9 report_links_wrap">
                              <ul class="nav">
                                  <li>
                                    <a href="client-report-detail.php" class="active" >
                                      <i class="icon-home"></i> Overview
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-detail.php">
                                      <i class="icon-pushpin"></i> Locations
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-detail.php">
                                      <i class="icon-group"></i> Employees
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-detail.php">
                                      <i class="icon-lightbulb"></i> Metrics
                                    </a>
                                  </li>
                              </ul>
                            <div class="pull-left">
                              <label>Report Date Range:</label>
                              <div id="report_daterange" class="report_jump_menu">
                                <i class="icon-calendar"></i> 
                                  <span></span>
                              </div>
                            </div>
                            </div>
                            
                            <div class="span3">
                              <form class="navbar-search">
                                <label>Search:</label>
                                <input type="text" class="search-query" placeholder="Find locations and people...">
                                <button type="submit" class="btn"><i class="icon-search"></i></button>
                              </form>
                            </div>
                            </div>
                            
                        </div>
                        </div>
                        
                                                
                        <div class="padded">
                        
                        <h3>Overview, All Locations, Aug 10 - Aug 16, 2013</h3>
                        <div class="row-fluid">
                          <div class="span12 report_subnav">
                            <div class="btn-group pull-right">
                              <button class="glow left">Email <i class="icon-envelope"></i></button>
                              <button class="glow middle">Export <i class="icon-download-alt"></i></button>
                              <button class="glow right">Print <i class="icon-print"></i></button>
                            </div>
                            
                            <div class="btn-group pull-left">
                              <label class="inline">View: </label>
                              <button class="glow left active">Standard</button>
                              <button class="glow middle">Day of the Week</button>
                              <button class="glow right">Day Part</button>
                            </div>
                          </div>
                        </div>
                        <div class="row-fluid">
                        
                        <div class="span9">
                        <div class="row-fluid knobs-inline">
                        
                          <h4 class="inline">Averages:</h4>
                          <?php for($i=0; $i<4; $i++){ ?>
                          <a href="client-report-detail-cashier.php" class="knob-wrapper <?php if($i == 0) echo "active"; ?>">
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

                                  ?>" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#dddddd" data-width="60" data-height="35" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                                </td>
                                <td class="gauge_score">
                                  <?php
                                    switch($i){
                                      case 0: echo "Overall Score"; break;
                                      case 1: echo "Cashier Metric"; break;
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
                          <div class="row-fluid">
                            
                            <div class="chart">
                              <div class="tab-content flotchartcontainer">
                                <div class="tab-pane active" id="overall">
                                  <div class="row-fluid">
                                    <div id="statsChartoverview1" class="span12 flot_fix"></div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        
                        </div>
                        <div class="span3">
                          <h4 class="data_table_header"><a href="#" class="pull-right header_link">View All &raquo;</a>Top Locations</h4>
                          <table class="table table-condensed">
              <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="#">Braintree</a></td>
                  <td>98</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Milford</a></td>
                  <td>95</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">Lexington</a></td>
                  <td>95</td>
                </tr>
                
              </tbody>
            </table>
                          <h4 class="data_table_header">
                          <a href="#" class="pull-right header_link">View All &raquo;</a>
                          Top Employees
                          </h4>
                          <table class="table table-condensed">

              <tbody>
                <tr>
                  <td>1</td>
                  <td><a href="#">Mark Otto</a></td>
                  <td>Braintree</td>
                  <td>98</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td><a href="#">Mark Otto</a></td>
                  <td>Braintree</td>
                  <td>98</td>
                </tr>
                <tr>
                  <td>3</td>
                  <td><a href="#">Mark Otto</a></td>
                  <td>Braintree</td>
                  <td>98</td>
                </tr>
              </tbody>
            </table>
                          
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
                                <th class="sortable">Date </th>
                                <th class="sortable">Time </th>
                                <th class="sortable">Location </th>
                                <th class="sortable">Transaction </th>
                                <th class="close_holder"> </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php for($i=1; $i<15; $i++){ $pf = rand(0,2); ?>
                              <tr class="<?php $pf ? print"pass" : print"fail"; ?>">
                                <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                <td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span></td>
                                <td>Cashier</td>
                                <td>7/13/13</td>
                                <td>3:32 pm EST</td>
                                <td>Braintree</td>
                                <td><?php rand(0,1) ? print '<i class="icon-list-alt"></i>' : print ''; ?></td>
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
                                        <tr><td><strong>Employee:</strong></td><td>Elizabeth Jones</td></tr>
                                        <tr><td colspan=2><strong>Comments:</strong></td></tr>
                                        <tr><td colspan=2><?php $pf ? print"Cashier offered to list the ingredients for the order.":print"Cashier did not offer to list the ingredients for the Chicken Caesar Salad and Bacon Turkey Bravo"; ?></td></tr>                                       
                                        </table>
                                        </div>
                                        <h5>Score, Quality Control</h5>
                                        <div class="sample_receipt">
                                        <table class="block_table">
                                        <tr><td><strong>Score</strong></td><td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span></td></tr>
                                        <tr><td><strong>Employee:</strong></td><td>Elizabeth Jones</td></tr>
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
                                      <tr><td>Cashier:</td><td>Elizabeth Jones</td></tr>
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