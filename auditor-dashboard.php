<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <!--<a class="btn-flat large primary pull-right mt10" href="#" data-toggle="modal">
                        <i class="icon-arrow-right"></i> Begin Scoring
                      </a>-->
                      <h3>
                        Auditor Dashboard
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
                        Reporting Period:  
                            <div id="audit_dash_daterange" class="report_jump_menu inline">
                              <i class="icon-calendar"></i> 
                              <span>Nov 7, 2013 - Nov 13, 2013</span>
                            </div>
                    </h4>
                    
                    <div class="row-fluid audit_table">
                      <div class="span4 offset0">
                        <div class="navbar report_navbar_compact thirds no_bottom_margin" id="report_navbar">
                          <div class="navbar-inner">
                            <div class="row-fluid">
                              <div class="report_links_wrap span12">
                                <ul class="nav" id="audit_view_tabs">
                                    <li>
                                      <a href="#" data-target="#dates_view" class="active">
                                        <i class="icon-calendar"></i> Dates
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#" data-target="#locations_view">
                                        <i class="icon-pushpin"></i> Locations
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#" data-target="#datasets_view">
                                        <i class="icon-th-large"></i> Datasets
                                      </a>
                                    </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div id="dates_view" class="audit_view_tab">
                          <table class="table no_bottom_margin">
                            <thead>
                                <tr>
                                    <th class=" sortable" width="50%">
                                        Date
                                    </th>
                                    <th width="50%" class="align-center sortable">
                                        Complete
                                    </th>
                                </tr>
                            </thead>
                          </table>
                          <div class="audit-table-wrap">
                            <table class="table table-hover audit-left-table">
                                    
                                <tbody>
                                    <?php
                                      for($i = 7; $i <= 13; $i++){?><tr class="audit-left-table-link" data-link-id="<?php echo $i; ?>">
                                        <td width="50%">Nov <?php echo $i; ?>, 2013</td>
                                        <td width="50%" class="align-center"><div class="rel_wrap">21% <em>(22/133)</em></div></td>
                                    </tr><?php } ?>
                                    
                                </tbody>
                            </table>
                          </div>
                        </div>
                        
                        
                        <div id="locations_view" class="audit_view_tab" style="display:none">
                          <table class="table no_bottom_margin">
                            <thead>
                                <tr>
                                    <th class=" sortable" width="50%">
                                        Location
                                    </th>
                                    <th width="50%" class="align-center sortable">
                                        Complete
                                    </th>
                                </tr>
                            </thead>
                          </table>
                          <div class="audit-table-wrap">
                            <table class="table table-hover audit-left-table">
                                    
                                <tbody>
                                    <?php
                                      for($i = 1; $i <= 6; $i++){?><tr class="audit-left-table-link" data-link-id="<?php echo $i; ?>">
                                        <td width="50%"><?php 
                                        
                                        switch($i):
                                          case (1): echo "Braintree"; break;
                                          case (2): echo "Lexington"; break;
                                          case (3): echo "Milford"; break;
                                          case (4): echo "Indian Wells"; break;
                                          case (5): echo "Crawford"; break;
                                          case (6): echo "Yorktown"; break;
                                        endswitch;

                                        ?></td>
                                        <td width="50%" class="align-center"><div class="rel_wrap">21% <em>(22/133)</em></div></td>
                                    </tr><?php } ?>
                                    
                                </tbody>
                            </table>
                          </div>
                        </div>
                        
                        
                        <div id="datasets_view" class="audit_view_tab" style="display:none">
                          <table class="table no_bottom_margin">
                            <thead>
                                <tr>
                                    <th class=" sortable" width="50%">
                                        Dataset
                                    </th>
                                    <th width="50%" class="align-center sortable">
                                        Complete
                                    </th>
                                </tr>
                            </thead>
                          </table>
                          <div class="audit-table-wrap">
                            <table class="table table-hover audit-left-table">
                                    
                                <tbody>
                                    <?php
                                      for($i = 1; $i <= 5; $i++){?><tr class="audit-left-table-link" data-link-id="<?php echo $i; ?>">
                                        <td width="50%"><?php 
                                        
                                        switch($i):
                                          case (1): echo "Cashier Transactions"; break;
                                          case (2): echo "Expeditor"; break;
                                          case (3): echo "Quality Control"; break;
                                          case (4): echo "Manager"; break;
                                          case (5): echo "Up-Sells"; break;
                                        endswitch;

                                        ?></td>
                                        <td width="50%" class="align-center"><div class="rel_wrap">21% <em>(22/133)</em></div></td>
                                    </tr><?php } ?>
                                    
                                </tbody>
                            </table>
                          </div>
                        </div>
                        
                        
                      </div>
                      <div class="span8 offset0">
                        <div id="loading_overlay">
                          <img src="img/custom/ajax-loader.gif">
                        </div>
                        <div id="empty_result">
                          <div class="audit-table-right-header">
                            <h4 class="data_table_header">
                              <div class="filter_links pull-right">
                              </div>
                            </h4>
                              
                          </div>
                          <table class="table table-hover no_bottom_margin">
                                <thead>
                                    <tr>
                                        <th width="100%">&nbsp;</th>

                                    </tr>
                                </thead>
                            </table>
                            <div id="empty_message">
                              Please make a selection from the left column to view available samples.
                            </div>
                        </div>
                        <div id="results">
                          <div class="audit-table-right-header">
                            <h4 class="data_table_header">Viewing &raquo; <span class="data_table_header_title">Date: Nov 9, 2013</span>
                              <div class="filter_links pull-right">
                                Show: &nbsp; <a href="#" class="active">Not Scored (21)</a> | <a href="#">Scored (49)</a> | <a href="#">All (62)</a>
                              </div>
                            </h4>
                              
                          </div>
                          <table class="table table-hover no_bottom_margin">
                                <thead>
                                    <tr>
                                        <th width="30%" class="sortable">
                                            Name
                                        </th>
                                        <th width="30%" class=" sortable">
                                            Metric
                                        </th>
                                        <th width="20%">Location</th>
                                        <th width="20%" class="align-center sortable">
                                            Complete
                                        </th>

                                    </tr>
                                </thead>
                            </table>
                            <div class="audit-table-wrap">
                                <table class="table table-hover audit-right-table">
                                  <tbody>
                                      <?php
                                        for($i = 1; $i <= 19; $i++){?><tr>
                                          <td width="30%">Cashier Transactions</td>
                                          <td width="30%">Cashier Confirmation</td>
                                          <td width="20%">0208 - Braintree</td>
                                          <td width="19%" class="align-center"><div class="rel_wrap">21% <em>(22/133)</em></div></td>
                                      </tr><?php } ?>
                                      
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
    
    <?php include ('inc/footer.php'); ?>