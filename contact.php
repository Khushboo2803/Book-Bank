<?php
  $title = "Contact";
  require_once "./template/header.php";
?>
    <div class="row">
        <div class="col-md-3"></div>
		<div class="col-md-6 text-center">
			<form class="form-horizontal">
			  	<fieldset>
				    <legend>Contact</legend>
				    <p class="lead">I’d love to hear from you! Send me an email.</p>
				    <div class="form-group">
				      	<label for="inputName" class="col-lg-2 control-label">Name :</label>
				      	<div class="col-lg-10">
						  <label for="inputName" class="col-lg-4 control-label">Khushboo Grover</label>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputEmail" class="col-lg-2 control-label">Email :</label>
				      	<div class="col-lg-10">
						  <label for="inputEmail" class="col-lg-4 control-label">Khushboogrover.mca19.du@gmail.com</label>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<label for="inputContact" class="col-lg-2 control-label">Contact :</label>
				      	<div class="col-lg-10">
						  <label for="inputContact" class="col-lg-2 control-label">9876543210</label>
				      	</div>
				    </div>
				    <div class="form-group">
				      	<div class="col-lg-10 col-lg-offset-2">
				        	<button type="submit" class="btn btn-primary" ><a href='https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSGLdbSKnnWpBTvKZQwrDStgShmXlnrDQKjMKTSRwXGMbSPGvPPrCWWwbBPXgMdvxGZZPplc' style="color:white">Send an email !</a></button>
				      	</div>
				    </div>
			  	</fieldset>
			</form>
		</div>
		<div class="col-md-3"></div>
    </div>
<?php
  require_once "./template/footer.php";
?>