<?php
 
class entrepreneur {   
   
  
		public $conn;
 
		function __construct(){
			session_start();
 			$this->conn = new Mysqli("localhost","root","","entrepreneur");
		}

		function signup($entre){
			 $usertype =trim($entre['usertype']);
			$fname = trim($entre['fname']);
			$user = trim($entre['user']);
			$pwd = trim($entre['pwd']);
			$pwdd = trim($entre['pwdd']);
			$gender = trim($entre['gender']);
			$email = trim($entre['email']);
			$company = trim($entre['company']);
			$complocation = trim($entre['complocation']);
			$cert = trim($entre['cert']);
			$certlocation = trim($entre['certlocation']);
			$skill = trim($entre['skill']);


		$query_entre = "INSERT INTO user_signup SET
						user_type = '$usertype',
						fullname = '$fname',
						username = '$user',
						password = '$pwd',
						confirm_password = '$pwdd',
						gender = '$gender',
						email = '$email',
						company_name = '$company',
						company_location = '$complocation',
						certificate_name = '$cert',
						certificate_location = '$certlocation',
						skills = '$skill'
						";
					

				$ent = $this->conn->query($query_entre);
				$id= $this->conn->insert_id;

			


				if($id > 0){
					
					$_SESSION['user'] = $id;
					
					header('location:dashboard_entre.php');
				}

				else{
					header('location:signupform.php');
				}
		
		}

		

		function member($member){
			$usertype =trim($member['usertype']);
			$fname = trim($member['fname']);
			$user = trim($member['user']);
			$pwd = trim($member['pwd']);
			$pwdd = trim($member['pwdd']);
			$gender = trim($member['gender']);
			$email = trim($member['email']);


			

	
		$query_mem = "INSERT INTO user_signup SET
						 user_type = '$usertype',
						fullname = '$fname',
						username = '$user',
						password = '$pwd',
						confirm_password = '$pwdd',
						gender = '$gender',
						email = '$email'
						";
						


						$mem = $this->conn->query($query_mem);
						$id = $this->conn->insert_id;
					

					if($id > 0){

						$_SESSION['user'] = $id;
						
						header('location:dashboard.php');
					}

					else{
						header('location:signupform.php');
					}

					
					
		}

			


			


			function get_user($id){
				$query = "SELECT * FROM user_signup
				WHERE user_id = '$id'";
				
				$get = $this->conn->query($query);

				$_SESSION['user']=$id;
				$res = $get->fetch_assoc();

				return $res;
			}

			
			
			function update_guests($member){
				
			 $guestid = $_SESSION['user']; 
				
				$fname = trim($member['fname']);
				$gender = trim($member['gender']);
				

				$query_upd = "UPDATE user_signup SET 
					fullname = '$fname',
					gender = '$gender'
					
					where user_id = '$guestid'";

				 $this->conn->query($query_upd);
				

			}

			function update_entre($entre){
				$entreid = $_SESSION['user'];

				
				$fname = trim($entre['fname']);
				$gender = trim($entre['gender']);
				$company = trim($entre['company']);
				$complocation = trim($entre['complocation']);
				$cert = trim($entre['cert']);
				$certlocation = trim($entre['certlocation']);
				

				$query = "UPDATE user_signup SET

					fullname = '$fname',
					gender = '$gender',
					company_name = '$company',
					company_location = '$complocation',
					certificate_name = '$cert',
					certificate_location = '$certlocation'
					
					where user_id = '$entreid'";

					

					  $this->conn->query($query);
				
					

			}
			
