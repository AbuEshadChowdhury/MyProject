


       
         <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Dashboard <small></small>
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-12">
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-4 col-md-6">

                     
                                   
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $t_meal['meal'];  ?> Units</div>
                                        <div><h3>Your Meal<h3></div>
                                    </div>
                      <!----           <?php  $a= $totalmeal['meal']; ?> -->



            <!--     <?php echo var_dump($t_meal); ?>  -->
                               
                
                          
                    </div>
                    <div class="col-lg-4 col-md-6">
                     
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $t_bazer['amount'];  ?>Tk</div>
                                        <div><h3>Your Bazer<h3></div>
                                    </div>
                           
                    </div>

             


                    





                    <div class="col-lg-4 col-md-6">
                        
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                        <?php 

                                          $num = $total['amount']/ $total1['meal'] ; 
                                          $formattedNum = number_format($num, 2);

                                          echo $formattedNum;   

                                         ?>


                                         Tk


                                        </div>
                                          <div><h3>Meal Rate<h3></div>
                                    </div>
                             
                    </div>



                      <!--     <?php echo var_dump($total); ?>  -->




                </div>
                <!-- /.row -->

               
                <!-- /.row -->

                <div class="row">
                    
                    
                    <div class="col-lg-5">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i>Bazer Schedule</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
  
                                               
                                                <th>Date</th>
  
                                            </tr>
                                        </thead>
                                        <tbody>
                     <?php

                          $counter =1;
                          foreach($sche as $sc){
                          
                         

                    ?>               
                                            <tr>
                                               
                                                <td><?php echo $sc['date'];  ?> </td>
                                            
                                                
                                            </tr>
                    <?php
                           $counter++;
                           }
                           
                    ?>            
                                        
                                           
                                        </tbody>
                                    </table>
                                </div>
                              
                            </div>
                        </div>


                    </div>

                    <div class="col-lg-7">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transaction Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive" >
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead >
                                            <tr >
                                                <th >Slip No.#</th>
                                                <th>Date</th>
                                                <th>Amount (Tk)</th>
                                                <th>Payment Status</th>
                                            </tr>
                                        </thead>
                                        <tbody align="center">
                                          


                     <?php

                          $counter =1;
                          foreach($app_payment as $p){
                          
                         

                    ?>  
                                            <tr>
                                                <td><?php echo $p['slip_no'];  ?></td>
                                                <td><?php echo $p['date'];  ?></td>
                                                <td><?php echo $p['amount'];  ?></td>
                                                <td><?php if( $p['approve']==1) echo "Confirm"; else echo "Deny";  ?></td>
                                        
                                            </tr>
                                            </tr>
                  <?php
                           $counter++;
                           }
                           
                    ?>                     

                                        </tbody>
                                    </table>
                                <!--    <?php var_dump($app_payment) ?>  -->
                                </div>
                                
                            </div>
                        </div>

                        
                    </div>                    
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        </div>
        <!-- /#page-wrapper -->

 
    <!-- /#wrapper -->

    <!-- jQuery -->
