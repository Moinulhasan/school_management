<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>school Mangement</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >

<link rel="stylesheet" href="new.css">
</head>
<body>
<header>
            <div class="main-menu-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="#"><img src="img/logo.png"></a>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="main-menu text-right">
                            <nav>
                                <ul >
                                   <li class="active"><a href="index.html" >Home</a></li>
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="class.html">Classes</a></li>
                                    <li><a href="gallery.html">Gallery</a></li>
                                    <li><a href="blog.html">Blog</a></li>
                                    <li><a href="#footer">Contact</a></li>
                                   
                                  
                 <!-- This is for login & log-out section-->
           <li><a href="logout.php">Logout</a></li>
                                    
                                   
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
                
            </div>
        </header> 
        <!-- This is the start of owl carosol part/slider part-->

<div class="row" style="margin-top: 10px;">
    <div class="carousel slide" id="carousel1" data-ride="carousel" style="margin-top: 10px">

        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carouse1" data-slide-to="1"></li>
            <li data-target="#carouse1" data-slide-to="2"></li>
            <li data-target="#carouse1" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="img/1.jpeg" alt="img" style="width: 100%;height: 550px;background: rgba(0, 0, 0, 0.5);">
                               <!--    <div class="carousel-caption d-none d-md-block">
                        <h5>..Msld.</h5>
                        <p>..wsrw,ermw;rlknw;rlkwn ;wnt;welrtnwe;lfmew;lfmne;ltrnm3elremfewlmfs,lfm w;l.</p>
                        <button class="btn btn-primary ">Submit</button>
                      </div>
                  -->
            </div>
            <div class="item ">
                <img src="img/1.jpeg" alt="img" style="width: 100%;height: 550px">
            </div>
            <div class="item ">
                <img src="img/2.jpeg" alt="img" style="width: 100%;height: 550px">
            </div>
            <div class="item ">
                <img src="img/3.jpeg" alt="img" style="width: 100%;height: 550px">
            </div>
            
        </div>
        <a class="left carousel-control" href="#carousel1" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span CLASS="sr-only">Pev</span>
        </a>

        <a class="right carousel-control" href="#carousel1" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>

            </div>
        </div>


        <div class="body">
        	<div class="container">
        		<div class="row">

        			<div class="col-md-3">
        				<div class="lerning">
        					<h1>Active Learning</h1>
        					<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>

        				</div>
        			</div>
        			<div class="col-md-3">
        				<div class="lerning1">
        					<h1>Expert Teachers</h1>
        					<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
        					
        				</div>
        			</div>
        			<div class="col-md-3">
        				<div class="lerning2">
        					<h1>Strategi Location</h1>
        					<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
        					
        				</div>
        			</div>
        	<div class="col-md-3">
        				<div class="lerning3">
        					<h1>Full Day Programs</h1>
        					<p>Uniquely productivate real time collaboration idea-sharing after awesome quality vectors after</p>
        					
        				</div>
        			</div>
        		</div>
        	</div>
        </div>


        <div class="about">
        	<div class="container">
        		<div class="this"> 
        		<div class="row">
        			
        			<div class="col-md-6">
        				<div class="about2">
        				<div class="img">
        					<img src="img/about.png">
        				</div>
        			</div>
        			</div>
        			<div class="col-md-6">
        				<div class="about2">
        				<div class="write">
        					<h1><b>About Our KidsAcademy</b></h1>
        					<p>Enthusiasticay diseminate competitive oportunitie through transparent an actions Compelngly seize viral schemas through intermandated creative is adiea sources. Enthusiasticay plagiarize clientcentered relationship for the covalent experiences. Distinctively architect 24/365 service for wireless is ebusiness ahosfluorescently Efficiently comunicate coperative methods of empowerment awesome athrough Monotonectaly myocardinate cross and functional niche markets and an functional.</p>
        					<button class="btn btn-primary">Read More</button>
        					<button class="btn btn-danger">Buy Now</button>
        				</div>
        			</div>
        		</div>
        		</div>

        	</div>
        	</div>
        </div>


        <div class="popular">
        	<div class="container">
        		<div class="main_p">
        			<h1>Our Popular Classes</h1>
        			<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic strategic themeplatform.</p>
        		</div>
        		<div class="row">
        		<div class="col-md-4">
        			<div class="tabel">
        				<img src="img/10.jpg">
        				<div class="tit">
        					<table>
        						<th class="one">Class Size
30 - 40</th>
        						<th class="two"> Years Old
5 - 6</th>
        						<th class="three">Tution Fee
1500tk</th>
        					</table>
        					<div class="body_1">
        						<h1>Imagination Classes</h1>
        						<h5><span>Class Time</span> : 08:00 am - 10:00 am</h5>
        						<p>Draticaly novate fuly rarched an plications awesome theme education</p>
        					</div>
        					<div class="adress">
        						<p><span class="glyphicon glyphicon-home"></span> 218 New Elephant Road, Dhaka - 1205</p>
        					</div>
        				</div>
        			</div>
        			
        		</div>

        		<div class="col-md-4">
        			<div class="tabel">
        				<img src="img/11.jpg">
        				<div class="tit">
        					<table>
        						<th class="one">Class Size
