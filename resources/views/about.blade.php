<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Website Design</title>


	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wg
	ht@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&displa
	y=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<style type="text/css">
	*{
	padding: 0;
	margin: 0;
	font-family:'Josefin Sans',sans-serif;
	box-sizing: border-box;
}
.hero{
	height: 110vh;
	width: 100%;
	background-image: url('build/assets/images/finallandscape.jpg');
	background-size: cover;
	background-position: center;
}
nav{
	display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 45px;
	padding-left: 8%;
	padding-right: 8%;
}
.logo
{
	color: white;
	font-size: 35px;
	letter-spacing: 1px;
	cursor: pointer;
}
span{
	color: #f9004d;
}
nav ul li{
	list-style-type: none;
	display: inline-block;
	padding: 10px 30px;
}
nav ul li a{
	color: white;
	text-decoration: none;
}
nav ul li a:hover{
	color: #f9004d;
	transition: .4s;
}
.btn{
	background-color: #f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 10px 25px;
	border-radius: 30px;
	transition: transform .4s;
}
.btn:hover{
	transform: scale(1.1);
}
.content{
	position: absolute;
	top: 50%;
	left: 8%;
	transform: translateY(-50%);
}
h1{
	color: white;
	margin: 20px 0px 20px;
	font-size: 70px;
}
h3{
	color: white;
	font-size: 25px;
	margin-bottom: 50px;
}
h4{
	color: #585c63;
	font-size: 20px;
	letter-spacing: 2px;
}
.newslatter form{
width: 380px%;
max-width: 100%;
position: relative;
}
.newslatter form input:first-child{
	display: inline-block;
	width: 100%;
	padding: 14px 130px 14px 15px;
	border: 2px solid #f9004d;
	outline: none;
	border-radius: 30px;
}
.newslatter form input:last-child{
	position: absolute;
	display: inline-block;
	outline: none;
	border: none;
	padding: 10px 30px;
	border-radius: 30px;
	background-color: #f9004d;
	color: white;
	cursor: pointer;
	box-shadow: 0px 0px 5px #000, 0px 0px 15px #868686;
	top: ;
}
.share
{
	position: absolute;
	top: 90%;
	left: 8%;
	display: flex;
	flex-wrap: nowrap;
	justify-content: flex-start;
	align-items: center;
}
.share p{
	font-size: 17px;
	color: white;
	margin-right: 60px;
}
.share .social a{
	display: inline-block;
	color: white;
	margin-right: 15px;
	transition: transform .3s;
}
.share .social a:hover{
	transform: scale(1.6);
}
.about{
	width: 100%;
	padding: 100px 0px;
	background-color: #191919;
}
.about img{
	height: auto;
	width: 430px;
}
.main{
	width: 1130px;
	max-width: 95%;
	margin: 0 auto;
	display: flex;
	align-items: center;
	justify-content: space-around;
}
.about-text h2{
	color: white;
	font-size: 40px;
	text-transform: capitalize;
	margin-bottom: 20px;
}
.about-text h5{
	color: white;
	letter-spacing: 2px;
	font-size: 22px;
	margin-bottom: 25px;
	text-transform: capitalize;
}
.about-text p{
	color: #fcfc;
	letter-spacing: 1px;
	line-height: 28px;
	font-size: 18px;
	margin-bottom: 45px;
}
button{
	background-color: #f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s;
}
button:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}
.service{
	background: #101010;
	width: 100%;
	padding: 100px 0px;
}
.title h2{
	color: white;
	font-size: 75px;
	width: 1130px;
	margin: 30px auto;
	text-align: center;
}
.box{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 400px;
}
.card{
	height: 365px;
	width: 335px;
	padding: 20px 35px;
	background: #191919;
	border-radius: 20px;
	margin: 15px;
	position: relative;
	overflow: hidden;
	text-align: center;
}
.card i{
	font-size: 50px;
	display: block;
	text-align: center;
	margin: 25px 0px;
	color: #f9004d;
}
h5{
	color: white;
	font-size: 23px;
	margin-bottom: 15px;
}
.pra p{
	color: #fcfc;
	font-size: 16px;
	line-height: 27px;
	margin-bottom: 25px;
}
.card .button{
	background-color: #f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 9px 22px;
	border-radius: 30px;
	transition: .4s;
}
.card .button:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}
.contact-me{
	width: 100%;
	height: 290px;
	background:  #191919;
	display: flex;
	align-items: center;
	flex-direction: column;
	justify-content: center;
}
.contact-me p{
	color: white;
	font-size: 30px;
	font-weight: bold;
	margin-bottom: 25px;
}
.contact-me .button-two{
	background-color: #f9004d;
	color: white;
	text-decoration: none;
	border: 2px solid transparent;
	font-weight: bold;
	padding: 13px 30px;
	border-radius: 30px;
	transition: .4s;
}
.contact-me .button-two:hover{
	background-color: transparent;
	border: 2px solid #f9004d;
	cursor: pointer;
}
footer{
	position: relative;
	width: 100%;
	height: 400px;
	background: #101010;
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
}
footer p:nth-child(1){
	font-size: 30px;
	color: white;
	margin-bottom: 20px;
	font-weight: bold;
}
footer p:nth-child(2){
	color: white;
	font-size: 17px;
	width: 500px;
	text-align: center;
	line-height: 26px;
}
.social{
	display: flex;
}
.social a{
	width: 22px;
	height: 22px;
	display: flex;
	align-items: center;
	justify-content: center;
	background: #f9004d;
	border-radius: 50%;
	margin: 22px 10px;
	color: white;
	text-decoration: none;
	font-size: 20px;
}
.social a:hover{
	transform: scale(1.3);
	transition: .3s;
}
.end{
	position: absolute;
	color: #f9004d;
	bottom: 35px;
	font-size: 14px;
}
.listjob{
	color: white !important;
	font-size: 22px;
}
.jobdesc{
	color: #fcfc;
}
.con {
	color: white !important;
	display: inline-block;
}
.down{
display: flex;
	align-items: center;
	justify-content: space-between;
	padding-top: 45px;
	padding-left: 8%;
	padding-right: 8%;
}

