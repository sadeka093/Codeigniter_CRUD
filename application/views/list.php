<!DOCTYPE html>
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
			<a class="navbar-brand" href="#">CRUD Application-Users List</a>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<table class="table table-striped">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Edit</th>
    <th>Delete</th>
  </tr>
 <?php if(!empty($users)){
 	foreach($users as $user){
  ?>
  <tr>
  <td><?php echo $user['user_id'] ?></td>
  <td><?php echo $user['name'] ?></td>
  <td><?php echo $user['email'] ?></td>
  <td>
  	<a href="<?php echo base_url().'index.php/user/edit/'.$user['user_id'] ?>" class="btn btn-primary">Edit</a>
  </td>
  <td>
  	<a href="<?php echo base_url().'index.php/user/delete/'.$user['user_id'] ?>" class="btn btn-danger">Delete</a>
  </td>
  </tr>
  
<?php } } else { 
?>
<tr>
	<td>Records Not found </td>
</tr>
<?php } ?>
</table>
			</div>
		</div>
	</div>
</body>
</html>