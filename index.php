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
	.error{color:red}
	input:invalid{border:1px solid red !important;}
	input:valid{color:#195411 !important;}
</style>
</head>
<body class="body">

	<div class="container">
		<div class="row col-sm-10 col-sm-offset-1">
			<h2 class="text-center">Forms</h2>
			<form class="form-horizontal" id="formid" method="post">
				<div class="form-group">
					<label class="control-label col-sm-2" for="email">Email:</label>
					<div class="col-sm-6">
						<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Password</label>
					<div class="col-sm-6">          
						<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="nos">Numbers</label>
					<div class="col-sm-6">          
						<input type="number" class="form-control" id="nos" placeholder="Enter numbers" name="nos">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="textname">Text</label>
					<div class="col-sm-6">          
						<input type="text" class="form-control" id="textname" placeholder="Enter password" name="textname">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="date">Date</label>
					<div class="col-sm-6">          
						<input type="date" class="form-control" id="date" placeholder="Enter password" name="date">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="time">Time</label>
					<div class="col-sm-6">          
						<input type="time" class="form-control" id="time" placeholder="Enter password" name="time">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="col">Colors</label>
					<div class="col-sm-6">          
						<input type="color" class="form-control" id="col" placeholder="Enter password" name="col">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="range">Range</label>
					<div class="col-sm-6">          
						<input type="range" class="form-control" id="range" placeholder="Enter password" name="range">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="radio">Radio</label>
					<div class="col-sm-6">          
						<input type="radio"  name="gender" value="male" checked> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="sel">Select box</label>
					<div class="col-sm-6">          
						<select class="form-control" name="sel">
							<option value=" ">Select </option>
							<option value="hai">Hai</option>
							<option value="bye">Bye</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">Check box</label>
					<div class="col-sm-6">   
						<input type="checkbox" name="check" value="Bike"> Say Hai!!
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="pwd">URL</label>
					<div class="col-sm-6">   
						<input type="url" name="url" class="form-control">
					</div>
				</div>
				<div class="form-group">        
					<div class="col-sm-offset-3 col-sm-6 text-center">
						<button type="submit" class="btn btn-success btn-md">Submit</button>
					</div>
				</div>
			</form>
		</div>
	</div>

</body>
<script src="./jquery.validate.min.js"> </script>
<script src="./validate.js"></script>
<script src="./jquery-ui.min.js"></script>
<script type="text/javascript">

	$(function(){
		$('#formid').validate({
			rules:{
				email:{required:true,email1:true,minlength:4},
				pwd:{required:true},
				nos:{required:true},
				textname:{required:true},
				date:{required:true},
				time:{required:true},
				file:{required:true},
				sel:{required:true},
				col:{required:true},
				pwd:{required:true},
				gender:{required:true},
				check:{required:true},
				url:{required:true},
			},
			messages:{
				email:{required:"Email Required"},
				pwd:{required:"Password Required"}
			}
		})

	});
</script>
</html>
