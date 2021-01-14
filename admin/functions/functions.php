<?php

//************* Some helper function  *********/

// for redirecting page
function Redirect_to($location)
{
    header("Location:{$location}");
    exit;
}
// Display Messages through sessions
function errorMsg()
{
    if (isset($_SESSION['error'])) {
        $Output = "<div class='alert alert-danger alert-dismissible fade show '>";
        $Output .= htmlentities($_SESSION['error']);
        $Output .= "<button type='button'class='close' data-dismiss='alert' aria-label='Close'>";
        $Output .= "<span aria-hidden='true'>&times;</span>";
        $Output .= '</div>';

        echo $Output;
        unset($_SESSION['error']);
    }
}
function successMsg()
{
    if (isset($_SESSION['success'])) {
        $Output = "<div class='alert alert-success alert-dismissible fade show '>";
        $Output .= htmlentities($_SESSION['success']);
        $Output .= "<button type='button'class='close' data-dismiss='alert' aria-label='Close'>";
        $Output .= "<span aria-hidden='true'>&times;</span>";
        $Output .= '</div>';

        echo $Output;
        unset($_SESSION['success']);
    }
}

// validation errors in form
// we can alao use delimitter so that we dont have to worry anout .= things :) means we can use html code

function validation_errors($error_message)
{
    $error_message = <<<DELIMITER

<div class="alert alert-danger alert-dismissible " role="alert">
     <strong> WARNING:!</strong> $error_message
     <button type="button" class="close" data-dismiss="alert" aria-label="Close">
     <span aria-hidden="true">&times;</span>
     </button>
</div>
DELIMITER;
    return $error_message;
}

// check if emqil is already existed
function email_Exist($email)
{
    $sql = " SELECT * FROM users WHERE u_email = '$email' ";
    $result = query($sql);
    confirm($result);
    if (row_count($result) > 0) {
        return true;
    } else {
        return false;
    }
}








// ***************    Add guest ***************** ///


// add post into database
function add_guest()
{
    if (isset($_POST['add-guest'])) {
        $name = escape($_POST['name']);
        $url = escape($_POST['url']);
        $notes = escape($_POST['notes']);

        // For image feature
        $image_name = $_FILES['post_image']['name']; // file name
        $image_tmp_name = $_FILES['post_image']['tmp_name'];
        $image_size = $_FILES['post_image']['size']; // file size

        $image_ext = explode('.', $image_name); // we get two parts here first name and second extention

        $image_actual_ext = strtolower(end($image_ext));

        $allowed_files = ['jpg', 'jpeg', 'png'];

        $errors = [];

        if (empty($name) || empty($url) || empty($notes)) {
            $errors[] = 'all fields are required';
        }

        if (!in_array($image_actual_ext, $allowed_files)) {
            $errors[] = 'Only jpg and png file can be upload';
        } else {
            $image_new_name = uniqid('', true) . '.' . $image_actual_ext;
        }


        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo validation_errors($error);
            }
        } else {
            $sql = " INSERT INTO guests(u_name,u_image,u_url, u_notes)  ";
            $sql .= " VALUES('$name', '$image_new_name' ,'$url', '$notes')";
            $executeSql = query($sql);
            confirm($executeSql);
            if ($executeSql) {
              move_uploaded_file($image_tmp_name, "assets/img/guests/$image_new_name");
                $_SESSION['success'] = 'You has been Added successfully';
                Redirect_to('index.php');
            }
        }
    }
}



