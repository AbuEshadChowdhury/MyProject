
       <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                        View Notices
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-10">
                       
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th class="col-lg-2">Date</th>
                                        <th class="col-lg-2">Subject</th>
                                        <th  class="col-lg-6">Description</th>
                                       

                                    </tr>
                                </thead>
                                <tbody>

                 <?php

                          $counter =1;
                          foreach($notice as $n){
                          
                         

                    ?>
                                    <tr>
                                        <td><?php echo $n['date'];  ?></td>
                                        <td><?php echo $n['subject'];  ?></td>
                                        <td><?php echo $n['description'];  ?></td>
                                       
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

        <!-- /#page-wrapper -->
