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
                <div class="span8">
                  <div class="row-fluid widget">
                    <h4 class="widget_title">
                      <!--<div class="pull-right"> 
                        <div id="report_daterange" class="report_jump_menu pull-right">
                          <i class="icon-calendar"></i> 
                            <span></span>
                        </div>
                      </div>-->
                      <i class="icon-bar-chart"></i> Audit Results, Last 7 Days
                      
                      <a class="btn-flat gray btn-flat-small pull-right" href="client-report-detail.php">View Full Report</a>
                    </h4>
                    
                    <div class="padded">
                    <h5 class="widget_sub_title">
                        Overview:
                    </h5>
                    <div class="knobs row-fluid knob_box">
                        
                          <?php for($i=0; $i<4; $i++){ ?>
                          <div class="span3">
                          <a href="client-report-detail.php" class="knob-wrapper <?php if($i == 0) echo "active"; ?>">
                            <table>
                              <tr>
                                <td>
                                  <input type="text" value="<?php echo rand(50,100); ?>" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#dddddd" data-width="80" data-height="50" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                                </td>
                                <td class="gauge_score">
                                  <?php
                                    switch($i){
                                      case 0: echo "Overall Score"; break;
                                      case 1: echo "Cashier Metric"; break;
                                      case 2: echo "Expeditor Greeting"; break;
                                      case 3: echo "Quality Control"; break;
                                    }
                                  ?>
                                </td>
                              </tr>
                            </table>
                          </a>
                          </div>
                          <?php } ?>
                        </div>
                    
                    <!--
                    <div class="knob-group first">
                    <h5 class="widget_sub_title">Overall Score</h5>
                    <div class="knob-wrapper">
                        <input type="text" value="80" class="knob" data-thickness=".2" data-inputColor="#333" data-bgColor="#f1f1f1" data-width="200" data-height="140" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                        <div class="info">
                            <div class="param">
                              Overall Score
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="knob-group">
                      <h5 class="widget_sub_title">Audit Metrics</h5>
                      <a href="#" class="knob-wrapper">
                          <input type="text" value="37" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#f1f1f1" data-width="120" data-height="100" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                          <div class="info">
                              <div class="param">
                                Cashier
                              </div>
                          </div>
                      </a>
                      <a href="#" class="knob-wrapper">
                          <input type="text" value="60" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#f1f1f1" data-width="120" data-height="100" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                          <div class="info">
                              <div class="param">
                                Expeditor
                              </div>
                          </div>
                      </a>
                      <a href="#" class="knob-wrapper">
                          <input type="text" value="95" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#f1f1f1" data-width="120" data-height="100" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                          <div class="info">
                              <div class="param">
                                Quality Control
                              </div>
                          </div>
                      </a>
                    </div><!-- end .knob-group -->
                    
                    <div class="row-fluid">
                    <h5 class="widget_sub_title">Trend:</h5>
                    <div>
                        <div id="dashboarddemochart" class="span12" style="height:200px;margin-bottom:30px;padding:0"></div>
                    </div>
                    </div>
                    
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
                            <tr><td>1</td><td><a href="client-report-detail.php">Braintree</a></td><td><span class="hgraph" style="width:81%"></span>95%</td></tr>
                            <tr><td>2</td><td><a href="client-report-detail.php">Milford</a></td><td><span class="hgraph" style="width:80%"></span>94%</td></tr>
                            <tr><td>3</td><td><a href="client-report-detail.php">Lexington</a></td><td><span class="hgraph" style="width:78%"></span>93%</td></tr>
                            <tr><td>4</td><td><a href="client-report-detail.php">Rockland</a></td><td><span class="hgraph" style="width:77.5%"></span>92%</td></tr>
                            <tr><td>5</td><td><a href="client-report-detail.php">Brockton</a></td><td><span class="hgraph" style="width:74.5%"></span>90%</td></tr>
                          </tbody>
                        </table>
                      </div>
                      <div class="span6">
                        <h6>Worst-Performing Locations:</h6>
                        <table class="table block_table graph_table gray_graphs">
                          <tbody>
                            <tr><td>1</td><td><a href="client-report-detail.php">Wyckton</a></td><td><span class="hgraph" style="width:61%"></span>75%</td></tr>
                            <tr><td>2</td><td><a href="client-report-detail.php">Brighton</a></td><td><span class="hgraph" style="width:60%"></span>74%</td></tr>
                            <tr><td>3</td><td><a href="client-report-detail.php">Larwill</a></td><td><span class="hgraph" style="width:58%"></span>70%</td></tr>
                            <tr><td>4</td><td><a href="client-report-detail.php">Triston</a></td><td><span class="hgraph" style="width:52.5%"></span>66%</td></tr>
                            <tr><td>5</td><td><a href="client-report-detail.php">Allegra</a></td><td><span class="hgraph" style="width:50.5%"></span>60%</td></tr>
                          </tbody>
                        </table>
                      </div>

                    </div>
                  </div>
                  </div>
                  
                  
                </div>
                
                <div class="span4">
                
                  <div class="row-fluid widget">
                    <h4 class="widget_title no_bottom_margin">
                      <i class="icon-pushpin"></i> My Locations
                      <a class="btn-flat gray btn-flat-small pull-right">Detail View</a>
                    </h4>
                    <img src="img/custom/fake-map.jpg">
                  </div>
                  
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