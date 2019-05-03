
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Individual Expense
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
                                      <td>Total Meal</td>
                                      <td><?php echo $name1['meal'];  ?></td>
    
                                   </tr>
                                  <tr>
                                     <td>Meal Expense</td>
                                     <td><?php echo number_format(($name6['amount']/$name5['meal'])*$name1['meal'],2);  ?></td>
        
                                  </tr>
                                  <tr>
                                    <td>Utility Bill</td>
                                    <td><?php echo $name2['utility'];  ?> Taka</td>
        
                                  </tr>
                                  <tr>
                                    <td>Others Bill</td>
                                    <td><?php echo $name3['others'];  ?> Taka</td>
        
                                 </tr>
                                 <tr>
                                   <td>Total Deposit Money</td>
                                   <td><?php echo $app['amount']?> Taka</td>
        
                                 </tr>
    
    
                                 <tr>
                                   <td>Total Amount</td>
                                   <td><?php echo number_format($app['amount'] -(($name6['amount']/$name5['meal'])*$name1['meal']+$name2['utility']+$name3['others']),2); ?></td>
        
                                 </tr>

                                </thead>>
                            </table>
                        </div>
                    </div>
                  </div>
               </div>
          </div>  

        <!-- /#page-wrapper -->