.down li{
	list-style-type: none;
	display: inline-block;
	padding: 10px 30px;
}
.down li a{
	font-size: 20px;
	color: white;
	text-decoration: none;
}
.education{
	text-align: center;
	font-size: 10px;
}
.paragraph{

	font-size: 10px;
}


.core {

	display: flex;
	align-items: center;
	justify-content: space-between;
	/*padding-top: 45px;
	padding-left: 5%;*/
	padding-right: 8%;
}

/*.core li{
	list-style-type: none;
	color: white;
}
.core li a{
	color: white;
	text-decoration: none;
}
.space{
	margin-right: 10pz;
}*/
</style>

<body>
	<div class="hero">
		
       <!--  <img src="build/assets/images/finallandscape.jpg" style="width: 1263px; height: 675px;"> --> 
		<nav>

			<!-- <h2 class="logo"> Perso<span>lio</span></h2> -->
			<ul>
				<li><a href="#"> Previous Job Roles</a></li>
				<li><a href="#"> Profession/Skills</a></li>
				<li><a href="#"> Education</a></li>
				<li><a href="#"> Contact</a></li>
			</ul>
				<a href="{{ route('homepage') }}" class="btn">Home</a>
		</nav>

	<div class="content">
				<h4> Hello, my name is</h4>
				<h1>Nelditz <span>Roa</span></h1>
				<h3>Web Designer and Web Developer</h3>
		<div class="newslatter">
			<form>
				
				<input type="email" name="email" id="mail" placeholder="Enter your email">
				<input type="submit" name="submit" value="lets start">
			</form>
			
		</div>
	</div>


	<div class="share">



		
	 </div>
 <i class=""></i>	</div>

<section class="about">
	<!-- <i class="fab fa-linkedin"></i> -->
	<div class="main">

		 <img src="{{ asset('build/assets/images/croport.JPG') }}" style="width: 300px;height: 350px;">             

<!-- 		<img src="../images/b&w.jpg"> -->
		<div class="about-text" style="padding-left: 50px;">
			<h2>Previous Job Roles</h2>
			<h5 class="jobdesc" style="color: #fcfc;">Web Developer II | Caritas Health Shield Quezon City- October 2021 – October 2022</h5>

		<li class="listjob">Used critical thinking to break down problems, evaluate solutions and make decisions.</li>
			<li class="listjob">Maintains the data from the website going to the database </li>
			<li class="listjob">Handles existing project and fix, debug errors that prevents unwanted execution in the system</li>
			<li class="listjob">Converts the existing project from CodeIgniter to Laravel 6 or 7 version to update the system and transition to a new framework</li>
			<li class="listjob">Process ticket request of respective department if there’s any changes or files to be uploaded in the project</li>
			<li class="listjob">Creates a new project, design and applied lay out and responsive website (Front- End)</li>
			<li class="listjob">Add functionalities to the website/project, configure the database connection, uses API/ REST API that uses http or server</li>
			<li class="listjob">Create script/run script in oracle sql developer apply in connecting it to the database by translating it to PHP web</li>
			<li class="listjob">Conducts UAT to specific department to discuss the project and acknowledge improvements/changes and revisions on the project</li>
			<li class="listjob">Projects Handled: CLIC or Caritas Life Insurance Corporation, CFPI website or Caritas Financial Plans Inc, CCMS or Caritas Customer Care Management System, Caritas Ticketing System, Caritas Directory, CFPI Dashboard (front end and back end)</li>

