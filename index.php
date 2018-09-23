<!DOCTYPE html>
<html lang="en">
<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="./jquery.validate.min.js"> </script>
	<script src="./validate.js"></script>
	<script src="./jquery-ui.min.js"></script>
	<style type="text/css">
	.error{color:red;}
</style>
</head>
<body>

	<div class="container col-sm-6 col-sm-offset-3">
		<h2 class="text-center">Forms</h2>
		<form class="form-horizontal" id="formid" method="post">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email">Name:</label>
				<div class="col-sm-10">
					<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd">Mobile No:</label>
				<div class="col-sm-10">          
					<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-3 col-sm-6 text-center">
					<button type="submit" class="btn btn-success btn-md">Submit</button>
				</div>
			</div>
		</form>
	</div>

</body>
<script src="./jquery.validate.min.js"> </script>
<script src="./validate.js"></script>
<script src="./jquery-ui.min.js"></script>
<script type="text/javascript">
	
	$(function(){
		$('#formid').validate({
			rules:{
				email:{required:true,Email1:true},
				pwd:{required:true}
			},
			messages:{
				email:{required:"Email Required"},
				pwd:{required:"Password Required"}
			}
		})

	});
</script>
</html>