30 - 40</th>
        						<th class="two"> Years Old
5 - 6</th>
        						<th class="three">Tution Fee
1500tk</th>
        					</table>
        					<div class="body_1">
        						<h1>Imagination Classes</h1>
        						<h5><span>Class Time</span> : 08:00 am - 10:00 am</h5>
        						<p>Draticaly novate fuly rarched an plications awesome theme education</p>
        					</div>
        					<div class="adress">
        						<p><span class="glyphicon glyphicon-home"></span> 218 New Elephant Road, Dhaka - 1205</p>
        					</div>
        				</div>
        			</div>
        		</div>

        		<div class="col-md-4">
        			<div class="tabel">
        				<img src="img/12.jpg">
        				<div class="tit">
        					<table>
        						<th class="one">Class Size
30 - 40</th>
        						<th class="two"> Years Old
5 - 6</th>
        						<th class="three">Tution Fee
1500tk</th>
        					</table>
        					<div class="body_1">
        						<h1>Imagination Classes</h1>
        						<h5><span>Class Time</span> : 08:00 am - 10:00 am</h5>
        						<p>Draticaly novate fuly rarched an plications awesome theme education</p>
        					</div>
        					<div class="adress">
        						<p><span class="glyphicon glyphicon-home"></span> 218 New Elephant Road, Dhaka - 1205</p>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        	</div>
        	<div class="main_p">
        		<button class="btn btn-primary">See More Classes</button>
        	</div>
        </div>


        <div class="meet">
        	<div class="container">
        		<div class="main_m">
        			<h1>Meet Our Teachers</h1>
        			<p>Rapidiously expedite granular imperatives before economically sound web services. Credibly actualize pandemic strategic themeplatform.

</p>
        		</div>
        		<div class="details">
        			<div class="row">
        				<div class="col-md-6">
        					<div class="details2">
        						<div class="row">
        							<div class="col-md-6">
        								<img src="img/13.jpg">
        							</div>
        							<div class="col-md-6">
        								<div class="person">
        									<h1>Broklyn Doel <span>Sains Teacher</span></h1>

        									<p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme ollaboratively.</p>
        									<a href="">View Portfolio</a>
        								</div>
        							</div>
        						</div>
        					</div>

        					

        				</div>
        				<div class="col-md-6">
        					<div class="details2">
        						<div class="row">
        							<div class="col-md-6">
        								<img src="img/14.jpg">
        							</div>
        							<div class="col-md-6">
        								<div class="person">
        									<h1>Broklyn Doel <span>Sains Teacher</span></h1>

        									<p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme ollaboratively.</p>
        									<a href="">View Portfolio</a>
        								</div>
        							</div>
        						</div>
        					</div>

        					

        				</div>
        				<div class="col-md-6">
        					<div class="details2">
        						<div class="row">
        							<div class="col-md-6">
        								<img src="img/15.jpg">
        							</div>
        							<div class="col-md-6">
        								<div class="person">
        									<h1>Broklyn Doel <span>Sains Teacher</span></h1>

        									<p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme ollaboratively.</p>
        									<a href="">View Portfolio</a>
        								</div>
        							</div>
        						</div>
        					</div>

        					

        				</div>
        				<div class="col-md-6">
        					<div class="details2">
        						<div class="row">
        							<div class="col-md-6">
        								<img src="img/16.jpg">
        							</div>
        							<div class="col-md-6">
        								<div class="person">
        									<h1>Broklyn Doel <span>Sains Teacher</span></h1>

        									<p>Distinctively initiate and sustainable synergy vaan tactical opportunities. awesome theme ollaboratively.</p>
        									<a href="">View Portfolio</a>
        								</div>
        							</div>
        						</div>
        					</div>

        					

        				</div>
        			</div>
        		</div>
        	</div>

        </div>

<footer id="footer">
	
          <div class="container " id="contact">
		<div class="row" style="margin-top: 30px;">
			<div class="col-lg-5 col-md-12 ">
				<p style="margin-bottom: 30px;"><img src="img/logo.png" width="150" height="36" data-retina="true" alt=""></p>
				<p style="margin-bottom: 30px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
				<div class="follow">
					<ul>
							<li>Follow us</li>
							<li><a href="https://www.facebook.com/mahin.khan.900"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#0"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#0"><i class="fa fa-google"></i></a></li>
							<li><a href="#0"><i class="fa fa-envelope"></i></a></li>
							<li><a href="#0"><i class="fa fa-instagram"></i></a></li>
						</ul>
				</div>
			</div>

			


				<div class="col-lg-3 col-md-6">
					<div class="use">
					<div class="contact">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="#"><i class="fa fa-mobile"></i> + 01774183944</a></li>
						<li><a href="#"><i class="fa fa-envelope"></i> nahid0594@gmail.com</a></li>
					</ul>
					
				</div>
			</div>
			</div>
		</div>
		<hr>
	<h4 style="text-align: center;">all copyright@nahid</h4>
	</div>
</footer>

</body>
</html>