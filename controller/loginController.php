<?php
	if(isset($_POST['login'])){
                    
                    extract($_POST);
                    
                    $query="select * from admin where email='$email' AND password='$password'";
                    
                    $run_query=mysqli_query($conn,$query);
                    if($run_query){
                    if(mysqli_num_rows($run_query)>0){

                        $_SESSION['email']=$email;
                        $_SESSION['password']=$password;
                        header("location:index.php");
                    }
                    else{
                        echo"<div class='alert alert-warning'><strong>warning!</strong>login not successfuly....</div>";
                    }
                    }
                }
?>