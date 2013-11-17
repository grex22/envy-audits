<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <a class="btn-flat large primary pull-right mt10" href="#" data-toggle="modal">
                        <i class="icon-arrow-right"></i> Begin Scoring
                      </a>
                      <h3>
                        Auditor Dashboard
                      </h3>
                      <p><em>Not Sure Where to Start?</em> Simply click "Begin Scoring" to be taken to the highest-priority samples, in order</p>
                    </div>
                </div>
            </div>
           
            
            <div id="content_wrapper">
            
              <div class="row-fluid ui-elements">
                <div class="span12">
                
                  <div class="row-fluid widget no_bottom_padding">                    
                    <h4 class="widget_title no_bottom_margin no_arrow">
                        Datasets 
                            <div id="report_daterange" class="report_jump_menu inline">
                              <i class="icon-calendar"></i> 
                              <span>Nov 7, 2013 - Nov 13, 2013</span>
                            </div>
                    </h4>
                    
                    <div class="row-fluid audit_table">
                      <div class="span4">
                        <div class="navbar report_navbar_compact thirds no_bottom_margin" id="report_navbar">
                      <div class="navbar-inner">
                        <div class="row-fluid">
                          <div class="report_links_wrap span12">
                            <ul class="nav">
                                <li>
                                  <a href="#" class="active">
                                    <i class="icon-calendar"></i> Dates
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="icon-pushpin"></i> Locations
                                  </a>
                                </li>
                                <li>
                                  <a href="#">
                                    <i class="icon-th-large"></i> Datasets
                                  </a>
                                </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
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
                                    for($i = 7; $i <= 13; $i++){?><tr<?php if($i == 9) echo " class='active'"; ?>>
                                      <td width="50%">Nov <?php echo $i; ?>, 2013</td>
                                      <td width="50%" class="align-center"><div class="rel_wrap">21% <em>(22/133)</em></div></td>
                                  </tr><?php } ?>
                                  
                              </tbody>
                          </table>
                        </div>
                      </div>
                      <div class="span8">
                        <div class="audit-table-right-header">
                          <h4 class="data_table_header"><em>Date:</em> Nov 9, 2013
                            <div class="filter_links pull-right">
                              Show: &nbsp; <a href="#" class="active">Not Scored (21)</a> | <a href="#">Scored (49)</a> | <a href="#">All (62)</a>
                            </div>
                          </h4>
                            
                        </div>
                        <table class="table table-hover no_bottom_margin">
                              <thead>
                                  <tr>
                                      <th width="35%" class="sortable">
                                          Name
                                      </th>
                                      <th width="25%" class=" sortable">
                                          Metric
                                      </th>
                                      <th width="20%" class="align-center sortable">
                                          Complete
                                      </th>

                                      <th width="20%" class=" sortable">
                                          Date 
                                      </th>
                                  </tr>
                              </thead>
                          </table>
                          <div class="audit-table-wrap">
                              <table class="table table-hover audit-right-table">
                                <tbody>
                                    <?php
                                      for($i = 1; $i <= 19; $i++){?><tr>
                                        <td width="35%">Cashier Transactions</td>
                                        <td width="25%">Cashier Confirmation</td>
                                        <td width="20%" class="align-center">21% <em>(22/133)</em></td>
                                        <td width="19%"><div class="rel_wrap">Nov 9, 2013</div></td>
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