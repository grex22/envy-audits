<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <!--<div class="row-fluid main_header">
                    <div class="span12">
                      <h3>Intelligence</h3>
                    </div>
                </div>-->
            </div>
           
            
            <div id="content_wrapper" class="with_browser_button">
              <div id="leftside_float_nav">
                <a href="#" data-toggle="tooltip" title="Intelligence Dashbaord" data-placement="right"><i class="icon-th-large"></i></a>
                <a href="#" data-toggle="tooltip" title="Reports Browser" data-placement="right"><i class="icon-file-alt"></i></a>
              </div>
              <div class="row-fluid ui-elements minimum_width">
                <div class="span12">
                
                  <div class="row-fluid widget no_bottom_padding">                    
                    <h4 class="widget_title no_bottom_margin no_arrow" id="top_scroll">
                        
                        <i class="icon-file-alt"></i> <span id="report_title_target">Small Transactions Report</span>
                        <div class="report_header_icon_actions">
                          <a href="#" id="report_favorite_toggle" data-toggle="tooltip" title="Favorite this Report"><i class="icon-star"></i></a>
                          <div class="inline pos_rel">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                <i class="icon-cog"></i>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                              <li><a href="#">Share this Report</a></li>
                              <li><a href="#">Add Widget to Dashboard</a></li>
                              <li class="divider"></li>
                              <li><a href="#">Download Report</a></li>
                              <li><a href="#">Print Report</a></li>
                            </ul>
                          </div>
                        </div>
                        <div class="report_header_tags pull-right">
                          <span style="font-size:11px;">Tagged:</span> 
                          <ul class="tags_list">
                            <li class="tag"><a href="#">Retail</a></li>
                            <li class="tag"><a href="#">Loss Prevention</a></li>
                            <li>3 more&hellip;</li>
                            <li><a href="#" id="tags_edit_link">edit</a></li>
                          </ul>
                        </div>
                        
                    </h4>
                    
                    
                    <div class="row-fluid report_header padded no_bottom_margin">
                      <div class="span2">
                        <div class="btn-group big_orange_button_group">
                          <a href="#customize_report_modal" data-toggle="modal"  class="btn widthoverride" id="filter_box_wrapper_toggle"><i class="icon-tasks"></i> Customize Report</a>

                        </div>
                      </div>
                      <div class="span7">
                        <div class="input-append no_bottom_margin pos_rel">
                          <i class="icon-search for_search_input"></i> <input type="text" id="mega_search" class="typeahead" placeholder="Search employees and locations..." data-provide="typeahead" autocomplete="off">
                          <button class="btn big-secondary-btn">Browse <i class="icon-caret-down"></i></button>
                          <div id="mega_search_typeahead">
                            <div id="ajax_results">
                              <ul>
                                <li class="ms_item"><a href="#"><i class="icon-user"></i> <strong>Bran</strong>don Line</a></li>
                                <li class="ms_item"><a href="#"><i class="icon-user"></i> Elaine <strong>Bran</strong>son</a></li>
                                <li class="ms_item"><a href="#"><i class="icon-pushpin"></i> <strong>Bran</strong>ford</a></li>
                              </ul>
                            </div>
                            <div class="ms_header">Recently Viewed</div>
                            <ul>
                              <li class="ms_item"><a href="#"><i class="icon-user"></i> Small Transactions - Steve Scott</a></li>
                              <li class="ms_item"><a href="#"><i class="icon-user"></i> Small Transactions - Jerry Seinfeld</a></li>
                              <li class="ms_item"><a href="#"><i class="icon-pushpin"></i> Small Transactions - Braintree</a></li>
                              <li class="ms_item"><a href="#"><i class="icon-user"></i> Small Transactions - George Costanza</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                      <div class="span3">
                        <div id="report_daterange" class="report_jump_menu pull-right inline">
                          <i class="icon-calendar"></i> 
                            <span>Dec 1, 2013 - Dec 10, 2013</span>
                        </div>
                      </div>

                      <!--<div class="row-fluid" id="filter_box_wrapper">
                        <div class="span12">
                          <form class="form-horizontal">
                            <div class="control-group">
                              <label class="control-label" for="reportTitle">Custom Report Title</label>
                              <div class="controls">
                                <input type="text" id="reportTitle" value="Small Transactions Report 2">
                              </div>
                            </div>
                            <div class="control-group">
                              <label class="control-label" for="inputPassword">Filters</label>
                              <div class="controls">
                                <div class="form-inline">
                                  <input type="text" class="input-small" placeholder="Email">
                                  <input type="password" class="input-small" placeholder="Password">
                                  <label class="checkbox">
                                    <input type="checkbox"> Remember me
                                  </label>
                                  <button type="submit" class="btn">Sign in</button>
                                </div>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>-->       
                    </div>
                    
                    <div class="row-fluid report_tabs_wrap">
                      
                      <ul class="nav nav-tabs no_bottom_margin" id="report_tabbed_nav_1">
                        <li class="active"><a href="#overview" data-toggle="tab"><i class="icon-home"></i> Overview</a></li>
                        <li><a href="#locations" data-toggle="tab"><i class="icon-pushpin"></i> Locations</a></li>
                        <li><a href="#employees" data-toggle="tab"><i class="icon-user"></i> Employees</a></li>
                      </ul>
                    </div>
                  
                    
                    <div class="tab-content padded">
                    
                      <div id="loading_overlay_full">
                        <img src="img/custom/ajax-loader.gif">
                      </div>
                      
                      <div class="tab-pane active" id="overview">
                        <div class="row-fluid toggleable more_bottom_margin">
                          <div class="span12">
                            <h4 class="more_bottom_margin">Number of Small Transactions, <span class="title_variable">All Locations</span></h4>
                            <div id="widget01" class="flotgraph" data-dataset='2'></div>
                          </div>    
                          <span class="row_toggler">
                            <a href="#"><span>hide graph</span> <i class="icon-minus-sign"></i></a>
                          </span>
                        </div>
                        
                        <div class="row-fluid more_bottom_margin">
                          <div class="span6">
                            <h4 class="data_table_header"><a href="client-report-locations.php">Locations with the Most Small Transactions</a></h4>
                            <table class="table table-condensed">
                              <tbody>
                                <tr>
                                  <td>1</td>
                                  <td><a href="#">Braintree</a></td>
                                  <td class="align-right">98</td>
                                </tr>
                                <tr>
                                  <td>2</td>
                                  <td><a href="#">Milford</a></td>
                                  <td class="align-right">95</td>
                                </tr>
                                <tr>
                                  <td>3</td>
                                  <td><a href="#">Lexington</a></td>
                                  <td class="align-right">95</td>
                                </tr>
                                <tr>
                                  <td>4</td>
                                  <td><a href="#">Fauxnombre</a></td>
                                  <td class="align-right">91</td>
                                </tr>
                                <tr>
                                  <td>5</td>
                                  <td><a href="#">Pratton</a></td>
                                  <td class="align-right">88</td>
                                </tr>
                                
                              </tbody>
                            </table>
                            <div class="btn-group align-right block">
                              <a href="client-report-locations.php" class="btn-flat primary">View All <i class="icon-circle-arrow-right icon-white"></i></a>
                            </div>
                          </div>
                          <div class="span6">
                          <h4 class="data_table_header">
                          
                          <a href="client-report-employees.php">Employees with the Most Small Transactions</a>
                          </h4>
                          <table class="table table-condensed">

                            <tbody>
                              <tr>
                                <td>1</td>
                                <td><a href="client-report-employees-detail.php">Missy Ambrose</a></td>
                                <td class="align-right">33</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td><a href="client-report-employees-detail.php">Pat Franz</a></td>
                                <td class="align-right">25</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td><a href="client-report-employees-detail.php">Stacey Stans</a></td>
                                <td class="align-right">25</td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td><a href="client-report-employees-detail.php">Mark Stevens</a></td>
                                <td class="align-right">22</td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td><a href="client-report-employees-detail.php">Mark Otto</a></td>
                                <td class="align-right">20</td>
                              </tr>
                            </tbody>
                          </table>
                            <div class="btn-group align-right block">
                            <a href="client-report-employees.php" class="btn-flat primary">View All <i class="icon-circle-arrow-right icon-white"></i></a>
                            </div>
                          </div>
                          </div>
                        
                        <div class="row-fluid">
                          <div class="span12">
                          <div class="pull-right pagination_well">
                            Show: 
                            <select>
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
                          <h4 class="data_table_header data_table_breadcrumbs"><span>Small Transactions by Employee</span></h4></div>                      
                        </div>
                        
                        <div class="row-fluid more_bottom_margin live_drilldown_wrap">

                          <table class="table table-hover block_table live_drilldown" id="tablestate_01">
                            <thead>
                              <tr>
                                <th class="sortable">Employee </th>
                                <th class="sortable">Location </th>
                                <th class="sortable align-center">Transactions </th>
                                <th class="sortable align-center">Transactions Ratio </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr><td>Andre Swango</td><td>Georgetown - 1225</td><td class="align-center">23</td><td class="align-center">4</td></tr>
                              <tr><td>Mihai Holme</td><td>Dry Creek - 0189</td><td class="align-center">14</td><td class="align-center">6</td></tr>
                              <tr><td>Adrian MacDougall</td><td>Morse Road - 1690</td><td class="align-center">13</td><td class="align-center">4</td></tr>
                              <tr><td>Grigori Knopf</td><td>Boulder - 0349</td><td class="align-center">12</td><td class="align-center">2</td></tr>
                              <tr><td>Margrete Parsons</td><td>Fashion Mall - 2093</td><td class="align-center">11</td><td class="align-center">5</td></tr>
                              <tr><td>Borbala Brinkerhoff</td><td>Brooksville - 1348</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jai Wernher</td><td>8 Mile - 1648</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Vigi Payne</td><td>1231 6th - 0769</td><td class="align-center">11</td><td class="align-center">1</td></tr>
                              <tr><td>Harun Newell</td><td>Annapolis - 0840</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jeremias Holst</td><td>Caldwell - 1209</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Ales Allsopp</td><td>Hunter's College - 1394</td><td class="align-center">11</td><td class="align-center">2</td></tr>
                              <tr><td>Michael Moore</td><td>Wheaton - 2055</td><td class="align-center">11</td><td class="align-center">4</td></tr>
                              <tr><td>Mahdi Sultana</td><td>East End - 0345</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Winthrop Kavach</td><td>Piccadilly Circus - 1458</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Sharifa Rocha</td><td>Bastille - 1658</td><td class="align-center">11</td><td class="align-center">2</td></tr>

                              <tr></tr>
                            </tbody>
                          </table>
                          
                          <table class="table table-hover block_table samples_table" id="tablestate_02" style="display:none">
                              <thead>
                                <tr>
                                  <th>Preview</th>
                                  <th class="sortable">Score </th>
                                  <th class="sortable">Date </th>
                                  <th class="sortable">Time </th>
                                  <th class="sortable">Location </th>
                                  <th class="sortable align-center">Transaction Amount</th>
                                  <th class="sortable align-center">Transaction </th>
                                  <th class="close_holder"> </th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php for($i=1; $i<15; $i++){  ?>
                                <tr>
                                  <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                  <td>10001</td>
                                  <td>7/13/13</td>
                                  <td>3:32 pm EST</td>
                                  <td>Braintree</td>
                                  <td class="align-center">$<?php echo rand(1,2).".".rand(0,9).rand(0,9); ?></td>
                                  <td class="align-center"><?php rand(0,1) ? print '<i class="icon-list-alt"></i>' : print ''; ?></td>
                                  <td class="close_holder"><i class="icon-remove"></i></td>
                                </tr>
                                <tr class="detail_row">
                                  <td colspan=20>
                                    <div class="sample_wrapper row-fluid">
                                      <div class="span4">
                                        <h5>Video</h5>
                                        <a href="#" class="enlarge_cam"><img src="img/custom/panera-cam-condensed.jpg"></a>
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
                            Show: 
                            <select>
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
                            
                        </div>
                      
                      </div>
                      <div class="tab-pane" id="employees">
                         <div class="row-fluid toggleable more_bottom_margin">
                          <div class="span12">
                            <h4 class="more_bottom_margin">Number of Small Transactions, <span class="title_variable">All Employees</span></h4>
                            <div id="widget02" class="flotgraph" data-dataset='1' ></div>
                          </div>    
                          <span class="row_toggler">
                            <a href="#"><span>hide graph</span> <i class="icon-minus-sign"></i></a>
                          </span>
                        </div>
                        
                        <div class="row-fluid">
                          <div class="span12">
                          <div class="pull-right pagination_well">
                            Show: 
                            <select>
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
                          <h4 class="data_table_header data_table_breadcrumbs"><span>Small Transactions by Employee</span></h4></div>                      
                        </div>
                        
                        <div class="row-fluid more_bottom_margin live_drilldown_wrap">

                          <table class="table table-hover block_table live_drilldown" id="tablestate_01">
                            <thead>
                              <tr>
                                <th class="sortable">Employee </th>
                                <th class="sortable">Location </th>
                                <th class="sortable align-center">Transactions </th>
                                <th class="sortable align-center">Transactions Ratio </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr><td>Andre Swango</td><td>Georgetown - 1225</td><td class="align-center">23</td><td class="align-center">4</td></tr>
                              <tr><td>Mihai Holme</td><td>Dry Creek - 0189</td><td class="align-center">14</td><td class="align-center">6</td></tr>
                              <tr><td>Adrian MacDougall</td><td>Morse Road - 1690</td><td class="align-center">13</td><td class="align-center">4</td></tr>
                              <tr><td>Grigori Knopf</td><td>Boulder - 0349</td><td class="align-center">12</td><td class="align-center">2</td></tr>
                              <tr><td>Margrete Parsons</td><td>Fashion Mall - 2093</td><td class="align-center">11</td><td class="align-center">5</td></tr>
                              <tr><td>Borbala Brinkerhoff</td><td>Brooksville - 1348</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jai Wernher</td><td>8 Mile - 1648</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Vigi Payne</td><td>1231 6th - 0769</td><td class="align-center">11</td><td class="align-center">1</td></tr>
                              <tr><td>Harun Newell</td><td>Annapolis - 0840</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jeremias Holst</td><td>Caldwell - 1209</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Ales Allsopp</td><td>Hunter's College - 1394</td><td class="align-center">11</td><td class="align-center">2</td></tr>
                              <tr><td>Michael Moore</td><td>Wheaton - 2055</td><td class="align-center">11</td><td class="align-center">4</td></tr>
                              <tr><td>Mahdi Sultana</td><td>East End - 0345</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Winthrop Kavach</td><td>Piccadilly Circus - 1458</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Sharifa Rocha</td><td>Bastille - 1658</td><td class="align-center">11</td><td class="align-center">2</td></tr>

                              <tr></tr>
                            </tbody>
                          </table>
                          
                          <table class="table table-hover block_table samples_table" id="tablestate_02" style="display:none">
                              <thead>
                                <tr>
                                  <th>Preview</th>
                                  <th class="sortable">Score </th>
                                  <th class="sortable">Date </th>
                                  <th class="sortable">Time </th>
                                  <th class="sortable">Location </th>
                                  <th class="sortable align-center">Transaction Amount</th>
                                  <th class="sortable align-center">Transaction </th>
                                  <th class="close_holder"> </th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php for($i=1; $i<15; $i++){  ?>
                                <tr>
                                  <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                  <td>10001</td>
                                  <td>7/13/13</td>
                                  <td>3:32 pm EST</td>
                                  <td>Braintree</td>
                                  <td class="align-center">$<?php echo rand(1,2).".".rand(0,9).rand(0,9); ?></td>
                                  <td class="align-center"><?php rand(0,1) ? print '<i class="icon-list-alt"></i>' : print ''; ?></td>
                                  <td class="close_holder"><i class="icon-remove"></i></td>
                                </tr>
                                <tr class="detail_row">
                                  <td colspan=20>
                                    <div class="sample_wrapper row-fluid">
                                      <div class="span4">
                                        <h5>Video</h5>
                                        <a href="#" class="enlarge_cam"><img src="img/custom/panera-cam-condensed.jpg"></a>
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
                            Show: 
                            <select>
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
                            
                        </div>
                      
                      
                      </div>
                      <div class="tab-pane" id="locations">
                      
                         <div class="row-fluid toggleable more_bottom_margin">
                          <div class="span12">
                            <h4 class="more_bottom_margin">Number of Small Transactions, <span class="title_variable">All Locations</span></h4>
                            <div id="widget03" class="flotgraph" data-dataset='0'></div>
                          </div>    
                          <span class="row_toggler">
                            <a href="#"><span>hide graph</span> <i class="icon-minus-sign"></i></a>
                          </span>
                        </div>
                        
                        <div class="row-fluid">
                          <div class="span12">
                          <div class="pull-right pagination_well">
                            Show: 
                            <select>
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
                          <h4 class="data_table_header data_table_breadcrumbs" ><span>Small Transactions by Employee</span></h4></div>                      
                        </div>
                        
                        <div class="row-fluid more_bottom_margin live_drilldown_wrap">

                          <table class="table table-hover block_table live_drilldown" id="tablestate_01">
                            <thead>
                              <tr>
                                <th class="sortable">Employee </th>
                                <th class="sortable">Location </th>
                                <th class="sortable align-center">Transactions </th>
                                <th class="sortable align-center">Transactions Ratio </th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr><td>Andre Swango</td><td>Georgetown - 1225</td><td class="align-center">23</td><td class="align-center">4</td></tr>
                              <tr><td>Mihai Holme</td><td>Dry Creek - 0189</td><td class="align-center">14</td><td class="align-center">6</td></tr>
                              <tr><td>Adrian MacDougall</td><td>Morse Road - 1690</td><td class="align-center">13</td><td class="align-center">4</td></tr>
                              <tr><td>Grigori Knopf</td><td>Boulder - 0349</td><td class="align-center">12</td><td class="align-center">2</td></tr>
                              <tr><td>Margrete Parsons</td><td>Fashion Mall - 2093</td><td class="align-center">11</td><td class="align-center">5</td></tr>
                              <tr><td>Borbala Brinkerhoff</td><td>Brooksville - 1348</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jai Wernher</td><td>8 Mile - 1648</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Vigi Payne</td><td>1231 6th - 0769</td><td class="align-center">11</td><td class="align-center">1</td></tr>
                              <tr><td>Harun Newell</td><td>Annapolis - 0840</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Jeremias Holst</td><td>Caldwell - 1209</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Ales Allsopp</td><td>Hunter's College - 1394</td><td class="align-center">11</td><td class="align-center">2</td></tr>
                              <tr><td>Michael Moore</td><td>Wheaton - 2055</td><td class="align-center">11</td><td class="align-center">4</td></tr>
                              <tr><td>Mahdi Sultana</td><td>East End - 0345</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Winthrop Kavach</td><td>Piccadilly Circus - 1458</td><td class="align-center">11</td><td class="align-center">3</td></tr>
                              <tr><td>Sharifa Rocha</td><td>Bastille - 1658</td><td class="align-center">11</td><td class="align-center">2</td></tr>

                              <tr></tr>
                            </tbody>
                          </table>
                          
                          <table class="table table-hover block_table samples_table" id="tablestate_02" style="display:none">
                              <thead>
                                <tr>
                                  <th>Preview</th>
                                  <th class="sortable">Score </th>
                                  <th class="sortable">Date </th>
                                  <th class="sortable">Time </th>
                                  <th class="sortable">Location </th>
                                  <th class="sortable align-center">Transaction Amount</th>
                                  <th class="sortable align-center">Transaction </th>
                                  <th class="close_holder"> </th>
                                </tr>
                              </thead>
                              <tbody>
                              <?php for($i=1; $i<15; $i++){  ?>
                                <tr>
                                  <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                  <td>10001</td>
                                  <td>7/13/13</td>
                                  <td>3:32 pm EST</td>
                                  <td>Braintree</td>
                                  <td class="align-center">$<?php echo rand(1,2).".".rand(0,9).rand(0,9); ?></td>
                                  <td class="align-center"><?php rand(0,1) ? print '<i class="icon-list-alt"></i>' : print ''; ?></td>
                                  <td class="close_holder"><i class="icon-remove"></i></td>
                                </tr>
                                <tr class="detail_row">
                                  <td colspan=20>
                                    <div class="sample_wrapper row-fluid">
                                      <div class="span4">
                                        <h5>Video</h5>
                                        <a href="#" class="enlarge_cam"><img src="img/custom/panera-cam-condensed.jpg"></a>
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
                            Show: 
                            <select>
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
    
    <div class="row-fluid ui-elements modal big_modal hide fade" id="customize_report_modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h3>Customize Report</h3>
      </div>
      <div class="row-fluid ui-elements padded">
      <div class="span8" id="change_view_left_col"></div>
      </div>
    </div>
    
    <?php include ('inc/footer.php'); ?>