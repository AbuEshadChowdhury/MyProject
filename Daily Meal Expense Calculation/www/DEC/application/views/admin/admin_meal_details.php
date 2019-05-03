  <div id="wrapper">


         <?php $this->load->view($view_name);?>
        <div id="page-wrapper" >

            <div class="container-fluid" >

                <!-- Page Heading -->
                <div class="row" style="padding:10px">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Meal Details
                        </h1>
                   
                    </div>
                </div>
                <!-- /.row -->
            </div>  
                <div class="row" style="padding:15px">
                    <div class="col-lg-12">
                        
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Meal</th>
                                      

                                    </tr>
                                </thead>
                                <tbody>

                  <?php

                          $counter =1;
                          foreach($all_meal as $m){
                          
                         

                    ?>

                                    <tr>
                                        <td><?php echo $m['date'];  ?></td>
                                        <td><?php echo $m['name'];  ?></td>
                                        <td><?php echo $m['meal'];  ?></td>
                              
                                    </tr>

                    <?php
                           $counter++;
                           }
                           
                    ?>              

                                </tbody>
                            </table>
                        </div>

               <!--         <?php echo var_dump($all_meal) ?>  -->
            

  

               <h2 style="padding:15px">Total Meal = <?php echo $total_meal['meal'];  ?></h2>
        <!-- /#page-wrapper -->

            </div>
       </div>
 </div>
    <!-- /#wrapper -->
