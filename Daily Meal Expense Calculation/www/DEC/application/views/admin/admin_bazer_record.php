  <div id="wrapper">


         <?php $this->load->view($view_name);?>
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-10">
                        <h1 class="page-header">
                           Bazer Record
                        </h1>
            
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-10">
                        <h2></h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Amount(Tk)</th>
                                        

                                    </tr>
                                </thead>
                                <tbody>
                  <?php

                          $counter =1;
                          foreach($bazer as $m){
                          
                         

                    ?>




                                    <tr>
                                        <td><?php echo $m['date'];  ?></td>
                                        <td><?php echo $m['name'];  ?></td>
                                        <td><?php echo $m['description'];  ?></td>
                                        <td><?php echo $m['amount'];  ?></td>
                                       
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
