<?php

$message = "";

                        if(isset($_POST['submit'])){
                            
                            
                            $full_name=$_POST['full_name'];
                            
                            $address=$_POST['address'];
                            $date_of_birth=$_POST['date_of_birth'];

                            $description=$_POST['description'];

                            $gender=$_POST['gender'];

                            $country=$_POST['country'];

                            $query="insert into addauthor(full_name,address,date_of_birth,description,gender,country)values('$full_name','$address','$date_of_birth','$description','$gender','$country')";
                            $run=mysqli_query($conn,$query);
                            
                            if($run){
                                
                                $message = "data insert successfuly";
                            }
                            else{
                                $message = "error:".mysqli_error($conn);
                            }
                        } else if(isset($_POST['autherDelete'])){
                              $id = $_POST['id'];
                             $query="delete from addauthor where id = ". $id;
                             $run=mysqli_query($conn,$query);
                             if($run){
                               $message = "Data Delete successfuly";
                            }
                            else{
                               $message = "error:".mysqli_error($conn);
                            }

                        }
                    ?>