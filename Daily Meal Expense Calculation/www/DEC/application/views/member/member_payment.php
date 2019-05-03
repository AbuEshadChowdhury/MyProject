

        <div id="page-wrapper">


            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           Add Payment
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

                <!-- Main jumbotron for a primary marketing message or call to action -->
                
            </div>
            <div class="row">
                    <div class="col-lg-6">

                        <form class="form-horizontal" method="post" action="<?php echo site_url('member/payment_data');?>">
                         <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Slip No.</label>
                               <div class="col-sm-3">
                                   <input type="text" name="slip_no" class="form-control" id="inputEmail3">
                              </div>
                          </div> 


                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Date</label>
                               <div class="col-sm-3">
                                   <input type="text" name="date" class="form-control" id="inputEmail3">
                              </div>
                          </div> 

                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Id</label>
                               <div class="col-sm-3">
                                   <input type="text" name="p_id" class="form-control" id="inputEmail3">
                              </div>
                          </div> 

                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Amount</label>
                               <div class="col-sm-3">
                                   <input type="text" name="amount" class="form-control" id="inputEmail3">
                              </div>
                          </div> 
              
                  
                         <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Add</button>
                            
                                <button type="reset" class="btn btn-success">Reset</button>
                             </div>

                           </div>

                          

                          

                         
                          

                        
                          

  
                      </form>
                    </div>
 
                </div>
            <!-- /.container-fluid -->
             

        </div>
        <!-- /#page-wrapper -->

