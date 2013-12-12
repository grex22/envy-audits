<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <!--<a class="btn-flat large primary pull-right mt10" href="#" data-toggle="modal">
                        <i class="icon-arrow-right"></i> Begin Scoring
                      </a>-->
                      <h3>
                        Intelligence
                      </h3>
                      <!--<p><em>Not Sure Where to Start?</em> Simply click "Begin Scoring" to be taken to the highest-priority samples, in order</p>-->
                    </div>
                </div>
            </div>
           
            
            <div id="content_wrapper">
            
              <div class="row-fluid ui-elements minimum_width">
                <div class="span12">
                
                  <div class="row-fluid widget no_bottom_padding">                    
                    <h4 class="widget_title no_bottom_margin no_arrow">
                        <div class="btn-group pull-right more_button_padding">
                          <button class="glow left">Add to Dashboard <i class="icon-th-large"></i></button>
                          <button class="glow middle">Export <i class="icon-download-alt"></i></button>
                          <button class="glow right">Print <i class="icon-print"></i></button>
                        </div>
                        
                        <i class="icon-bar-chart"></i> <span id="report_title_target">Small Transactions Report</span>
                            <div class="report_header_icon_actions">
                              <a href="#" id="report_favorite_toggle" data-toggle="tooltip" title="Favorite this Report"><i class="icon-star"></i></a>
                              <a href="#" id="report_edit_toggle" data-toggle="tooltip" title="Edit Report"><i class="icon-pencil"></i></a>
                              <a href="#" id="report_share_toggle" data-toggle="tooltip" title="Share Report"><i class="icon-share-alt"></i></a>
                            </div>
                            <div class="report_header_tags">
                              <i class="icon-tags"></i>
                              <ul class="tags_list">
                                <li class="tag">Retail</li>
                                <li class="tag">Loss Prevention</li>
                                <li>3 more&hellip;</li>
                                <li><a href="#" id="tags_edit_link">edit</a></li>
                              </ul>
                              
                            </div>
                            <!--
                            
                            
                            
                            <div id="audit_dash_daterange" class="report_jump_menu inline">
                              <i class="icon-calendar"></i> 
                              <span>Nov 7, 2013 - Nov 13, 2013</span>
                            </div>
                            
                            
                            
                            -->
                    </h4>
                    
                    
                    <div class="row-fluid report_header padded no_bottom_margin">
                      <div class="span12" id="report_filter_bar">
                        <div class="btn-group big_orange_button_group">
                          <a href="#" class="btn widthoverride"><i class="icon-filter"></i> Filter Data</a>
                        </div>
                          <div class="select2-container inline select2_jump" id="s2id_report_location">    <a href="#" onclick="return false;" class="select2-choice">   <span>All Locations</span><abbr class="select2-search-choice-close" style="display:none;"></abbr>   <div><b></b></div></a>    <div class="select2-drop select2-offscreen">   <div class="select2-search">       <input type="text" autocomplete="off" class="select2-input">   </div>   <ul class="select2-results">   </ul></div></div><select id="report_location" class="inline select2_jump" style="display: none;">
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
                              <span>Dec 1, 2013 - Dec 10, 2013</span>
                          </div>
                      </div>
                    </div>
                    
                    
                    <div class="row-fluid">
                      <div class="span12">
                        <div class="navbar report_navbar_compact thirds no_bottom_margin" id="report_navbar">
                          <div class="navbar-inner">
                            <div class="row-fluid">
                              <div class="report_links_wrap span12">
                                <ul class="nav" id="audit_view_tabs">
                                    <li>
                                      <a href="#" class="active">
                                        <i class="icon-home"></i> Overview
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <i class="icon-group"></i> Employees
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#">
                                        <i class="icon-pushpin"></i> Locations
                                      </a>
                                    </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                    <div class="padded">
                      <div class="row-fluid toggleable more_bottom_margin">
                        <div class="span12">
                          <h4 class="more_bottom_margin">Small Transactions, All Locations, Dec 3, 2013 - Dec 12, 2013:</h4>
                          <div id="widget01" style="height:150px;"></div>
                        </div>    
                        <span class="row_toggler">
                          <a href="#"><span>hide graph</span> <i class="icon-minus-sign"></i></a>
                        </span>
                      </div>
                      
                      <div class="row-fluid">
                        <div class="span12"><h4 class="data_table_header">Employees with Largest Number of Small Transactions</div>                       
                      </div>
                      <div class="row-fluid">
                        <table class="table table-condensed">
                          <thead>
                            <tr>
                              <th class="sortable">Employee </th>
                              <th class="sortable">Location </th>
                              <th class="sortable">Transactions </th>
                              <th class="sortable">Transactions Ratio </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr><td>Andre Swango</td><td>Georgetown - 1225</td><td>23</td><td>4</td></tr>
                            <tr><td>Mihai Holme</td><td>Dry Creek - 0189</td><td>14</td><td>6</td></tr>
                            <tr><td>Adrian MacDougall</td><td>Morse Road - 1690</td><td>13</td><td>4</td></tr>
                            <tr><td>Grigori Knopf</td><td>Boulder - 0349</td><td>12</td><td>2</td></tr>
                            <tr><td>Margrete Parsons</td><td>Fashion Mall - 2093</td><td>11</td><td>5</td></tr>
                            <tr><td>Borbala Brinkerhoff</td><td>Brooksville - 1348</td><td>11</td><td>3</td></tr>
                            <tr><td>Jai Wernher</td><td>8 Mile - 1648</td><td>11</td><td>3</td></tr>
                            <tr><td>Vigi Payne</td><td>1231 6th - 0769</td><td>11</td><td>1</td></tr>
                            <tr><td>Harun Newell</td><td>Annapolis - 0840</td><td>11</td><td>3</td></tr>
                            <tr><td>Jeremias Holst</td><td>Caldwell - 1209</td><td>11</td><td>3</td></tr>
                            <tr><td>Ales Allsopp</td><td>Hunter's College - 1394</td><td>11</td><td>2</td></tr>
                            <tr><td>Michael Moore</td><td>Wheaton - 2055</td><td>11</td><td>4</td></tr>
                            <tr><td>Mahdi Sultana</td><td>East End - 0345</td><td>11</td><td>3</td></tr>
                            <tr><td>Winthrop Kavach</td><td>Piccadilly Circus - 1458</td><td>11</td><td>3</td></tr>
                            <tr><td>Sharifa Rocha</td><td>Bastille - 1658</td><td>11</td><td>2</td></tr>

                            <tr></tr>
                          </tbody>
                        </table>
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
                                <th class="sortable align-center">Transaction </th>
                                <th class="close_holder"> </th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php for($i=1; $i<15; $i++){ $pf = rand(0,2); ?>
                              <tr class="<?php $pf ? print"pass" : print"fail"; ?>">
                                <td><img class="sample_thumb" src="img/custom/panera-cam-thumb.jpg"></td>
                                <td><span class="label label-<?php $pf ? print"success" : print"fail";?>"><?php $pf ? print "Pass!":print "Fail"; ?></span>
                                </td>
                                <td>Cashier</td>
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
    
    <?php include ('inc/footer.php'); ?>