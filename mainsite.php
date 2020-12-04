<?php
require('entre_class.php');

$entrepreneur = new Entrepreneur;

$data = $entrepreneur->get_user($_SESSION['user']);

$deets = $entrepreneur->get_user_post_topic();

$image = "mempic/".$data['entre_pix'];






 
?>   
   
   



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Main site page</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.css">
	<meta name="author" content="">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="viewport" content="width = device-width, initial-scale=1, shrink-to-fit=no">


	<style type="text/css">
		
		.dashf{
			height:130px;
			background-color:rgb(0,119,176);
			box-sizing:border-box;
		}

		.second{
			background-color:rgb(0,119,176);
			height:220px;

		}

    .link{
      text-align:center;
      text-decoration:none
    }







	</style>

</head>
<body>

	<div class='container-fluid'>
		<div class='row dashf'>
			<div class='col-4'>
				<h1 style='color:white; font-family:Cooper Black; font-size:35px'>Entrepreneur Forum</h1>




			</div>
			<div class='col-8'>
				<p style='color:white; text-align:center'>Welcome, <?php echo $data['fullname']; ?>: &nbsp; <i class='fas fa-user'></i> &nbsp; <a href='editprofile.php' style='color:white'>Edit Profile</a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<a href='logout.php' style='color:white; text-decoration:none;'><b>Logout</b></a></p>

				<br>
				
				<nav class="navbar navbar-expand-lg background-color:rgb(0,119,176);">
  					<a class="navbar-brand" href="#"></a>
 					 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" style='background-color:white'>
  					  <span class="navbar-toggler-icon" ></span>
  					  </button>
  					<div class="collapse navbar-collapse" id="navbarNavDropdown">
  				  <ul class="navbar-nav">
     		 <li class="nav-item active">
      			  <a class="nav-link" href="#" style='color:white; box-shadow:white;'>Feeds/<span class="sr-only">(current)</span></a>
      		</li>
      		
      		<li class="nav-item">
      			  <a class="nav-link" href="#post" style='color:white'>Post Topic/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="fflw_topics.php" style='color:white'>Followed Topics/</a>
      		</li>
     		 <li class="nav-item">
      			  <a class="nav-link" href="posd_top.php" style='color:white'>Posted Topics/</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="notifs.php" style='color:white'>Notifs/</a>
          </li>
      		<li class="nav-item">
      			  <a class="nav-link" href="likes_shares.php" style='color:white'>Likes & shares/</a>
      		</li>
      		<li class="nav-item">
      			  <a class="nav-link" href="mainproject3.php" style='color:white'>Trending/</a>
      		</li>
          <li class="nav-item">
              <a class="nav-link" href="contactform.php" style='color:white'>Contact</a>
          </li>
		</ul>
  	   </div>
     </nav> 
   </div>
 </div>


			
			<div class='row second'>
				
					<div class='col-8'>
  						<h1  style='color:white; font-family:Cooper Black; font-size:50px'>Welcome to the Forum</h1>
  						<p style='color:white; font-family:Cooper Black'>Share your knowledge and help solve problems in the Entrepreneur World!</p>
  						<br>
  						<br>
  						<form action='search_action.php' method='post' class='form-inline'>
             			 <input type='text' name='sert' style='width:60%;' class='form-control' placeholder='Search Topics' >
             				 &nbsp;<button type='submit' class='btn btn-danger' style='font-family:Aharoni; font-size:17px'><i class ='fas fa-search'></i></button>
           				</form>
  					</div>
  					<div class='col-4' id='stats'>
           
            		 <p style='color:white'><b>Topics:</b></p>
            		 <p style='color:white'><b>Members:</b></p> 
            		 <p style='color:white'><b>Date:</b></p>

  					        
  					</div>


				</div>







        <div class='row'>
          <div class='col'>
            <span> <?php echo $data['fullname']; ?>:</span> &nbsp; <i class='fas fa-user'></i>
            <input type='text' name='question' class='form-control' style='width:40%' placeholder='What is your question?'><span><a href='mainsite.php'><br><button class='btn btn-danger'>Add</button></a></span>

          </div>


        </div>

