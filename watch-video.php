<?php include ('inc/head.php'); ?>

            <div id="main_header_wrapper">
                <div class="row-fluid main_header">
                    <div class="span12">
                      <h3>
                        Watch Video
                      </h3>
                    </div>
                </div>
            </div>
            
            <div id="content_wrapper">
              
              <div class="row-fluid ui-elements">
                <a href="#change_view_panel" class="big_orange_button span3" id="change_view_button" data-toggle="modal"><i class="icon-refresh"></i> Change Cameras</a>
              </div>
              
              <div class="row-fluid ui-elements modal big_modal hide fade" id="change_view_panel">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h3><i class="icon-facetime-video"></i> Change Cameras</h3>
                </div>
                <div class="row-fluid ui-elements padded">
                <div class="span8" id="change_view_left_col">
                  
                  <h4><strong>Step 1:</strong> Select Camera(s) to View</h4>
                  
                  
                  <ul class="nav nav-tabs big-tabs">
                    <li><a href="#tab1" data-toggle="tab"><i class="icon-time"></i> Recent Selections</a></li>
                    <li><a href="#tab2" data-toggle="tab"><i class="icon-star"></i> Favorites</a></li>
                    <li class="active"><a href="#tab3" data-toggle="tab"><i class="icon-pushpin"></i> All Locations</a></li>
                  </ul>
                  <div class="navbar no_bottom_margin">
                    <div class="navbar-inner">
                      <div class="pull-right">
                        <span class="number_callout">12</span> Cameras Selected
                      </div>
                      <form class="navbar-form">
                        <input type="text" class="span4" placeholder="Filter...">
                        <button type="submit" class="btn">Go</button>
                      </form>
                    </div>
                  </div>
                  <div class="tab-content" id="change_view_camera_picker">
                  <div class="tab-pane scrollbar" id="tab1">
                    <?php $camid=1; ?>
                    <?php include('camera_selection_snippet.php'); ?>
                  </div>
                  <div class="tab-pane scrollbar" id="tab2">
                    <?php include('camera_selection_snippet.php'); ?>
                  </div>
                  <div class="tab-pane active" id="tab3">
                    <div class="span3 scrollbar padded" id="report_nav">
                      

                                  <ul>
                                    <li class="active">
                                      <a href="#">
                                      All Locations
                                      </a>
                                    </li>
                                    <li>
                                      <a href="#" data-toggle="collapse" class="collapsed has_submenu" data-target="#demo">
                                      Southwest Stores
                                      </a>
                                      <div id="demo" class="collapse">
                                      <ul>
                                        <li><a href="#">Braintree</a></li>
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
                    <div class="span9 scrollbar noleftmargin_s9">
                    <?php include('camera_selection_snippet.php'); ?>
                    </div>
                  </div>
                  </div>
                  <div class="navbar no_bottom_margin visual_footer">
                    <div class="navbar-inner">
                    </div>
                  </div>
                </div>
                <div class="span4" id="change_view_right_col">
                  <h4><strong>Step 2:</strong> Live or Recorded?</h4>
                  <form action="#" method="post">
                    <fieldset id="video_mode">
                    <label class="radio">
                      <input type="radio" name="video_mode" value="live" checked="checked">
                      <span>Live Video</span>
                    </label>
                    <label class="radio">
                      <input type="radio" name="video_mode" value="recorded">
                      <span>Recorded Video</span>
                    </label>
                      <div id="recorded_parameters">
                      <ul class="nav nav-tabs" id="myTab">
                        <li class="active"><a href="#date_search" data-toggle="tab"><i class="icon-calendar"></i> Date Search</a></li>
                        <li><a href="#receipt_search" data-toggle="tab"><i class="icon-list"></i> Receipt Search</a></li>
                      </ul>
                      <div class="tab-content">
                      <div class="tab-pane active" id="date_search">
                        <div class="row-fluid">
                          <div class="span4">
                            <label class="select">
                            Date<br>
                            <div class="input-prepend">
                              <span class="add-on"><i class="icon-calendar"></i></span>
                              <input type="text" id="recorded_daterange" value="" class="input-mini">
                            </div>
                            </label>
                          </div>
                          <div class="span4">
                            <label class="select no_bottom_margin">
                            Start Time
                            </label>
                            <div class="recorded_starttime">
                              <div class="input-prepend bootstrap-timepicker">
                                  <span class="add-on"><i class="icon-time"></i></span>
                                  <input id="timepicker1" type="text" class="input-mini">
                              </div>
                            </div>
                          </div>
                          <div class="span4">
                            <label class="select no_bottom_margin">
                            Duration
                            </label>
                            <select class="input-small">
                              <option value="">2 min</option>
                              <option value="" selected>5 min</option>
                              <option value="">10 min</option>
                              <option value="">30 min</option>
                              <option value="">1 hour</option>
                              <option value="">2 hours</option>
                              <option value="">6 hours</option>
                              <option value="">12 hours</option>
                              <option value="">24 hours</option>
                              <option value="">48 hours</option>
                            </select>
                            
                          </div>
                          </div>
                        
                        </div>
                        <div class="tab-pane" id="receipt_search">
                          <div class="row-fluid">
                            <div class="span4">
                              <label class="select">
                              Date<br>
                              <div class="input-prepend">
                                <span class="add-on"><i class="icon-calendar"></i></span>
                                <input type="text" id="recorded_receipt_daterange" value="" class="input-mini">
                              </div>
                              </label>
                            </div>                            
                            <div class="span6">
                            <label class="input">
                              Receipt Number<br>
                              <input type="text" value="" class="input-small">
                            </label>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                      </div>
                    
                    </fieldset>
                  <h4><strong>Step 3:</strong> Confirm</h4>  
                  <fieldset class="padded">
                    <label class="checkbox">
                      <input type="checkbox" id="save_as_favorite"> <i class="icon-star"></i> Save selected cameras as Favorite
                      
                    </label>
                    <div id="favorite_name">
                      <input type="text" class="input-large" name="favorite_name" placeholder="Enter a Name for this Favorite">
                    </div>
                  </fieldset>
                  <input type="submit" class="change_view_submit live" value="Done! Watch Video">
                  <a href="#" data-dismiss="modal">Cancel, back to current view</a>

                  </form>
                </div>
              </div>
              </div>
              <div class="row-fluid ui-elements">
                <div class="span9" id="video_wrapper">
                  <div class="row-fluid widget">
                    <h4 class="widget_title">
                      <div class="btn-group pull-right">
                        <button class="glow left"><i class="icon-desktop"></i> Focus Mode</button>
                        <button class="glow right active"><i class="icon-th"></i> Grid Mode</button>
                      </div>
                      <i class="icon-th-large"></i> Braintree, All Cameras
                    </h4>
                    
                    <div class="row-fluid padded">
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                    </div>
                    <div class="row-fluid padded">
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                      <div class="span3 video_placeholder video_box ratio4_3"></div>
                    </div>
                  </div>
                    
                </div>
                <div class="span3">
                  
                  <div class="row-fluid widget">
                  
                    <h4 class="widget_title">Transactions</h4>
                    
                    <div class="sample_receipt taller">
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