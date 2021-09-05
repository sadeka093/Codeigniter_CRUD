edit.php<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Application-Create User</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- js -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>
	<div class="navbar navbar-dark bg-dark">
		<div class="container">
			<a class="navbar-brand" href="#">CRUD Application-Update User</a>
		</div>
	</div>

	<div class="container">
		<form method="post" name="createUser" action="<?php echo base_url().'index.php/user/edit/'.$user['user_id']; ?>">
			<div class="row">


				<div class="form-group">
					<label for="exampleInputEmail1">Name</label>
					<input type="text" class="form-control" name="name" value="<?php echo set_value('name',$user['name']); ?>" placeholder="Enter name">
					<?php //echo form_error('name'); ?>
				</div>

				<div class="form-group">
					<label for="exampleInputEmail1">Email address</label>
					<input type="text" class="form-control" name="email" value="<?php echo set_value('email',$user['email']); ?>" placeholder="Enter email">
				
						<?php //echo form_error('email'); ?>
				</div>

				<button type="submit" class="btn btn-success">Submit</button>
				<a href="" class="btn btn-primary">Cancel</a>

			</div>
		</form>
	</div>
</body>
</html>