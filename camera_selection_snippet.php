
                  
                    
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
                              <ul class="thumbnails camera_thumbnail_list no_bottom_margin">
                              <?php for($i=1; $i<=$randcam; $i++){ ?>
                                <li class="span2">
                                  <input class="camera_select" type="checkbox">
                                  <a href="#" class="thumbnail">
                                    <img src="http://placehold.it/100x75" alt="">
                                  </a>
                                  <div class="camera_thumbnail_caption">Register <?php echo $i; ?></div>
                                </li>
                              <?php $camid++; } ?>
                              </ul>
                            </div>
                          </div>
                        </div>
                      <?php } ?>
                      </div>
                    
                    