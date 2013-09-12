<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <h3>
                        <a href="client-report-overview.php">Intelligence</a> &raquo; Audit Detail
                      </h3>
                    </div>
                </div>
            </div>
            
            <div id="content_wrapper">
              <div class="row-fluid ui-elements">
                
                <div class="span12">
                    

                    <div class="row-fluid left_column_nav">
                      
                      <div class="span3" id="report_nav">
                        <div class="row-fluid widget">
                          <div class="accordion" id="accordion2">
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <a href="client-report-detail.php" class="accordion-toggle active" >
                                  <i class="icon-th-large"></i> Overview
                                </a>
                              </div>
                            </div>
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <span class="accordion-toggle" data-toggle="collapse" data-target="#collapseTwo" href="#collapseTwo">
                                  <i class="icon-pushpin"></i> My Locations
                                </span>
                              </div>
                              <div id="collapseTwo" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                  <ul>
                                    <li>
                                      <a href="#">
                                      All Locations
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#" data-toggle="collapse" class="collapsed has_submenu" data-target="#demo">
                                      Southwest Stores
                                      </a>
                                      <div id="demo" class="in collapse">
                                      <ul>
                                        <li class="active"><a href="#">Braintree</a></li>
                                        <li><a href="#">Milford</a></li>
                                        <li><a href="#">Lexington</a></li>
                                      </ul>
                                      </div>
                                    </li>
                                    <li>
                                      <a href="#" data-toggle="collapse" class="collapsed has_submenu" data-target="#demo2">
                                      Northwest Stores
                                      </a>
                                      <div id="demo2" class="collapse">
                                      <ul>
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Library</a></li>
                                      </ul>
                                      </div>
                                    </li>
                                  </ul>
                                  
                                </div>
                              </div>
                            </div>
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <span class="accordion-toggle" data-toggle="collapse" data-target="#collapseThree" href="#collapseThree">
                                  <i class="icon-lightbulb"></i> Metrics
                                </span>
                              </div>
                              <div id="collapseThree" class="accordion-body collapse in">
                                <div class="accordion-inner">
                                  <ul>
                                    <li>
                                      <a href="#" data-toggle="collapse" class="collapsed has_submenu" data-target="#demo3">
                                      Vindaloo Hot! Audit
                                      </a>
                                      <div id="demo3" class="collapse in">
                                      <ul>
                                        <li class="active"><a href="#">Cashier Metric</a></li>
                                        <li><a href="#">Expeditor</a></li>
                                        <li><a href="#">Quality Control</a></li>
                                      </ul>
                                      </div>
                                    </li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="accordion-group">
                              <div class="accordion-heading">
                                <a class="accordion-toggle collapsed" href="#">
                                  <i class="icon-group"></i> Employees
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="span9">
                        <div class="row-fluid widget">
                        <?php $title = "Employee &raquo; Elizabeth Jones"; ?>
                        <?php include('report_header.php'); ?>
                        <div class="padded">
                        <h4 class="widget_sub_title">Report Overview:</h4>
                        
                        <div class="knobs row-fluid knob_box" style="display:inline-block;width:auto">
                        
                          <div class="span3">
                          <a href="client-report-detail-cashier.php" class="knob-wrapper active">
                            <table style="width:200px;">
                              <tr style="width:200px;">
                                <td>
                                  <input type="text" value="49" class="knob" data-thickness=".3" data-inputColor="#333" data-bgColor="#dddddd" data-width="80" data-height="50" data-readOnly="true" data-angleOffset="-100" data-angleArc="200">
                                </td>
                                <td class="gauge_score">
                                  Cashier Metric
                                </td>
                              </tr>
                            </table>
                          </a>
                          </div>
                        </div>


                        <div class="row-fluid">
                          <div class="span12">
                                                      
                            <div class="chart">
                              
                                <div class="tab-pane active" id="overall">
                                  <div class="row-fluid">
                                    <div class="span12">
                                      
                                      <h4 class="widget_sub_title">
                                      Cashier Metric Score:</h4>
                                    </div>
                                  </div>
                                  <div class="row-fluid">
                                    <div id="statsChartdetail4" class="span12 flot_fix"></div>
                                  </div>
                                </div>
                                
                              
                            </div>
                              
                              
                          </div>
                        </div>
                        
                        <div class="row-fluid">
                          <div class="span6">
                                                      
                            <div class="chart">
                              
                                  <div class="row-fluid">
                                    <div class="span12">
                                      
                                      <h4 class="widget_sub_title">
                                      Day Part:</h4>
                                    </div>
                                  </div>
                                  <div class="row-fluid">
                                    <div id="lunchvdinner" class="span12 flot_fix"></div>
                                  </div>
                                
                              
                            </div>
                              
                              
                          </div>
                          <div class="span6">
                                                      
                            <div class="chart">
                              
                                  <div class="row-fluid">
                                    <div class="span12">
                                      
                                      <h4 class="widget_sub_title">
                                      Day of the Week:</h4>
                                    </div>
                                  </div>
                                  <div class="row-fluid">
                                    <div id="weekendvweekday" class="span12 flot_fix"></div>
                                  </div>
                                
                              
                            </div>
                              
                              
                          </div>
                        </div>
                        
                          <div class="row-fluid chart">
                          <div class="row-fluid">
                            <div class="span12"><h4 class="widget_sub_title">Employee Scores:</h4></div>
                          </div>
                          <div class="row-fluid">
                          <div class="span6">
                            <h6>Best Scores this Period:</h6>
                            <table class="table block_table graph_table">
                              <tbody>
                                <tr><td>1</td><td><a href="client-report-detail.php">Jasper Collins</a></td><td><span class="hgraph" style="width:81%"></span>95%</td></tr>
                                <tr><td>2</td><td><a href="client-report-detail.php">James Sligh</a></td><td><span class="hgraph" style="width:80%"></span>94%</td></tr>
                                <tr><td>3</td><td><a href="client-report-detail.php">Connie Seiffert</a></td><td><span class="hgraph" style="width:78%"></span>93%</td></tr>
                                <tr><td>4</td><td><a href="client-report-detail.php">Martin Scoles</a></td><td><span class="hgraph" style="width:77.5%"></span>92%</td></tr>
                                <tr><td>5</td><td><a href="client-report-detail.php">Susan Brafton</a></td><td><span class="hgraph" style="width:74.5%"></span>90%</td></tr>
                              </tbody>
                            </table>
                          </div>
                          <div class="span6">
                            <h6>Lowest Scores this Period:</h6>
                            <table class="table block_table graph_table gray_graphs">
                              <tbody>
                                <tr><td>1</td><td><a href="client-report-detail.php">Elizabeth Jones</a></td><td><span class="hgraph" style="width:61%"></span>75%</td></tr>
                                <tr><td>2</td><td><a href="client-report-detail.php">Monica Farwell</a></td><td><span class="hgraph" style="width:60%"></span>74%</td></tr>
                                <tr><td>3</td><td><a href="client-report-detail.php">Stacy Paige</a></td><td><span class="hgraph" style="width:58%"></span>70%</td></tr>
                                <tr><td>4</td><td><a href="client-report-detail.php">Alex Kopp</a></td><td><span class="hgraph" style="width:52.5%"></span>66%</td></tr>
                                <tr><td>5</td><td><a href="client-report-detail.php">Kris Martin</a></td><td><span class="hgraph" style="width:50.5%"></span>60%</td></tr>
                              </tbody>
                            </table>
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
                          &nbsp;|&nbsp; Viewing 1-15 of 15 &nbsp;|&nbsp;
                          
                          <div class="btn-group">
                            <a class="btn-flat btn-flat-small white left"><i class="icon-chevron-left"></i></a>
                            <a class="btn-flat btn-flat-small white right"><i class="icon-chevron-right"></i></a>
                          </div>
                          </div>
                          <h4 class="data_table_header">Scored Events <div class="filter_links">
                          Show: &nbsp; <a href="#" data-show="all" class="active">All (15)</a> | <a href="#" data-show="fail">Fails (3)</a> | <a href="#" data-show="pass">Passes (12)</a>
                        </div></h4>
                          
                          <table class="table table-hover block_table samples_table">
                            <thead>
                              <tr>
                                <th>Preview</th>
                                <th class="sortable">Score </th>
                                <th class="sortable">Transaction </th>
                                <th class="sortable">Date </th>
                                <th class="sortable">Time </th>
                                <th class="sortable">Location </th>
                                <th class="sortable">Receipt </th>
                                <th class="close_holder"> </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php for($i=1; $i<15; $i++){ $pf = rand(0,2); ?>
                              <tr class="<?php $pf ? print"pass" : print"fail"; ?>">
                                <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                <td><strong><?php $pf ? print "<span style='color:#36abff'>Pass</span>" : print "<span style='color:orange'>Fail</span>" ?></strong></td>
                                <td>#<?php echo rand(1000,3000); ?></td>
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
                                      
                                      <h5>Score</h5>
                                        <div class="sample_receipt">
                                        <table class="block_table">
                                        <tr><td><strong>Score</strong></td><td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span></td></tr>
                                        <tr><td><strong>Employee:</strong></td><td>Elizabeth Jones</td></tr>
                                        <tr><td colspan=2><strong>Comments:</strong></td></tr>
                                        <tr><td colspan=2><?php $pf ? print"Cashier offered to list the ingredients for the order.":print"Cashier did not offer to list the ingredients for the Chicken Caesar Salad and Bacon Turkey Bravo"; ?></td></tr>                                       
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
                          Viewing 1-15 of 15 &nbsp;|&nbsp;
                          
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