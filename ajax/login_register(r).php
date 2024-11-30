<?php
include('../inc-cus/link.php');

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

    $u_exist = select("SELECT * FROM `r_o_details` WHERE `res_email`=? OR `res_phone`=? LIMIT 1",
    [$data['res-email'],$data['res-mobile']],'si');

    if(mysqli_num_rows($u_exist)!=0)
    {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['res_email']) == $data['res-email'] ? '2' : '3';
        exit;
    }
    $query = "INSERT INTO r_o_details(r_o_name,r_o_email,r_o_phone,r_o_username,r_o_password,r_o_address,r_o_bankname,r_o_branchname,r_o_account,r_o_ifsc,res_name,res_email,res_phone,res_address,res_fssai)
    VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        
    $values = [$data['name'],$data['email'],$data['mobile'],$data['username'],$data['password'],$data['address'],$data['bank-name'],$data['branch-name'],$data['account-no'],$data['ifsc-code'],$data['res-name'],$data['res-email'],$data['res-mobile'],$data['res-address'],$data['res-fssai']];
    
    if(insert($query,$values,'ssisssssiisssss')){
        echo 5;
    }
    else{
        echo 4;
    }
}
if(isset($_POST['login']))
    {
        $data = filteration($_POST);

        $u_exist = select("SELECT * FROM `r_o_details` WHERE `r_o_email`=? OR `r_o_phone`=? LIMIT 1",
        [$data['email_mob'],$data['email_mob']],"ss");

        if(mysqli_num_rows($u_exist)==0)
        {
            echo 0;
            exit;
        }
        $u_fetch = mysqli_fetch_assoc($u_exist);
        
        if($u_fetch['Requests'] === 'Pending' || $u_fetch['Requests'] === 'Rejected') 
        {
            echo 5; // Account status not allowed for login
        }
       
        else{
            // $u_fetch = mysqli_fetch_assoc($u_exist);
            if($u_fetch['status']==0){
                echo 2;
                exit;
            }
            else{
                if($data['password']!=$u_fetch['r_o_password'])
                {
                    echo 4;
                    exit;
                }
                else{
                    
                    $_SESSION['login'] = true;
                    $_SESSION['r_o_id'] = $u_fetch['r_o_id']; 
                    $_SESSION['name'] = $u_fetch['res_name']; 
                    $_SESSION['mobile'] = $u_fetch['r_o_phone'];
                    echo 1;
                }
            }
        }
    }


?>