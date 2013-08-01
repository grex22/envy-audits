
                  
                    
                      <div class="accordion" id="accordion2">
                      <?php for($j=1; $j<=12; $j++){ ?>
                        <div class="accordion-group">
                          <div class="accordion-heading">
                          
                            <a class="btn btn-flat btn-flat-small pull-right select_all_cameras"><i class="icon-check"></i> Select All</a>
                            
                            <?php $randcam = rand(3,6); ?>
                            
                            <span class="accordion-toggle" data-toggle="collapse" href="#collapse<?php echo $camid; ?>">
                              <span class="group_name">Braintree (<?php echo $randcam; ?> Cameras)</span> <a class="view_cameras_link" href="#">View Cameras</a>
                            </span>
                          </div>
                          <div id="collapse<?php echo $camid; ?>" class="accordion-body collapse <?php //if($j == 1) echo "in"; ?>">
                            <div class="accordion-inner">
                              <div class="thumbnails camera_thumbnail_list no_bottom_margin">
                              <div class="row-fluid">
                              <?php for($i=0; $i<=$randcam; $i++){ ?>
                                <?php if($i%4 == 0) echo "</div><div class='row-fluid'>"; ?>
                                <div class="span3 thumbs">
                                  <input class="camera_select" type="checkbox">
                                  <a href="#" class="thumbnail">
                                    <img src="holder.js/100x75" alt="">
                                  </a>
                                  <div class="camera_thumbnail_caption">Register <?php echo $i+1; ?></div>
                                </div>
                              <?php $camid++; } ?>
                              </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      </div>
                    
                    