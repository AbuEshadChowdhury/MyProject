  <div id="wrapper">


         <?php $this->load->view($view_name);?>
        
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                          Others Bill
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->

                                <div class="row">
                    <div class="col-lg-6">

                        <form class="form-horizontal" method="post" action="<?php echo site_url('admin/others_data');?>">




                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Id</label>
                               <div class="col-sm-3">
                                   <input type="text" name="o_id" class="form-control" id="inputEmail3">
                              </div>
                          </div> 
              
                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Utility Bill</label>
                               <div class="col-sm-3">
                                   <input type="text" name="utility" class="form-control" id="inputEmail3">
                              </div>
                           </div> 
                            <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Others</label>
                               <div class="col-sm-3">
                                   <input type="text" name="others" class="form-control" id="inputEmail3">
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

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

