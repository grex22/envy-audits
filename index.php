<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <h3>
                        Dashboard
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
                  <div class="row-fluid widget">
                    <h4 class="widget_title">
                      <i class="icon-bar-chart"></i> How are We Doing?
                      
                      
                    </h4>
                    
                    <div class="padded">
                    <h5 class="widget_sub_title">
                      <div class="btn-group pull-right">
                        <a class="btn-flat gray btn-flat-small pull-right">View Full Report</a>
                      </div>
                        Panera 2.0 Audit:
                    </h5>
                    
                    
                      
                    <div class="row-fluid">
                      <div class="span3 report_small_col">
                          
                         
                        <div class="row-fluid knobs-stacked less_padding">
                        
                          <?php for($i=0; $i<4; $i++){ ?>
                          <a href="client-report-detail.php" style="border-color:<?php
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
                                  
                                  ?>" data-width="45" data-height="30" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
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
                        <div class="row-fluid">
                      <div class="btn-group pull-right">
                        <button class="btn minimal-flat left active" data-url="client-report-detail.php">Daily</button>
                        <button class="btn minimal-flat middle" data-url="client-report-detail-dow.php">Weekly</button>
                        <button class="btn minimal-flat right" data-url="client-report-detail-dp.php">Report Period</button>
                      </div>
                      <h4 class="more_bottom_margin">Scores, All Locations, Aug 11 &mdash; Aug 21, 2013</h4>
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
                        <div class="row-fluid more_bottom_margin">
                          <div class="span6">
                            <h4 class="data_table_header no_bottom_margin"><a href="client-report-locations.php">Best Location Scores</a></h4>
                            <span class="subhead">Overall Score, All Locations</span>
                            <table class="table table-condensed">
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td><a href="client-report-locations-detail.php">Braintree</a></td>
                                  <td class="align-right">98</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td><a href="client-report-locations-detail.php">Milford</a></td>
                                  <td class="align-right">95</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td><a href="client-report-locations-detail.php">Lexington</a></td>
                                  <td class="align-right">95</td>
                                </tr>
                                
                              </tbody>
                            </table>
                            <div class="btn-group align-right block">
                              <a href="client-report-locations.php" class="btn-flat primary">View All <i class="icon-circle-arrow-right icon-white"></i></a>
                            </div>
                          </div>
                          <div class="span6">
                          <h4 class="data_table_header  no_bottom_margin">
                          
                          <a href="client-report-employees.php">Best Employee Scores</a>
                          </h4>
                          <span class="subhead">Overall Score, All Locations</span>
                          <table class="table table-condensed">

                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="client-report-employees-detail.php">Mark Otto</a></td>
                                <td class="align-right">98</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="client-report-employees-detail.php">Mark Otto</a></td>
                                <td class="align-right">98</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="client-report-employees-detail.php">Mark Otto</a></td>
                                <td class="align-right">98</td>
                              </tr>
                            </tbody>
                          </table>
                            <div class="btn-group align-right block">
                            <a href="client-report-employees.php" class="btn-flat primary">View All <i class="icon-circle-arrow-right icon-white"></i></a>
                            </div>
                          </div>
                          </div>
                          
                          </div>
                    </div>
                    

                    
                    <!--
                    <div class="row-fluid">
                    
                    <h5 class="widget_sub_title">
                        My Locations:
                    </h5>
                    
                    </div>
                    <div class="row-fluid">
                      <div class="span6">
                        <h6>Best-Performing Locations:</h6>
                        <table class="table block_table graph_table">
                          <tbody>
                            <tr><td>1</td><td><a href="client-report-locations-detail.php">Braintree</a></td><td><span class="hgraph" style="width:81%"></span>95%</td></tr>
                            <tr><td>2</td><td><a href="client-report-locations-detail.php">Milford</a></td><td><span class="hgraph" style="width:80%"></span>94%</td></tr>
                            <tr><td>3</td><td><a href="client-report-locations-detail.php">Lexington</a></td><td><span class="hgraph" style="width:78%"></span>93%</td></tr>
                            <tr><td>4</td><td><a href="client-report-locations-detail.php">Rockland</a></td><td><span class="hgraph" style="width:77.5%"></span>92%</td></tr>
                            <tr><td>5</td><td><a href="client-report-locations-detail.php">Brockton</a></td><td><span class="hgraph" style="width:74.5%"></span>90%</td></tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="span6">
                        <h6>Worst-Performing Locations:</h6>
                        <table class="table block_table graph_table gray_graphs">
                          <tbody>
                            <tr><td>1</td><td><a href="client-report-locations-detail.php">Wyckton</a></td><td><span class="hgraph" style="width:61%"></span>75%</td></tr>
                            <tr><td>2</td><td><a href="client-report-locations-detail.php">Brighton</a></td><td><span class="hgraph" style="width:60%"></span>74%</td></tr>
                            <tr><td>3</td><td><a href="client-report-locations-detail.php">Larwill</a></td><td><span class="hgraph" style="width:58%"></span>70%</td></tr>
                            <tr><td>4</td><td><a href="client-report-locations-detail.php">Triston</a></td><td><span class="hgraph" style="width:52.5%"></span>66%</td></tr>
                            <tr><td>5</td><td><a href="client-report-locations-detail.php">Allegra</a></td><td><span class="hgraph" style="width:50.5%"></span>60%</td></tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                    -->
                  </div>
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