<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Survey Sheet</title>

	<style type="text/css">
	h1{
		font-family: 'helvetica';
		text-align: center;
	}
	.form_body{
		margin: 0 auto;
		width: 500px;
		height: 350px;
		border: 3px solid black;
		padding-top: 30px;
		padding-left: 20px;
		font-family: 'helvetica';
		margin-top: 20px;
	}
		label{
			display: block;
			margin-left: 40px;
			margin-bottom: 20px;
		}
		.form_body .name{
			width: 232px;
			margin-left: 98px;
		}
		select{
			width: 240px;
			margin-left: 80px;
		}
		.fav_lang{
			width: 240px;
			margin-left: 40px;
		}
		textarea{
			width: 411px;
			margin-top: 10px;
		}
		p{
			display: inline-block;
		}
		.process_name{
			margin-left: 100px;
		}
		.process_location{
			margin-left: 82px;
		}
		.process_language{
			margin-left: 42px;
		}
		.process_comment{
			margin-left: 47px;
		}
		a{
			width: 80px;
			display: block;
			margin-left: 280px;
			margin-top: 20px;
			text-decoration: none;
			border: 1px solid black;
			text-align: center;
			font-family: 'helvetica';
			background-color: lightgray;
		}
	.visits{
		margin: 0 auto;
		width: 500px;
		height: 50px;
		border: 3px solid black;
		padding-top: 10px;
		padding-left: 20px;
		font-family: 'helvetica';
		padding-bottom: 10px;
	}
	
	</style>
</head>
	<body>

	<div id="container">
		<h1>Results to Survey Form!</h1>
	<?php 
		
		$session_data = $this->session->userdata('user_data');
		$name = $this->session->userdata['name'];
		$location = $this->session->userdata['location'];
		$language = $this->session->userdata['language'];
		$comment =$this->session->userdata['comment'];
		$hits = $this->session->userdata('hits');
		if($this->session->set_userdata('hits')){ ?>
			
		<div class="visits">	
				<p>Thank you for submitting the form. You have submitted this form 
				<?= $hits; ?> times now </p>
			</div>
			<?php } ?>
		<div class="form_body">
			<label for="name">Your Name:
				<p class="process_name"><?= $name; ?></p>
			</label>
			<label for="location">Dojo Location:
				<p class="process_location"><?= $location; ?></p>
			</label>
			<label for="language">Favourite language:
				<p class="process_language"><?= $language; ?></p>
			</label>
			<label for="comment">comment (optional)
				<p class="process_comment"><?= $comment; ?></p>
			<a href="<?= base_url(); ?>">Go back</a>
		</div>

		<!-- <div class="form_body">
			<label for="name">Your Name:
				<p class="process_name"><?= 'pat'; ?></p>
			</label>
			<label for="location">Dojo Location:
				<p class="process_location"><?= 'las pinas'; ?></p>
			</label>
			<label for="language">Favourite language:
				<p class="process_language"><?= 'PHP'; ?></p>
			</label>
			<label for="comment">comment (optional)
				<p class="process_comment"><?= 'no comment :-)'; ?></p>
			<a href="<?= base_url(); ?>">Go back</a>
		</div> -->
	</div>

</body>
</html>