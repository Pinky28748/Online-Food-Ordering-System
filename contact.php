<!DOCTYPE html>
<html>
    <title>Fast Food Ordering System</title>
<head>
    <style>
body
		{
		background-image:url("contactform.jpg");
		background-size:100% 150%;
		text-align:center;
		border:50px;
		}
	h3
		{
		font-style:italic;
		font-weight:bolder;
		font-size:25px;
		font-color:black;
		
		}
	input[type='text'], input[type='email'],
	input[type='message'] {
     width: 200px;
     border-radius: 5px;
     border: 4px solid #AAA;
     padding: 10px;
     color: black;
     font-size: 14px;
     margin-top: 10px;
	}
	.container
	{
	
	color:black;
	
	border:2px solid balck;
	margin:20px;
	padding:20px;

	}
     input[type='submit'] 
	{
    background-color:brown;
     border:6px;
    
     padding: 16px 32px;
	text-decoration:none;
     color: skyblue;
     font-size: 14px;
     margin: 4px 2px;
	cursor:pointer;
	}
	.contact-container{
		background: rgba(256,256,256, 0.5);
		width: 50%;
		margin-left: 25%
	}
	</style>
</style>
</head>
<body>


<div class="contact-container">

    <h1>Contact us form </h1>
    <form action="pro.php" method="POST">
	
        <div class="form-group">
            <label><h3>Name:</h3></label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <div class="form-group">
            <label><h3>Email:</h3></label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label><h3>Message:</h3></label>
            <textarea class="form-control" name="message" required></textarea>
        </div>
        <div class="form-group">
            <input type="submit" value="Submit">
        </div>
    </form>
</div>


</body>
</html>