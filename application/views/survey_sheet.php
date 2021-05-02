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
	form{margin: 0 auto;
		width: 500px;
		height: 380px;
		border: 3px solid black;
		padding-top: 30px;
		padding-left: 20px;
		font-family: 'helvetica';
	}
		label{
			display: block;
			margin-left: 20px;
			margin-bottom: 20px;
		}
		form .name{
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
		input[type='submit']{
			width: 200px;
			margin-left: 240px;
			font-family: 'helvetica';
		}
	</style>
</head>
<body>

<div id="container">
	<h1>Welcome to Survey Form!</h1>

	<form action="surveys/process_form" method="post">
		<label for="name">Your Name
				<input type="text" name="name" class="name">
			</label>
			<label for="location">Dojo Location
				<select name="location" id="">
					<option value=""></option>
					<option value="USA">USA</option>
					<option value="Philippines">Philippines</option>
					<option value="japan">japan</option>
					<option value="London">London</option>
				</select>
			</label>
			<label for="language">Favourite language
				<select name="language" class="fav_lang">
					<option value=""></option>
					<option value="Javascript">Javascript</option>
					<option value="PHP">PHP</option>
					<option value="Java">Java</option>
					<option value="Swift">Swift</option>
				</select>
			</label>
			<label for="comment">comment (optional)
				<textarea name="comment" id="" value="comment" cols="30" rows="10">
				</textarea>
			</label>
			<input type="submit" name="submit" value="submit">
	</form>
</div>

</body>
</html>