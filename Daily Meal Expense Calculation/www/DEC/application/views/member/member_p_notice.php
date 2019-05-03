

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Post a Notice (Member)
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->
                 <div class="row">
                    <div class="col-lg-6">

                        <form role="form" method="post" action="<?php echo site_url('member/m_notice_data');?>">
                           <div class="form-group">
                                <label>id</label>
                                <input type="text" name="m_n_id" class="form-control" id="inputEmail3">
                               
                            </div>
                           <div class="form-group">
                                <label>Date</label>
                                <input type="text" name="date" class="form-control" id="inputEmail3">
                               
                            </div>

                            <div class="form-group">
                                <label>Subject</label>
                                <input type="text" name="subject" class="form-control" id="inputEmail3">
                               
                            </div>
                            



                           

                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="description" rows="6"></textarea>
                            </div>



                            <button type="submit" class="btn btn-default">Post</button>
                            <button type="cancel" class="btn btn-default">cancel</button>

                        </form>

                    </div>
 
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    
