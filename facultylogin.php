<?php include('allhead.php'); ?> 
 </nav>
<div class="container">
	<div class="row" style="margin-top:10rem">
		<div class="col-md-6">
			<fieldset>
				<legend>
					<h3 style="padding-top: 25px;"><span class="glyphicon glyphicon-lock"></span>&nbsp;  Faculty Login</h3>
				</legend>
				<form name="facultylogin" action="loginlinkfaculty" method="POST">
					<div class="control-group form-group">
						<div class="controls">
							<label>Faculty ID:</label>
							<input type="text" class="form-control" name="fid" required data-validation-required-message="Please enter your Faculty Id.">
							<p class="help-block"></p>
						</div>
					</div>
					<div class="control-group form-group">
						<div class="controls">
							<label>Passsword:</label>
							<input type="password" class="form-control" name="pass" required data-validation-required-message="Please enter your password.">
							<p class="help-block"></p>
						</div>
					</div>
					<center>
						<button type="submit" class="btn btn-primary" style="margin-right: 1rem;">Login</button>
						<button type="reset" class="btn btn-primary" style="background-color: #E52727; border-color: #D21B1B; margin-left: 1rem;">Reset</button>
					</center>
			</fieldset>
			</form>
		</div>
		<div class="col-md-6" style="padding:4rem 0 0 12rem;">
			<img src="images/login.gif" style="width:400px; height:300px;" alt="login">
        </div>
	</div>
	<?php include('allfoot.php'); ?>