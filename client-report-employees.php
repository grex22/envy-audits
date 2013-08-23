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
                                    <a href="client-report-locations.php">
                                      <i class="icon-pushpin"></i> Locations
                                    </a>
                                  </li>
                                  <li>
                                    <a href="client-report-employees.php" class="active" >
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
                            <h3>Employee:
                              <select id="report_employee" class="inline select2_jump">
                                <option value="client-report-employees.php"  selected="selected">All Employees</option>
                                  <option value="client-report-employees-detail.php">Elizabeth Jones</option>
                                  <option value="client-report-employees-detail.php">Alex Smith</option>
                                  <option value="client-report-employees-detail.php">Peyton Ellis</option>
                                  <option value="client-report-employees-detail.php">Mike Viniaterri</option>
                                  <option value="client-report-employees-detail.php">Faux Nombre</option>
                                  <option value="client-report-employees-detail.php">Alisha Jackson</option>
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
                        
                        <div class="span12">

                        <form class="navbar-search flush_top_margin pull-right">
                          <input type="text" class="search-query search-envysion" placeholder="Find employee...">
                          <button type="submit" class="btn"><i class="icon-search"></i></button>
                        </form>
                        <h4 class="more_bottom_margin">Employees, All Locations: </h4>
                        
                            <table class="table table-hover block_table more_bottom_margin">
                            <thead>
                              <tr>
                                <th class="sortable">Employee Name</th>
                                <th class="sortable">Location</th>
                                <th class="sortable align-center">Employee #</th>
                                <th class="sortable align-center">Combined Score </th>
                                <th class="sortable align-center">Cashier </th>
                                <th class="sortable align-center">Expeditor </th>
                                <th class="sortable align-center">Quality Control </th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php for($i=1;$i<=8;$i++){?>
                              <tr>
                                <td><a href="client-report-employees-detail.php"><?php
                                  switch($i){
                                    case 1: echo 'John Stevens'; break;
                                    case 2: echo 'Alex Branford'; break;
                                    case 3: echo 'Julia Benice'; break;
                                    case 4: echo 'Albert Jackson'; break;
                                    case 5: echo 'Lex Stanley'; break;
                                    case 6: echo 'Jill Yinz'; break;
                                    case 7: echo 'Jane Triplehorn'; break;
                                    case 8: echo 'Taylor Pointe'; break;
                                  }
                                ?></a></td>
                                <td class="">Braintree</td>
                                <td class="align-center">#10<?php echo rand(10,99); ?></td>
                                <?php $score = rand(50,100);?><td class="align-center"><?php echo $score; ?></td>
                                <?php $score = rand(0,100);?><td class="align-center"><?php $score > 50 ? print $score : print " -- "; ?></td>
                                <?php $score = rand(0,100);?><td class="align-center"><?php $score > 50 ? print $score : print " -- "; ?></td>
                                <?php $score = rand(0,100);?><td class="align-center"><?php $score > 50 ? print $score : print " -- "; ?></td>
                              </tr>
                              <?php } ?>
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