<br>



          <?php
            foreach($deets as $val){
             
           if($val['gender']=='Female'){
              $imagee = 'mempic/'.$val['entre_pix'];
           }
           else{
            $imagee = 'mempic/'.$val['entre_pix'];
           }

          ?>
             

      <div class="container-fluid"> 


          
        
          <div>
           <img src ="<?php echo $imagee;?>"  class="rounded-circle" style="width:50px; height:50px"><b>&nbsp;<?php echo $val['fullname']; ?></b>
        </div>

        <div>
        <p><?php echo $val['topics'];?></p>/<p><?php echo $val['post_content'];?></p>
      </div>
      
        <div class='row'>
          <div class='col'>
            <button><i class='fas fa-thumbs-up'></i>Like</button>
          </div>

          <div class='col'>
            <button><i class='fas fa-comment'></i>Comment</button>
          </div>

          <div class='col'>
             <button><i class='fas fa-share'></i>Share</button>
          </div>
        </div>
      </div>
         <hr style='color:black; border:1px solid grey'>

      <div id='feedback'>    
      </div>
      
       
          <?php
           
           }
          ?>

 
     
  





              <div class='row'>
                <div class='col'>
                  <h1 style='text-align:center; font-family:Cooper Black'>ENTREPRENEUR FORUMS</h1>
                </div>
              </div>

       <div class='row'>
              <div class='col'>
                <div class='card'>
                  <h6 class='card-header text-white' style='background-color:rgb(0,119,176)'>General Business Discussion</h6>
                  <div class='card-body'>
                    <p class='card-title'>Topics</p>

                   <?php 
                   $entrepreneur->get_topic2();


                   ?>
                  
                    <!-- <a href='#' class='card-link'></a>
                    &nbsp;&nbsp;&nbsp;<a href='business_topic.php' class='card-link'></a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'></a> -->
                    <!-- &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Economy</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Global Business</a>
                    &nbsp;&nbsp;&nbsp;<a href='#' class='card-link'>Career Talk</a>
                    <a href='#' class='card-link'>Social Media for Business</a>
                    <a href='#' class='card-link'>Job/Vacancies</a>
                    <a href='#' class='card-link'>Business Growth</a>
                    <a href='#' class='card-link'>Marketing & Concept</a>
                    <a href='#' class='card-link'>Inspiration</a>
                    <a href='#' class='card-link'>Entrepreneurial Mindset</a>
                    <a href='#' class='card-link'>Entrepreneurs</a>
                    <a href='#' class='card-link'>Finance</a>
                    <a href='#' class='card-link'>Franchise</a>
                    <a href='#' class='card-link'>Leadership</a>
                    <a href='#' class='card-link'>Technology</a>
                    <a href='#' class='card-link'>Growth Strategies</a>
                    <a href='#' class='card-link'>Start a Business</a>
 -->
                  </div>
                </div>
              </div>
            </div>

             <br>
            <br>

         

      <div class='row'>
      <div class='col' style='background-color:rgb(0,119,176);'>
        <a href = 'mainsite.php'><i class='fas fa-arrow-left fa-2x' style='color:white'></i></a>
        <h3 style='color:white' id='post'>Post Your Topic <i class='fas fa-hand-point-down fa-2x'></i></h3>
      </div>
    </div>


