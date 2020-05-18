<?php

                        if(isset($_POST['submit'])){
                            
                            
                            $full_name=$_POST['full_name'];
                            
                            $address=$_POST['address'];
                            $date_of_birth=$_POST['date_of_birth'];

                            $description=$_POST['description'];

                            $gender=$_POST['gender'];

                            $country=$_POST['country'];

                            $query="update `addauthor` set full_name = '".$full_name."', address = '".$address."', date_of_birth = '".$date_of_birth."', description = '".$description."', gender = '".$gender."', country = '".$country."' where id =  ".$id;
                            $run=mysqli_query($conn,$query);
                            
                            if($run){
                                
                                echo"data update successfuly";
                            }
                            else{
                                echo"error:".mysqli_error($conn);
                            }
                        }
                    ?>