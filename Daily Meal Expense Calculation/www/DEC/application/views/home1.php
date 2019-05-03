<div class="container">

    <?php $this->load->view($view_name);?>
     










     <div class="row">
    
      <h1 class="page-header" style="padding:15px">
		<img src="/bootstrap/banner1.png" class="img-thumbnail" alt="Banner Image" width="3000px" height="8000px" />
   </h1>
    
 	 </div>



	<div class="page-header">
  		<h1 align="center">WELCOME TO DAILY EXPENSE CALCULATION</h1>
  
  		<p align="center">A place where you will be able to keep record your room-mate activity on daily basis</p>
 
	</div>










      


      <div class="row marketing">
        <div class="col-lg-6">
          <form class="form-signin">
            <h2 class="form-signin-heading">Admin</h2>
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                 <div class="checkbox">
                   <label>
                    <input type="checkbox" value="remember-me"> Remember me
                   </label>
                </div>
                  
                  <a href="<?php echo site_url(); ?>/admin/dashboard" class="btn btn-primary btn-lg active" role="button">Sign In</a>
         </form>
        </div>

        <div class="col-lg-6">
          <form class="form-signin">
            <h2 class="form-signin-heading">Member</h2>
            <label for="inputName" class="sr-only">Name</label>
            <input type="text" id="inputName" class="form-control" placeholder="Name" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
              <div class="checkbox">
                <label>
                <input type="checkbox" value="remember-me"> Remember me
                </label>
             </div>
               <a href="<?php echo site_url(); ?>/member/dashboard/1" class="btn btn-primary btn-lg active" role="button">Sign In</a>
         </form>
         </div>

         <div>
         <br>
     
