  <div id="wrapper">


         <?php $this->load->view($view_name);?>
        <div id="page-wrapper" >

            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row" style="padding:10px">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Add Meal
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

                       
                            
                            
                          <div class="form-group"  style="padding:15px">
                               <label for="inputEmail3" class="col-sm-5 control-label" > <a href="<?php echo site_url(); ?>/admin/add_meal_2">
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

           <!--  <?php echo var_dump($name_id); ?> --> 

  

             
        <!-- /#page-wrapper -->

       </div>
 </div>
    <!-- /#wrapper -->
