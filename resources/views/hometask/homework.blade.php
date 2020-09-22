<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		body{
			background-color: #CEB6D7;
		}
		h1{
			text-align: center;
			letter-spacing: 4px;
			color: white;
			background: rgba(0, 0, 0, .5);


		}
		#submit{
			position: relative;
		    padding: 10px 20px;
		    color: #b6c3c4;
		    font-size: 16px;
		    text-transform: uppercase;
		    overflow: hidden;
		    margin-top: 20px;
		    letter-spacing: 4px;
		}

		#forma{
			position: absolute;
		    top: 50%;
		    left: 50%;
		    width: 250px;
		    padding: 40px;
		    transform: translate(-50%, -50%);
		    background: rgba(0, 0, 0, .5);
		    box-shadow: 0 15px 25px rgba(0, 0, 0, .6);
		    border-radius: 10px;
		}
	</style>
</head>
<body>
	<h1>FORM</h1>
	<form action="{{route("main")}}" method="POST" id="forma">
		@csrf
		<input type="text" name="name" placeholder="Your name">	
		<input type="text" name="surname" placeholder="Your surname">	
		<textarea name="add" placeholder="Your address"></textarea>
		<textarea name="info" placeholder="Your information"></textarea> 
		<input type="date" name="dateofbirth">
		<button id="submit">submit</button>
	</form>
</body>
</html> 