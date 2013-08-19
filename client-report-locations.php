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
                            <div class="span4 report_links_wrap">
                              <ul class="nav">
                                  <li>
                                    <a href="client-report-detail.php">
                                      <i class="icon-home"></i> Overview
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-locations.php" class="active" >
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
                            <div class="span4 padded">
                              <div class="btn-group pull-right more_button_padding">
                                <button class="glow left">Email <i class="icon-envelope"></i></button>
                                <button class="glow middle">Export <i class="icon-download-alt"></i></button>
                                <button class="glow right">Print <i class="icon-print"></i></button>
                              </div>
                            </div>
                            
                            </div>
                            
                        </div>
                        </div>
                        <div class="row-fluid report_header padded">
                          <div class="span9">
                            <h3>Locations Report:
                              <select id="report_location" class="inline select2_jump">
                                <option value="All Locations" selected="selected">All Locations</option>
                                <optgroup label="Southwest Region">
                                  <option value="Braintree">Braintree</option>
                                  <option value="Braintree">Lexington</option>
                                  <option value="Braintree">Milford</option>
                                  <option value="Braintree">Stanford</option>
                                  <option value="Braintree">Tournay</option>
                                  <option value="Braintree">Jackson</option>
                                </optgroup>
                              </select>
                              <div id="report_daterange" class="report_jump_menu inline">
                                <i class="icon-calendar"></i> 
                                  <span></span>
                              </div>
                            </h3>
                          </div>
                          <!--<div class="span3">
                            <div class="btn-group pull-right more_button_padding">
                              <label class="inline">Data View: </label>
                              <button class="glow left active">Standard</button>
                              <button class="glow middle">Day of the Week</button>
                              <button class="glow right">Day Part</button>
                            </div>
                          </div>
                          -->
                        </div>
                        
                                                
                        <div class="padded">
                        
                        
                        
                        <div class="row-fluid report_main_wrapper">
                        
                        <div class="span9 report_large_col">

                        <h4 class="more_bottom_margin">My Locations: </h4>
                        <img src="img/custom/locations-map.jpg">
                        <hr>
                        <form class="navbar-search flush_top_margin pull-right">
                          <input type="text" class="search-query search-envysion" placeholder="Find location...">
                          <button type="submit" class="btn"><i class="icon-search"></i></button>
                        </form>
                        <h4 class="more_bottom_margin">Scores by Location: </h4>
                        
                        <table class="table table-hover block_table">
                            <thead>
                              <tr>
                                <th class="sortable">Location</th>
                                <th class="sortable">Store Number</th>
                                <th class="sortable">Overall Score </th>
                                <th class="sortable">Cashier </th>
                                <th class="sortable">Expeditor </th>
                                <th class="sortable">Quality Control </th>
                                <th class=""></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php for($i=1;$i<=8;$i++){?>
                              <tr>
                                <td><a href="client-report-locations-detail.php"><?php
                                  switch($i){
                                    case 1: echo 'Braintree'; break;
                                    case 2: echo 'Remmy'; break;
                                    case 3: echo 'Stanford'; break;
                                    case 4: echo 'Portage'; break;
                                    case 5: echo 'Lexington'; break;
                                    case 6: echo 'Milford'; break;
                                    case 7: echo 'Winona'; break;
                                    case 8: echo 'Tippe Point'; break;
                                  }
                                ?></a></td>
                                <td>#10<?php echo rand(10,99); ?></td>
                                <td>98</td>
                                <td>98</td>
                                <td>98</td>
                                <td>98</td>
                                <td><a href="#">Details</a></td>
                              </tr>
                              <?php } ?>
                            </tbody>
                        </table>
                        
                        
                        </div>
                        <div class="span3 report_small_col">

                          <h4 class="data_table_header">
                          <a href="#" class="pull-right header_link">View All &raquo;</a>
                          <i class="icon icon-group"></i> Top Employees
                          </h4>
                          <table class="table table-condensed">

                          <tbody>
                            <tr>
                              <td>1</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td><a href="#">Mark Otto</a></td>
                              <td>98</td>
                            </tr>
                          </tbody>
                        </table>
                          
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