  <div id="wrapper">


         <?php $this->load->view($view_name);?>


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
                    <div class="col-lg-3 col-md-6">
                      
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total1['meal'];  ?> Units</div>
                                        <div>Total Meal</div>
                                    </div>
                  
                    </div>
                    <div class="col-lg-3 col-md-6">
                        
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total['amount'];  ?> Tk</div>
                                        <div>Total Bazer</div>
                                    </div>
                      
                    
                       
                    </div>
                    <div class="col-lg-3 col-md-6">
                       
                           
                                    <div class="col-xs-9 text-right">
                                        <div class="huge">
                                            <?php 

                                          $num = $total['amount']/ $total1['meal'] ; 
                                          $formattedNum = number_format($num, 2);

                                          echo $formattedNum;   

                                         ?>

                                        </div>
                                        <div>Meal Rate</div>
                                    </div>
                          
                    </div>
                    <div class="col-lg-3 col-md-6">
                       
                      
                                    <div class="col-xs-9 text-right">
                                        <div class="huge"><?php echo $total4['amount']-($total2['utility']+$total3['others']+$total['amount']);
                                           ?> Tk</div>
                                        <div>Net Amount</div>
                                      
                                    </div>
                     </div> 
                </div>
                <!-- /.row -->

               
                <!-- /.row -->

                <div class="row">

                
                    
                    
                    <div class="col-lg-6">
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
                                                <th>Member Name</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                     <?php

                          $counter =1;
                          foreach($sche as $sc){
                          
                         

                    ?> 



                                            <tr>
                                                <td><?php echo $sc['date'];  ?></td>
                                                <td><?php echo $sc['name'];  ?></td>
                                               
                                                
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

                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Transaction Details</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Slip No.#</th>
                                                <th>Date</th>
                                                
                                                <th>Amount (Tk)</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                  <?php

                          $counter =1;
                          foreach($pay as $p){
                          
                         

                    ?>




                                            <tr>
                                                <td><?php echo $p['slip_no'];  ?></td>
                                                <td><?php echo $p['date'];  ?></td>
                                                <td><?php echo $p['amount'];  ?></th></td>
                                                <td><?php if( $p['approve']==1) echo "Confirm"; else echo "Deny";  ?></td>
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
                </div>
                <!-- /.row -->

            <!--    <?php var_dump($pay)?>  --->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

