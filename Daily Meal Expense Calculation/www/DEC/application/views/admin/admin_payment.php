   <div id="wrapper">


         <?php $this->load->view($view_name);?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Payment
                        </h1>
                 
                    </div>
                </div>
                <!-- /.row -->

                <!-- Main jumbotron for a primary marketing message or call to action -->
                
      
            <!-- /.container-fluid -->
             <div class="row" style="padding:15px">
                    <div class="col-lg-10">
                        <h2></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Member Name</th>
                                        <th>Amount(Tk)</th>
                                         <th>Confirmation</th>
                                          <th>slip no.</th>
                                        

                                    </tr>
                                </thead>


                     <?php

                          $counter =1;
                          foreach($pay as $p){
                          
                         

                    ?>     
                                <tbody>
                                    <tr>



                                        <td><?php echo $p['date'];  ?></td>
                                        <td><?php echo $p['name'];  ?></td>
                                        <td><?php echo $p['amount'];  ?></td>
                                        <td align="center">
                                            <div class="btn-group" >
                                                 <a class="btn btn-success" href="<?php echo site_url(); ?>/admin/payment_approve">Approve</a>
                                               
                                            </div>
                                        </td>
                                        <td><?php echo $p['slip_no'];  ?></td>
                  
                                       
                                    </tr>
                             <!---       <?php var_dump($pay) ?>  -->
              
                                </tbody>

                       <?php
                           $counter++;
                           }
                           
                    ?>      
                            </table>
                        </div>
                    </div>
                </div>
               </div> 

        </div>
        <!-- /#page-wrapper -->
