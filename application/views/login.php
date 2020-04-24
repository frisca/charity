<!DOCTYPE html>
<html>
<head>
	<title>Charity</title>
	<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" id="bootstrap-css">
	<script src="<?php echo base_url('assets/js/jquery-1.10.2.min.js');?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
	<!-- Include the above in your HEAD tag -->

	<link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css');?>">
</head>
<body>
	<div class="main">
    	<div class="container">
			<center>
				<div class="middle">
			      	<div id="login">
				        <form action="<?php echo base_url('login/processLogin');?>" method="post">
                            <?php if($this->session->flashdata('success') != ""){ ?>
	                        <div>
	                            <h5 style="float: left;margin-bottom: 20px;color: green;"><?php echo $this->session->flashdata('success');?></h5>
	                        </div>  
	                        <?php }else if($this->session->flashdata('error') != ""){ ?>
	                        <div>
	                            <h5 style="float: left;margin-bottom: 20px;color: red;"><?php echo $this->session->flashdata('error');?></h5>
	                        </div>  
	                        <?php } ?>
                            <div class="clearfix"></div>
				          	<fieldset class="clearfix">
					            <p ><span class="fa fa-user"></span><input type="text" name="username" Placeholder="Username" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
					            <p><span class="fa fa-lock"></span><input type="password" name="password" Placeholder="Password" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
			             		<div>
	                                <span style="float: right;"><input type="submit" value="Sign In"></span>
	                            </div>
				          	</fieldset>
							<div class="clearfix"></div>
				        </form>
			        	<div class="clearfix"></div>
			      	</div> <!-- end login -->
			      	<div class="logo">
			      		<img src="<?php echo base_url('assets/images/logo-light-icon.png');?>" alt="homepage" class="light-logo">
			      		<span>  
                         	<img src="<?php echo base_url('assets/images/logo-light-text.png');?>" class="light-logo" alt="homepage">
                        </span>
			        	<div class="clearfix"></div>
			      	</div>
			    </div>
			</center>
		</div>
	</div>
</body>
</html>