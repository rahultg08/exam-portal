<?php include('allhead.php'); ?>
<div class="container">
	<script>
		function validateFormPublicQuery() {
			var email = document.forms[ "update" ][ "email" ].value;
			var query = document.forms[ "update" ][ "queryx" ].value;
			var query = document.forms[ "update" ][ "gname" ].value;
			if ( email == null || email == "" ) {
				alert( "Email Address must be filled out" );
				return false;
			}
			if ( query == null || query == "" ) {
				alert( "Query field must be filled out" );
				return false;
			}
			if ( gname == null || gname == "" ) {
				alert( "Full Name must be filled out" );
				return false;
			}
		}
	</script>
	<div class="row">
		<div class="col-md-8">
			<h3>Feel free to share your suggestions!</h3>
			<form action="" method="POST" name="update" onsubmit="return validateFormPublicQuery()">
				<fieldset>
					<legend>
						<h3 style="padding-top: 25px;"> Post Query Details </h3>
					</legend>
					<div class="control-group form-group">
						<div class="controls">
							<input placeholder="Full Name" type="text" class="form-control" id="gname" name="gnamex" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<input placeholder="Email ID" type="email" class="form-control" id="email" name="email" maxlength="50">
							<p class="help-block"></p>
						</div>
					</div>

					<div class="control-group form-group">
						<div class="controls">
							<label>Query : </label>
							<textarea class="form-control" rows="5" cols="40" id="queryx" name="squeryx" maxlength="200"></textarea>
							<p class="help-block"></p>
						</div>
					</div>
					<div class="form-group">
						<input type="submit" value="Post Query!" name="update" class="btn btn-primary">
						<button type="reset" name="reset" class="btn btn-primary">Clear</button>
				</fieldset>
			</form>
			<?php
			if ( isset( $_POST[ 'update' ] ) ) {
				include( 'database.php' );
				$tempsquery = $_POST[ 'squeryx' ];
				$tempseid = $_POST[ 'email' ];
				$tempgname = $_POST[ 'gnamex' ];
				$sql = "INSERT INTO `query`(`Query`, `Eid`) VALUES ('$tempsquery','$tempseid')";
				$sql2 = "INSERT INTO `guest`(`Gname`, `GuEid`) VALUES ('$tempgname','$tempseid')";
				mysqli_query( $connect, $sql2 );
				if ( mysqli_query( $connect, $sql ) ) {
					echo "<br>
                    <br><br>
                    <div class='alert alert-success fade in'>
                    <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
                    <strong>Success!</strong> Your Query Posted Successfully. Reff. No: " . mysqli_insert_id( $connect ) . "
                    </div>";
				} 
				else {

					echo "<br><Strong>Query Addeding Failure. Try Again!</strong><br> Error Details: " . $sql . "<br>" . mysqli_error( $connect );
				}
				mysqli_close( $connect );
			}
			?>
			</div>
			<div class="col-md-4" style="margin-top:15rem; padding-left:10rem">
			<img src="images/query.gif" style="width:270px; height:270px;" alt="thankful">
		    </div>
		</div>
		<?php include('allfoot.php'); ?>