// delete post
function guest_delete()
{
    if (isset($_GET['delete'])) {
        $g_delete_id = $_GET['delete'];

        // delete image from upload folder when deleting record from pur DB.

        $deleteImage = " SELECT * FROM guests WHERE u_id = '$g_delete_id' ";
        $execute = query($deleteImage);
        $row = fetch_array($execute);
        $image1 = $row['u_image'];

        unlink("../assets/img/guests/$image1");

        $sql = " DELETE FROM guests WHERE u_id = '$g_delete_id' ";
        $execute = query($sql);
        confirm($execute);
        if ($execute) {
            $_SESSION['success'] = 'guest has been deleted successfully';
            Redirect_to('guests.php');
        }
    }
}


 // login admin and user
 $login_errors = [];

 function user_login()
 {
     global $login_errors;

     if (isset($_POST['login'])) {
         $userEmail = escape($_POST['email']);
         $userPassword = escape($_POST['password']);

         $sql = " SELECT * FROM users WHERE u_email = '$userEmail'  ";

         $result = query($sql);

         if ($row = fetch_array($result)) {
             $dbPassword = $row['u_password'];
             $pwdCheck = password_verify($userPassword, $dbPassword);
             $db_u_id = $row['user_id'];
             $db_u_email = $row['u_email'];
             $db_u_name = $row['u_name'];

             // end of while loop
             if ($pwdCheck == true) {
                 $_SESSION['uId'] = $db_u_id;
                 $_SESSION['uName'] = $db_u_name;
                 $_SESSION['success'] = "Welcome Back! {$_SESSION['uName']}  ";
                 Redirect_to('index.php');
             } else {
                 $login_errors['p'] = 'Invalid Password';
             }
         } else {
             $login_errors['u'] = 'Invalid Username';
         } // end of else
     } // end of if isset(login)
 } // end of user login function


 // if login

 function login()
 {
     if (isset($_SESSION['uId'])) {
         return true;
     }
 }

// restirction login

function confirm_login()
{
    if (!login()) {
        Redirect_to('login.php');
    }
}









// add user

function add_user()
{
    if (isset($_POST['add-admin'])) {
        $u_name = escape($_POST['name']);
        $u_email = escape($_POST['email']);
        $u_password = escape($_POST['password']);
        $u_c_password= escape($_POST['c-password']);





        $errors = [];

        if (empty($u_name) || empty($u_email) || empty($u_password) || empty($u_c_password)) {
            $errors[] = 'all fields are required';
        }
        if ($u_password !== $u_c_password) {
            $errors[] = 'password do not match';
        }

        if (email_Exist($u_email)) {
            $errors[] = 'Sorry email is already existed';
        }




        if (!empty($errors)) {
            foreach ($errors as $error) {
                echo validation_errors($error);
            }
        } else {
            $hashedPassword = password_hash($u_password, PASSWORD_DEFAULT);
            $sql = 'INSERT INTO users(u_name, u_email, u_password) ';
            $sql .= "VALUES('$u_name' , '$u_email' , '$hashedPassword')";
            $executeSql = query($sql);
            confirm($executeSql);
            if ($executeSql) {
                $_SESSION['success'] = 'Admin has been Added successfully';
                Redirect_to('users.php');
            }
        }
    }
}
// user delete
function u_delete()
{
    if (isset($_GET['delete'])) {
        $user_delete_id = $_GET['delete'];

        $sql = " DELETE FROM users WHERE user_id = '$user_delete_id' ";
        $execute = query($sql);
        confirm($execute);
        if ($execute) {
            $_SESSION['success'] = 'User has been deleted successfully';
            Redirect_to('users.php');
        }
    }
}


// update user
function update_admin()
{
    if (isset($_POST['update-admin'])) {
        $user_id = $_GET['edit'];
        $u_name = escape($_POST['name']);

        $u_email = escape($_POST['email']);
        $u_pass = escape($_POST['password']);

        $sql_u_mail = " SELECT * FROM users WHERE u_email = '$u_email' AND user_id != '$user_id' ";
        $result_mail = query($sql_u_mail);

        $errors = [];

        if (empty($u_name)  || empty($u_email)) {
            $errors[] = 'user field and email fields cant be empty';
        }
        if (empty($u_pass)) {
            $errors[] = 'password fields cant be empty';
        }

        if (row_count($result_mail) > 0) {
            $errors[] = 'Email already existed';
        }


        if (!empty($u_pass)) {
            $sql_user = " SELECT u_password FROM users WHERE user_id = '$user_id' ";
            $result_user = query($sql_user);
            confirm($result_user);
            $row = fetch_array($result_user);
            $db_u_password = $row['u_password'];

            if ($db_u_password != $u_pass) {
                $hashed_pass = password_hash($u_pass, PASSWORD_DEFAULT);
            }
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo validation_errors($error);
                }
            } else {
                $sql = " UPDATE users SET u_name = '$u_name' , u_password = '$hashed_pass' , u_email = '$u_email'  ";
                $sql .= " WHERE user_id = $user_id ";
                $executeSql = query($sql);
                confirm($executeSql);
                if ($executeSql) {
                    $_SESSION['success'] = 'user has been updated successfully';
                    Redirect_to('users.php');
                }
            }
        }
    }
}
