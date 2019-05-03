  <div id="wrapper">


         <?php $this->load->view($view_name);?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="page-header">
                          Add Bazer
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">
                    <div class="col-lg-6">

                        <form class="form-horizontal">


                          

                          <?php

                          $counter =1;
                          foreach($name_id as $nid){
                          
                         

                            ?>

                            <p><?php $nid['id'];  ?></p>
                            
                            
                          <div class="form-group"  style="padding:15px">
                               <label for="inputEmail3" class="col-sm-3 control-label" > <a href="<?php echo site_url(); ?>/admin/add_bazer_2">
                                      <p class="text-left"><?php echo $counter.'. ' .$nid['name'];  ?>.</p></a>
                               </label>
                            
                       
                                 
                       
                            
                              
                          </div>
                          

                           <?php
                           $counter++;
                           }
                           ?>
                     
                          

  
                      </form>
                    </div>
 
                </div>
           </div>
        </div>       
