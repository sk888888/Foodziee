<?php
include('../inc-cus/link.php');

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// function sendMail($email,$v_code){
//     require '../PHPMailer/Exception.php';
//     require '../PHPMailer/PHPMailer.php';
//     require '../PHPMailer/SMTP.php';

//     $mail = new PHPMailer(true); //create object of class phpmailer and use of true because it use

//     try {
//         //Server settings
//         $mail->isSMTP();                                            //Send using SMTP
//         $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
//         $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
//         $mail->Username   = 'foodziee3@gmail.com';                     //SMTP username
//         $mail->Password   = 'meet@123';                               //SMTP password
//         $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
//         $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
//         //Recipients
//         $mail->setFrom('foodziee9@gmail.com', 'Foodziee');
//         $mail->addAddress($email);     //Add a recipient
    
//         //Content
//         $mail->isHTML(true);                                  //Set email format to HTML
//         $mail->Subject = 'Email Verification from Foodziee';
//         $mail->Body    = "Thanks for registration!
//             Click the link below to verify the email address
//             <a href='http://localhost/foodziee/email_confirm.php?email=$email&v_code=$v_code'>Verify</a>";
        
//         $mail->send();
//         return true;
//     } 
//     catch (Exception $e) {
//         return false;
//     }
    
// }


if(isset($_POST['register']))
{
    $data = filteration($_POST);

    //match password and confirm password field

    if($data['password'] != $data['c_password'])
    {   
        echo '1' ;
        exit;
    }

    //check user exists or not

    $u_exist = select("SELECT * FROM `c_register` WHERE `c_email`=? OR `c_phone`=? LIMIT 1",
    [$data['email'],$data['phone_number']],'ss');

    if(mysqli_num_rows($u_exist)!=0)
    {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['c_email']) == $data['email'] ? '2' : '3';
        exit;
    }
    $v_code = bin2hex(random_bytes(16));
    $query = "INSERT INTO c_register(c_name,c_username,c_email,c_password,c_phone,c_address,verification_code,is_verified)
                                VALUES(?,?,?,?,?,?,?,?)";
        
    $values = [$data['name'],$data['username'],$data['email'],$data['password'],
    $data['phone_number'],$data['address'],'$v_code','0'];
    
    if(insert($query,$values,'sssssssi')){
        echo 5;
    }
    else{
        echo 4;
    }

}
if(isset($_POST['login']))
    {
        $data = filteration($_POST);

        $u_exist = select("SELECT * FROM `c_register` WHERE `c_email`=? OR `c_phone`=? LIMIT 1",
        [$data['email_mob'],$data['email_mob']],"ss");

        if(mysqli_num_rows($u_exist)==0)
        {
            echo 0;
            exit;
        }
        else{
            $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['c_status']==0){
                echo 2;
                exit;
            }
            else{
                if($data['pass']!=$u_fetch['c_password']){
                    echo 4;
                    exit;
                }
                else{
                    
                    $_SESSION['login'] = true;
                    $_SESSION['c_id'] = $u_fetch['c_id']; 
                    $_SESSION['name'] = $u_fetch['c_name']; 
                    $_SESSION['c_phone'] = $u_fetch['c_phone_number'];
                    echo 1;
                }
            }
        }
    }

?>