			function upload_prof($file_array){
				$allowed = ["image/jpeg","image/jpg","image/png","image/gif"];
				$filename = $file_array['name'];
				$filesize = $file_array['size'];
				$filetype = $file_array['type'];
				$tmp = $file_array['tmp_name'];

				$extension = pathinfo($filename, PATHINFO_EXTENSION);


				$error = array();
				if($filename ==''){
					$error[] = 'Please Choose a File';
				}

				if($filesize > 2097152){
					$error[] = 'File Too Large';
				}

				if(!in_array($filetype, $allowed)){
					$error[] = 'The file is not allowed';
				}

				if(empty($error)){
					$finalfile = rand().'.'.$extension;
					$destination = "mempic/$finalfile";
					move_uploaded_file($tmp, $destination);
					$id = $_SESSION['user'];
					$query = "UPDATE user_signup SET entre_pix = '$finalfile'
								where user_id = '$id'";
							$this->conn->query($query);


				}
				else{
					print_r($file_array);
				}

			} 



			
			




			

			
			


			function get_topic(){
				$query = "SELECT * FROM topic_table";
				$res = $this->conn->query($query);


				echo "<select class='custom-select' name='topics'>";
				echo "<option>Choose Topic You Want To Post About</option>";
				while($records = $res->fetch_assoc()){
					$topicname = $records['topics'];
					$topicid = $records['topics_id'];

					$_SESSION['tops'] = $topicid; 
				 echo "<option value='$topicid'>$topicname</option>";
				 
				}
				echo "</select>";
			}
	
			function get_topic2(){
				$query = "SELECT * FROM topic_table";
				$res = $this->conn->query($query);

				
				while($records = $res->fetch_assoc()){
					$topicname = $records['topics'];
					
					echo "<a href='#' style='text-decoration:none'>&nbsp; &nbsp;$topicname  &nbsp; &nbsp;</a>";
				 
				}
				
			}
	

			function get_topic3(){
				$query = "SELECT * FROM topic_table";
				$res = $this->conn->query($query);

				
				while($records = $res->fetch_assoc()){
					$topicname = $records['topics'];

					

					$_SESSION['topic'] = $topicname;


					echo "<div class='row'><div class='col'><br>$topicname&nbsp; &nbsp; &nbsp;<input type='checkbox' class='top'></div></div>";
					}
				
			}
	
			
			





			function login_user($username, $password){
				$query = "SELECT * FROM user_signup where 
						username= '$username'
						 and
						password = '$password'
						
						";
						

						$result = $this->conn->query($query);

						if($result->num_rows > 0){
							
							$row = $result->fetch_assoc();
							$_SESSION['user'] = $row['user_id'];
							
								header('location:mainsite.php');
						}
						else
						{
							header('location:mainproject.php');
						}



			}

			



			function insert_post($top, $user, $topicid){
				

			$query = "INSERT INTO post_table SET
					post_content = '$top',
					user_id = '$user',
					topics_id = '$topicid'
				
					
					";

			  $top = $this->conn->query($query);
			  $id = $this->conn->insert_id;

			 if($id > 0){
			 	$_SESSION['top'] = $id;
			 	header('location:mainsite.php');
			 }
			  

			  
		}



		function get_post($id){
			$query = "SELECT * FROM post_table where post_content ='$id' ";

			 $_SESSION['post'] = $id;

				$res = $this->conn->query($query);
				$records = array();

				while($result = $res->fetch_assoc()){
						$records[] = $result;
				}
				return $records;

		}

		function get_user_post_topic(){
			$query = "SELECT * FROM post_table 
			JOIN user_signup 
			ON post_table.user_id=user_signup.user_id 
			JOIN topic_table 
			ON post_table.topics_id = topic_table.topics_id ORDER BY post_date
			
			";

			 // $ent = $_SESSION['user'];

			$tot = $this->conn->query($query);

			$rec = array();
			while($pos = $tot->fetch_assoc()){
				$rec[] = $pos;

			}

			return $rec;

		}

		function search(){
			$query = "SELECT * FROM topic_table where topics like'%'";

			$ser = $this->conn->query($query);

			$get = array();
			while($serh = $ser->fetch_assoc()){
				$get[] = $serh;
			}

			return $get;
 
		}

		

 
}


?>