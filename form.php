<html lang="en">
<head>
<meta charset="UTF-8">
<style type="text/css">
*{
	margin:0;
	padding:0;
	box-sizing:border-box;
	font-family:"Segoe UI", Tahoma ,Geneva ,Verdana,sans-serif;
}
body{
	color:white;
	display:flex;
	height: 100vh;
	justify-content:center;
	align-items:center;
	/*background: linear-gradient(to left, #333, #333 50%, #eee 75%, #333 75%);
	background: linear-gradient(217deg, rgba(500,0,0,.8), rgba(700,0,0,0) 70.71%),
            		linear-gradient(127deg, rgba(0,255,0,.8), rgba(0,255,0,0) 70.71%),
            		linear-gradient(336deg, rgba(0,0,255,.8), rgba(0,0,255,0) 70.71%);*/
	background: linear-gradient(135deg,#05073a, #dc0606ca);
	padding:10px;
}
textarea
{
font-size:18px;
border-radius:5px;
text-align:center;
}
.container{
	max-width:700px;
	width:100%;
	padding:25px 30px;
	border-radius:25px;
	background:background: linear-gradient(135deg,#dc0606ca,#05073a);
}
.container .heading{
	font-size:25px;
	font-weight:500;
	position:relative;
	text-align:center;
	padding:0 0 20px 0;
}
.container .heading::before{
	content: '';
	position:absolute;
	height:3px;
	left:0;
	bottom:0;
	width:100%;
	background:linear-gradient(135deg, #71b7e6, #9b5b);
}
.container form .card-details{
	margin-top:25px;
	display:flex;
	flex-wrap:wrap;
	justify-content:space-between;
}
form .card-details .card-box{
	width: calc(100% / 2 - 20px);
	margin-bottom:15px;
}
.card-details .card-box .details{
	display:block;
	font-weight: 500;
	margin-bottom: 5px;
}
.card-details .card-box input{
	height:45px;
	width:100%;
	outline:none;
	border-radius:5px;
	border:1px solid #ccc; 
    padding-left:15px;
	font-size:16px;
	border-bottom-width:2px;
	transition: all 0.3s ease;
}
.card-details .card-box input:focus,
.card-details .card-box input:valid{
	border-color:#9b59b6;
} 

form .circal-form .circal-title{
	font-size: 20px;
	font-weight:500;
	border-bottom: 2px solid;
}
form .circal-form .category{
	margin-top:10px;
	margin-bottom:10px;
}
form .button{
	text-align:center;
}

form .button input{
padding:10px 0;
margin-top:10px;
height:10%;
width:50%;
outline:none;
color:white;
border:none;
font-size:18px;
font-weight:500;
border-radius:5px;
letter-spacing:1px;
background: linear-gradient(135deg, #05073a, #dc0606ca);
}

form .button input:hover{
background: linear-gradient(135deg,#dc0606ca,#05073a);
}
@media(max-width:584px){
	.container{
		max-width: 100%;
	}
	form .card-details .card-box{
		margin-bottom: 15px;
		width:100%;
	}
	form .circal-form .category{
		width:100%;
	}
	.container form .card-details{
		max-height:300px;
		overflow:scroll;
	}
	.card-details::webkit-scrollbar{
		width:0;
	}
}

.contain {
	display: flex;
	justify-content: center;
	margin-top: 20px;
}
#capt {
	width: 150px;
	height: 48px;
	font-size: 37px;
	background-color: white;
	padding: 5px;
	border: none;
	letter-spacing: 1px;
	float: left;
	color: #E9E91D;
	border-radius: 5px 0 0 5px;
}
#refresh {
	float: left;
	background-color: white;
	height: 35px;
	border-radius: 0 5px 5px 0;
}
#refresh img {
	margin-top: 0px;
	cursor: pointer;
}
#textinput {
	width: 170px;
	height:45px;
	font-size: 20px;
	background-color: white;
	border: none;
	margin-left: 10px;
	border-radius: 5px;
	padding: 5px;
	color: #D58A1E;
}
.contain button {
	padding: 8px 20px;
	height: 45px;
	cursor: pointer;
	border: none;
	border-radius: 5px;
	margin-left: 10px;
	margin-top: 1px;
	background: linear-gradient(135deg, #05073a, #dc0606ca);
	color: white;
	font-size:20px;
	transition: .5s;
}
.contain button:hover {
	background:linear-gradient(135deg, #dc0606ca,#05073a);
}

textarea{
text-align:center;
font-size:19px;
width:300px;
height:50px;
}

</style>
<title>Register form</title>
</head>

<body onload="cap()">
	<div class="container">
		<div class="heading">Registration</div>
		<form action="display.php" method="post">
			<div class="card-details">
				<div class="card-box">
					<span class="details">Full Name</span>
					<input type="text" name="name" id="name" placeholder="Enter your name" required>
				</div>
				<div class="card-box">
					<span class="details">Username</span>
					<input type="text" name="uname" id="username" placeholder="Enter your username" required>
				</div>
				<div class="card-box">
					<span class="details">Email</span>
					<input type="email" name="email" id="email" placeholder="Enter your email" required>
				</div>
				<div class="card-box">
					<span class="details">Phone Number</span>
					<input type="phone" name="mobile" id="phone" placeholder="Phone number" required>
				</div>
				<div class="card-box">
					<span class="details">Password</span>
					<input type="password" id="pass" placeholder="Enter your password" required>
				</div>
				<div class="card-box">
					<span class="details">Confirm</span>
					<input type="password" id="confirm" placeholder="Enter your password" required>
				</div>
				<div class="card-box">
					<span class="details">Upload 12 th certificate</span>
					<input type="file" placeholder="Upload File" required>
				</div>
				<div class="card-box">
					<span class="details">Course</span>
<textarea disabled>Front-End</textarea>
									
</div>	

			</div>
<div class="circal-form">
<span class="circal-title">Gender</span>
<div class="category">
<input type="radio" name="gender">Male
<input type="radio" name="gender">Female
<input type="radio" name="gender">Other
</div>
</div>
<div class="contain">
		<input type="text" id="capt" readonly="readonly" required >
		<div id="refresh"> <img src="refresh.png" onclick="cap()" width="50px"></div>

		<input type="text" id="textinput" placeholder="enter.." required>
		
</div>
<div class="button">
	<input type="button" value="Validate" onclick="validate()">&nbsp;&nbsp;
<input type="submit" value="Register">
</div>
		</form>
		</div>
	</div>	
<script type="text/javascript">
		function cap() {

			var alpha=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V'
			           ,'W','X','Y','Z','1','2','3','4','5','6','7','8','9','0','a','b','c','d','e','f','g','h','i',
			           'j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];

			var a=alpha[Math.floor(Math.random()*62)];
			var b=alpha[Math.floor(Math.random()*62)];
			var c=alpha[Math.floor(Math.random()*62)];
			var d=alpha[Math.floor(Math.random()*62)];
			var e=alpha[Math.floor(Math.random()*62)];
			var f=alpha[Math.floor(Math.random()*62)];

			var sum=a + b + c + d + e + f;

			document.getElementById("capt").value=sum;
		}

		
		function validate(){
var pas=document.getElementById("pass");
var con=document.getElementById("confirm");
var str1=document.getElementById("capt");
var str2=document.getElementById("textinput");
if(pas.value!=con.value)
{
alert("Confirm password!");
}
else if(str1.value!=str2.value)
{
alert("Please enter a valid Captcha!");
}
else
{
alert("Validation Successful! Now click on the Register button to confirm your registration!");
}
}

	</script>

</body>
</html>