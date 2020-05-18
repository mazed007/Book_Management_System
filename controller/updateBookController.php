<?php

                                                        if (isset($_POST['submit'])) {


                                                            $bookname = $_POST['bookname'];

                                                            $authorname = $_POST['authorname'];
                                                            $publishdate = $_POST['publishdate'];

                                                            $category = $_POST['category'];

                                                            $description = $_POST['description'];



                                                           $query="update `addbook` set bookname = '".$bookname."', authorname = '".$authorname."', category = '".$category."', description = '".$description."' where id =  ".$id;
                                                            $run = mysqli_query($conn, $query);

                                                            if ($run) {

                                                                echo "book edit successfuly";
                                                            } else {
                                                                echo "error:" . mysqli_error($conn);
                                                            }
                                                        }
                                                        ?>