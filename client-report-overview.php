<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <h3>
                        <div class="pull-right header_jump"><strong>Audit:</strong> 
                          <div class="dropdown inline">
                            <a class="dropdown-toggle report_jump_menu" data-toggle="dropdown" href="#">Panera 2.0</a>
                            <ul class="dropdown-menu jump_list" role="menu" aria-labelledby="dLabel">
                              <li><a href="#">Panera 2.0</a></li>
                              <li><a href="#">Panera ETM</a></li>
                              <li><a href="#">Panera Accuracy Study</a></li>
                            </ul>
                          </div>
                          <strong>Audit Period:</strong> 
                          <div class="dropdown inline">
                            <a class="dropdown-toggle report_jump_menu" data-toggle="dropdown" href="#">July 13 - July 20, 2013</a>
                            <ul class="dropdown-menu jump_list" role="menu" aria-labelledby="dLabel">
                              <li><a href="#">July 13 - July 20, 2013</a></li>
                              <li><a href="#">July 13 - July 20, 2013</a></li>
                              <li><a href="#">July 13 - July 20, 2013</a></li>
                            </ul>
                          </div>
                          <button type="button" class="btn-flat">Go</button>
                        </div>
                        Intelligence
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
                
                
                <div class="span3">
                  <div class="row-fluid widget">
                    <h4 class="widget_title">
                      <i class="icon-info-sign"></i> What's This?
                    </h4>
                    <div class="widget_content">
                      <p>Curious about what's going on in your stores? Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt.</p>
                      <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt? Request a new project today!</p>
                      <a href="#" class="btn-flat primary"><i class="icon-plus-sign icon-white"></i> New Audit</a>
                    </div>
                    
                  </div>
                  
                </div>
                <div class="span9">
                  <div class="row-fluid widget">
                    <h4 class="widget_title no_bottom_margin">
                      <i class="icon-bar-chart"></i> My Audits:
                      <a href="#" class="btn-flat btn-flat-small pull-right"><i class="icon-plus-sign icon-white"></i> New Audit</a>
                    </h4>
                    <?php 
                    $i = 1;
                    while($i <= 3):
                    ?>
                    <div class="row-fluid">
                      <h4 class="section_title"><i class="icon-folder-open"></i> <a href="client-report-detail.php">Panera Bread Co., Southwest</a></h4>
                      <div class="project_glance row-fluid">
                        <div class="span2 align-right">
                          <a class="knob-wrapper glance" href="client-report-detail.php">
                            <input type="text" value="80" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#f1f1f1" data-width="100" data-height="58" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                            <div class="info">
                                <div class="param">
                                  Latest Score<br>
                                  <small>(July 12, 2013)</small>
                                </div>
                            </div>
                          </a>
                        </div>
                        <table class="table span10 block_table">
                          <thead class="no_border">
                            <tr>
                              <th>Latest Report</th>
                              <th>Next Report</th>
                              <th>Overall Score Trend</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td><strong>July 12, 2013</strong> (2 days ago)</td>
                              <td><strong>July 31, 2013</strong> (in 11 days)</td>
                              <td><div id="miniglancechart<?php echo $i; ?>" class="miniglancecharts"></div></td>
                              <td>
                                <a href="client-report-detail.php" class="btn-flat btn-flat-small gray">
                                  <i class="icon-arrow-right icon-white"></i> View
                                </a>
                                <a class="btn-flat btn-flat-small gray" href="#">
                                  <i class="icon-print"></i> Print
                                </a>
                                <a class="btn-flat btn-flat-small gray" href="#">
                                  <i class="icon-envelope"></i> Email
                                </a>
                              </td>
                            </tr>
                            <tr>
                              <td colspan=4><strong>Scoring Metrics:</strong><br>
                              <a class="label label-success" href="client-report-detail.php">Uniform Quality Standards (84)</a>  
                              <a class="label label-success" href="client-report-detail.php">Expeditor Greeting (81)</a>  
                              <a class="label label-success" href="client-report-detail.php">Station Safety (88)</a> 

                              </td>
                            </tr>
                          </tbody>
                        </table>
                          
                      </div>
                    </div>
                    <?php
                    $i++;
                    endwhile;
                    ?>
                    
                    
                  
                  
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