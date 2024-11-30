<?php
$db_host = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "foodweb";

// session_start();
$con = new mysqli($db_host, $db_username, $db_password, $db_name);


if (!$con->connect_error) 
{
    // echo "connect";
}
else{
    echo "error";
}

function filteration($data)
{
    foreach ($data as $key => $value) {
        // trim() remove extra spaces
        // stripslashes() remove backword slashes
        // htmlspecialchars() convert special character to html entities
        // strip_tags() remove html tags
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        $value = strip_tags($value);

        $data[$key] = $value;
    }
    return $data;
}
     

function select($sql, $values, $datatype)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatype,...$values);//spread operator
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_get_result($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }  
        else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed -Select");
        }
    }
    else {
        die("query cannot be prepared -Select");
    }
}

function insert($sql, $values, $datatype)
{
    $con = $GLOBALS['con'];
    if ($stmt = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($stmt, $datatype,...$values);//spread operator
        if (mysqli_stmt_execute($stmt)) {
            $res = mysqli_stmt_affected_rows($stmt);
            mysqli_stmt_close($stmt);
            return $res;
        }  
        else {
            mysqli_stmt_close($stmt);
            die("query cannot be executed -Insert");
        }
    }
    else {
        die("query cannot be prepared -Insert");
    }
}
            // if(isset($_POST['submit']))
            // {
            
            //   $name=$_POST["name"];
            //   $email=$_POST["email"];
            //   $phone_no=$_POST["phone_number"];
            //   $username=$_POST["username"];
            //   $password=$_POST["password"];
            //   $address=$_POST["address"];
            //   $account=$_POST["account_no"];
            //   // $bank_name=$_POST["bank_name"];
            //   // $ifsc_code=$_POST["ifsc_code"];
            //   // $branch_name=$_POST["branch_name"];
            //     $errors=array();
            //      if(empty($name) OR empty($username) OR empty($email) OR empty($password) OR empty($address) OR empty($account) OR empty($phone_no))
            //      {
            //          $errors[]="Please fill all the fields";
            //      }
            //     //  $sql = "SELECT * FROM c_register 
            //     //             WHERE c_username = '$username'";
            //     //     $result=mysqli_query($conn,$sql);
            //     //     $rowcount=mysqli_num_rows($result);
            //     //         if ($rowcount > 0) 
            //     //         {
            //     //             array_push($errors,"Username already exists");
            //     //         } 
            //     //     $sql = "SELECT * FROM c_register 
            //     //     WHERE c_email = '$email'";
            //     //     $result=mysqli_query($conn,$sql);
            //     //     $rowcount=mysqli_num_rows($result);
            //     //         if ($rowcount > 0) 
            //     //         {
            //     //             array_push($errors,"Email-id already exists");
            //     //         } 
            //     if(count($errors)>0)
            //     {
            //         foreach($errors as $error)
            //         {
            //             echo "<div class='alert alert-danger'>$error</div>";
            //         }
            //     }
            //     else
            //     {
            //       $sql="INSERT INTO c_register(c_name,c_username,c_email,c_password,c_phone,c_bank_acc,c_address)
            //                     VALUES(?,?,?,?,?,?,?)";
            //                 $stmt=$conn->prepare($sql);
            //                 // $preparestmt=mysqli_stmt_prepare($stmt,$sql);
            //                 if($stmt)
            //                 {
            //                     $stmt->bind_param("sssssss",$name,$username,$email,$password,$phone_no,$account,$address);
            //                     $stmt->execute();
            //                     echo"<div class='alert alert-success'>You are registered sucessfully.</div>";
            //                     // header('Location: login.php');
            //                     $stmt->close();
            //                 }
            //                 else
            //                 {
            //                     echo "<div class='alert alert-danger'>Error in registration</div>";
            //                 }
            //     } 
            // }
        ?>