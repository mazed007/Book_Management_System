<?php

$message = "";

                                                        if (isset($_POST['submit'])) {


                                                            $bookname = $_POST['bookname'];

                                                            $authorname = $_POST['authorname'];
                                                            $publishdate = $_POST['publishdate'];

                                                            $category = $_POST['category'];

                                                            $description = $_POST['description'];



                                                            $query = "insert into addbook(bookname,authorname,publishdate,description,category)values('$bookname','$authorname','$publishdate','$description','$category')";
                                                            $run = mysqli_query($conn, $query);

                                                            if ($run) {

                                                                echo "data insert successfuly";
                                                            } else {
                                                                echo "error:" . mysqli_error($conn);
                                                            }
                                                        }else if(isset($_POST['bookDelete'])){
                                                          $id = $_POST['id'];
                                                         $query="delete from addbook where id = ". $id;
                                                         $run=mysqli_query($conn,$query);
                                                         if($run){
                                                           $message = "Data Delete successfuly";
                                                        }
                                                        else{
                                                           $message = "error:".mysqli_error($conn);
                                                        }

                                                             }
                                                        ?>