<!-- 			<p> •	Used critical thinking to break down problems, evaluate solutions and make decisions.
•	Maintains the data from the website going to the database
•	Handles existing project and fix, debug errors that prevents unwanted execution in the system
•	Converts the existing project from CodeIgniter to Laravel 6 or 7 version to update the system and transition to a new framework
•	Process ticket request of respective department if there’s any changes or files to be uploaded in the project
•	Creates a new project, design and applied lay out and responsive website (Front- End)
•	Add functionalities to the website/project, configure the database connection, uses API/ REST API that uses http or server
•	Create script/run script in oracle sql developer apply in connecting it to the database by translating it to PHP web
•	Conducts UAT to specific department to discuss the project and acknowledge improvements/changes and revisions on the project
•	Projects Handled: CLIC or Caritas Life Insurance Corporation, CFPI website or Caritas Financial Plans Inc, CCMS or Caritas Customer Care Management System, Caritas Ticketing System, Caritas Directory, CFPI Dashboard (front end and back end)


</p> -->
<!-- 		<button type="button">Let's Talk</button> -->
	</div>
</section>


<!-- service section part------->
<div class="service">
	<div class="title">
		<h2>Profession/Skills</h2>
		
	</div>
	<div class="box">
		<div class="card">	
			<i class="fas fa-bars"></i>
			<h5>FRONT END DEVELOPMENT</h5>
			<div class="pra">
				<p>HTML,JAVASCRIPT,CSS,SASS <span></span>REACTJS,BOOTSTRAP,<span></span>
                    <br>JSON,JQUERY</p>

				<p style="text-align: center;">
				<!-- 	<a class="button" href="#">Read More</a>
					 -->
				</p>
			</div>
		</div>

		<div class="card">	
			<i class="far fa-user"></i>
			<h5>BACK END DEVELOPMENT</h5>
			<div class="pra">
				<p>PHP LARAVEL 7-9 AND CODEIGNITER, JAVA ECLIPSE IDE</p>

				<p style="text-align: center;">
					<!-- <a class="button" href="#">Read More</a> -->
					
				</p>
			</div>
	</div>
			<div class="card">	
			<i class="far fa-bell"></i>
			<h5>DATABASE MANAGEMENT</h5>
			<div class="pra">
				<p>ORACLE SQL DEVELOPER, MYSQL, MICROSOFT</p>

				<p style="text-align: center;">
				<!-- 	<a class="button" href="#">Read More</a> -->
					
				</p>
			</div>
		</div>
	</div>
</div>

<!---- Contact Me----->
<div class="contact-me">
	<!-- <p>Let me Get You a Beautiful Website</p> -->

	<p>Education</p> 

	<div class="pra">
				<p class="education">Bachelor of Science in Computer Science 
				</p>
				<p class="education">June 2007- March 2011</p>
				<p class="education">Ramon Magsaysay Memorial Colleges</p>

				<p class="education">Pioneer corner Avenue General Santos City</p>

				<p style="text-align: center;">
				<!-- 	<a class="button" href="#">Read More</a> -->
					
				</p>
	</div>

<!-- 	<a class="button-two" href="#">Get in Touch</a> -->

</div>

<!--- Footer start---------->
<footer>
	<p class="education">Nelditz Roa</p>
	<p style="font-size: 20px;">For more inquires/Contact me below:</p>

	<ul class="down">

				<li><a href="#"> <i class="fas fa-phone-alt"></i> 09972968610</a></li>
				<li><a href="#"> <i class="fas fa-home"></i><span></span> #28 F. Reyes Street Barangay Caniogan Pasig City Philippines  1606</a></li>
				<li><a href="#"> <i class="fas fa-envelope"></i> <span></span> clemenceaor@gmail.com</a></li>
	
</ul>
<!-- <div class="social">



<a href="#"><i class="fas fa-phone-alt"></i></a>
	<a href="#"><i class="fas fa-home"></i></a>
	<a href="#"><i class="fab fa-linkedin"></i></a> 
</div> -->
<p class="end">Copyright By Nelditz Roa</p>
</footer>
</body>
</html>