<br>

  <div class='row'>
              <div class='col-9'>
                <div class='card'>
                  <h6 class='card-header text-white' style='background-color:rgb(0,119,176)'>Forum Rules</h6>
                  <div class='card-body'>
                    <!--<p class='card-title'>Rules</p>-->
                  <p class='card-text'>No Spam/Advertising/Self-promote in the forums.</p>
                  <p class='card-text'>Do not post copyright-infringing material.</p>
                  <p class='card-text'>Do not post "offensive" posts, links or images.</p>
                  <p class='card-text'>Do not cross post questions.</p>
                  <p class='card-text'>Do not PM users asking for help.</p>
                  <p class='card-text'>No discussion of any illegal activity.</p>
                  <p class='card-text'>Remain respectful of other members at all times.</p>
                  <P class='card-text'>Don't ask members for contact details (email, phone) or investments.</P>
                  <P class='card-text'>Don't Promote any form of shady investments such as any form of cryptocurrency or any form of betting on the forum.</P>
                  <P class='card-text'>Please post all threads in the right section, and don't derial threads by posting off topic.</P>
                  <P class='card-text'>Don't post false information on the forum.</P>
                  <p class='card-text'>Please spell words correctly and try to use perfect grammar and punctuation.</p>
                  </div>    
                </div>
              </div>
            </div>
<br>

        <div class='container'>
          <div class='row'>
            <div class='col'> 
            <form action ='entreajax_action.php' method='post'>
              
               <div class='form-group row'>
                  <div class='col'> 
                  <?php
                  $entrepreneur->get_topic();


                  
                  ?>
                  </div>             
              </div>
              
            

              <div class='form-group row'>
                <div class='col'>
              <textarea class='form-control' name='top' placeholder='post here' rows='6'></textarea>
                </div>
             </div>
              <br>


              <button type='submit' id ='btin' class='btn btn-danger'>Post</button>
            </form>
            

          </div>  

          </div>

    </div>
        <hr style='color:black'>




        <br>

          
        <div class='row footer'>
                <div class='col'>
                  <h2 style='text-align:center; font-family:Cooper Black' id='About'>About Us</h2>
                  <p style='text-align:center;'>Entrepreneur Advice Forum is very active, where members can get<br> advice and support for their small business or website. <br>The majority of our discussions relate to online business and helping young<br> entrepreneurs out there to grow and also to help others who wants to be an <br>entrepreneur in the business world.</p>

                </div>
                 </div>
                 <br>


              <div class='container'>
                <div class='row link'>
                  <div class='col'>
                    <a href='#' style='color:black; text-decoration:none'>Feeds</a>
                      <hr style='color:black'>
                    <a href='#About' style='color:black; text-decoration:none'>About</a>
                      <hr style='color:black'>
                    <a href='mainprojwebpage2.php' style='color:black; text-decoration:none'>Features</a>
                      <hr style='color:black'>
                    <a href='mainproject3.php' style='color:black; text-decoration:none'>Trending</a>
                      <hr style='color:black'>
                    <a href='contactform.php' style='color:black; text-decoration:none'>Contact</a>
                      <hr style='color:black'>
                  </div>
              </div>
            </div>

                        <br>
                        <br>
            
                  <div class='container'>
                    <div class='row'>
                      <div class='col'>
                        <p class='fas fa-copyright'>&nbsp;Copyright 2020</p>
                       </div>
                       <div class='col' align='center'>
                         <p>Terms and Rules</p>
                         <p>Privacy and Policy</p>
                         <p>Help</p>
                         <p>Contact Us</p>
                       </div>
                      <div class='col' align='right'>
                        <h5>Follow us on</h5>
                        <i class='fab fa-facebook-square fa-2x'></i>
                         <i class='fab fa-twitter-square fa-2x'></i>
                          <i class='fab fa-instagram-square fa-2x'></i>
                           <i class='fab fa-linkedin fa-2x'></i>
                      </div>
                    </div>
                  </div>











			</div>


      <script src='js/jquery-3.5.1.min.js'></script>
      <script type="text/javascript">
        
          $('#btin').click(function(){
            var topic = $('#top').val();
            var top= $('#topic').val();
            var data2send = {"post":topic,'topic':top};

           $.ajax({
                  url:'',
                  data: data2send,
                  type: 'POST',
                  
                  success:function(rsp){
                    $('#feedback').html(rsp);
                      //$('#top').val();
                  }




           });
          });
       




      </script>








	

























  <script type='text/javascript' src='js/jquery-3.5.1.min.js'></script>
	<script type='text.javascript' src='js/bootstrap.bundle.min.js'></script>
</body>
</html>