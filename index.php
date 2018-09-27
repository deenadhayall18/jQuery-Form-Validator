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
						<input type="date" class="form-control" id="date" placeholder="Enter password" name="date"  data-date="" data-date-format="DD MMMM YYYY">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="time">Time</label>
					<div class="col-sm-6">          
						<input type="time" class="form-control" id="time" placeholder="Enter password" name="time">
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-2" for="radio">Radio</label>
					<div class="col-sm-6">          
						Select  <input type="radio"  name="gender" value="male"> 

					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="radio">Radio</label>
					<div class="col-sm-6">          
						<input type="file" name="file" class="form-control">
					</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-2" for="sel">Select box</label>
					<div class="col-sm-6">          
						<select class="form-control" name="sel">
							<option value="">Select</option>
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
					<label class="control-label col-sm-2" for="pwd"></label>
					<div class="col-sm-6">   
						<input type="submit" name="url" class="form-control btn btn-success">
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
				pwd:{required:true,minlength:8,maxlength:8},
				nos:{required:true,numbersOnly:true,maxValue:100},
				textname:{required:true,letterspaceonly:true},
				date:{required:true},
				time:{required:true},
				sel:{required:true},
				gender:{required:true},
				file:{required:true,minfilesize:100,maxfilesize:1024},
				check:{required:true},
				url:{required:true},
			},
			messages:{
				email:{required:"Email Required"},
				pwd:{required:"Password Required"},
				email:{required:'Enter Email',email1:'Enter Valid Email'},
				pwd:{required:'Enter Password',minlength:'Exact of 8 characters required',maxlength:'Exact of 8 characters required'},
				nos:{required:'Enter number',numbersOnly:'Numnbers Only Allowed',maxValue:'Maximum value of 100 only allowed'},
				textname:{required:'Enter Text',letterspaceonly:'Only Letters alllowed'},
				date:{required:'Enter Date ',minDate:'Minimum date is 01-01-2018',maxDate:'Maximum Date is 01-01-2019'},
				time:{required:'Enter Time'},
				sel:{required:'Select It'},
				gender:{required:'Click It'},
				file:{required:'Enter a File ',minfilesize:'Minimum file size of 100kb allowed',maxfilesize:'Maximum file size of 1024kb allowed'},
				check:{required:'Check It '},
				url:{required:'Enter a Valid Url'},
			}
		})

	});
</script>
</html>
