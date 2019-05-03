  <div id="wrapper">


         <?php $this->load->view($view_name);?>


        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                             Add new Member
                        </h1>
         
                    </div>
                </div>
                <!-- /.row -->

                <div class="row">
                    <div class="col-lg-6">

                        <form class="form-horizontal" method="post" action="<?php echo site_url('admin/save');?>">


                           <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                               <div class="col-sm-10">
                                   <input type="text" name="name" class="form-control" id="inputEmail3">
                              </div>
                          </div> 

                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">University Name</label>
                               <div class="col-sm-10">
                                     <input type="text" name="university" class="form-control" id="inputEmail3">
                              </div>
                          </div>
                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Home_address</label>
                               <div class="col-sm-10">
                                   <input type="text" name="home_address" class="form-control" id="inputEmail3">
                              </div>
                          </div> 
                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Mobile Number</label>
                               <div class="col-sm-10">
                                   <input type="text" name="mobile_number" class="form-control" id="inputEmail3">
                              </div>
                          </div> 
                          <div class="form-group">
                             <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                               <div class="col-sm-10">
                                   <input type="email" name="email" class="form-control" id="inputEmail3">
                              </div>
                          </div> 
                        
                           <div class="form-group">
                             <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-success">Save Member</button>
                            
                                <button type="reset" class="btn btn-success">Reset</button>
                             </div>

                           </div>


  
                      </form>
                    </div>
 
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
