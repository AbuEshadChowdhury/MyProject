  <div class="container">
      
         <?php $this->load->view($view_name);?>
     

    <h1>Member Details</h1>
      <div class="row">
                   <?php

                          $counter =1;
                          foreach($m_details as $m){
                          
                         

              ?>
        <div class="col-md-4">
          <div class="panel panel-default">



            <div class="panel-heading">
             <h1 class="panel-title">
               Member-<?php echo $counter;  ?>
             </h1>
            </div>




            <div class="panel-body">
             <h5>Name : <?php echo $m['name'];  ?></h5>
              <h5>Home Address :<?php echo $m['home_address'];  ?></h5>
               <h5>Email :<?php echo $m['email'];  ?></h5>
                
            </div>





           <!-- <?php echo var_dump($m_details); ?> -->
          </div>
        </div>
                <?php
                           $counter++;
                  }
                 ?>

      </div>

    




