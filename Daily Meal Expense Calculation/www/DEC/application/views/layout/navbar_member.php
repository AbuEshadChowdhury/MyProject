
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
             
                <a class="navbar-brand" href="<?php echo site_url(); ?>/member/dashboard">Member</a>

                


        
                    <a class="navbar-brand" ><i class="fa fa-user"></i><?php echo $name['name'];  ?> </a>

                   
         






            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">


                    <li>
                        <a href="<?php echo site_url(); ?>/member/dashboard"> Dashboard</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/member/payment">Add Payment</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url(); ?>/member/view_notice">View Notices</a>
                    </li>
                   
                    <li>
                        <a href="<?php echo site_url(); ?>/member/expense">Individual Expense</a>
                    </li>
                   
 
              <!--                   
                    <li>
                        <a href="<?php echo site_url(); ?>/member/blank">Blank Page</a>
                    </li>


                <?php echo var_dump($name); ?> -->


                <li class="button">
                   <a href=" <?php echo site_url(); ?>/home/first_page"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    
                   
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            

            <!-- /.navbar-collapse -->
        </nav>
    

