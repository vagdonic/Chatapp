<?php

    include_once "config.php";

    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        // validating email
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            // if email is valid
            // check whether email is already used or not.
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
            if(mysqli_num_rows($sql) > 0){ // if true then email is already used.
                echo "$email - email already exists!";
            }else{
                // check whether file is uploaded or not.
                if(isset($_FILES['image'])){ // if file is uploaded
                    $img_name = $_FILES['image']['name']; // get user image name
                    $img_type = $_FILES['image']['type']; // get user image type
                    $tmp_name = $_FILES['image']['tmp_name']; // temp name of the file is saved in the folder.

                    // get image extension.
                    $img_explode = explode('.',$img_name);
                    $img_ext = end($img_explode);

                    $extensions = ['png', 'jpg', 'jpeg'];

                    if(in_array($img_ext, $extensions) === true){
                        $time = time(); // provides us the time of an image upload to later use as a name for storing those images.

                        // move uploaded image to a folder.
                        // we dont upload the image file to the db, rather upload a url to the particual folder where the files will be saved.

                        $new_img_name = $time.$img_name; // the file name will be time.filename. therfore, if user uploads 2 same files then they will have a unique name since they start with the time of upload.

                        if(move_uploaded_file($tmp_name,"images/".$new_img_name)){ // if img moves to the folder
                            
                            $status = "Active now"; // status chnages to 'active now' once signed up.
                            $random_id = rand(time(), 10000000); // for creating a random id for user.

                        // insert data:
                        $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, password, img, status) VALUES ({$random_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$new_img_name}', '{$status}')");

                        if($sql2){
                            $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                            if(mysqli_num_rows($sql3) > 0){
                                $row = mysqli_fetch_assoc($sql3);
                                $_SESSION['unique_id'] = $row['unique_id']; // for user's session id.
                                echo "success";
                            }
                        }
                        else{
                            echo "Something went wrong!";
                        }
                        }
                        else{
                            echo "image else";
                        }
                    }else{
                        echo "Please select an image file - png, jpeg, jpg!";
                    }

                }else{
                    echo "Please select an image file!";
                }
            }
        }else{
            echo "$email - is not a valid email.";
        }
    }else{
        echo "All input fields are required!";
    }

?>