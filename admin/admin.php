<?php include '../inc-cus/link.php';?>

<?php
if (isset($_POST['approve'])) {
    $user_id = $_POST['user_id'];
    $sql = "UPDATE r_o_details SET Requests='Approved' WHERE r_o_id='$user_id'";
    mysqli_query($con, $sql);
    ?>
    <script>
        alert("Request approved successfully!");
    </script>
    <?php
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}

if (isset($_POST['reject'])) {
    $user_id = $_POST['user_id'];
    $sql = "UPDATE r_o_details SET Requests='Rejected' WHERE r_o_id='$user_id'";
    mysqli_query($con, $sql);
    ?>
     <script>
        alert("Request rejected successfully!");
    </script>
    <?php
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}
if (isset($_POST['approvee'])) {
    $user_id = $_POST['userr_id'];
    $sql = "UPDATE d_details SET Requests='Approved' WHERE d_id='$user_id'";
    mysqli_query($con, $sql);
    ?>
    <script>
        alert("Request approved successfully!");
    </script>
    <?php
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}

if (isset($_POST['rejectt'])) {
    $user_id = $_POST['userr_id'];
    $sql = "UPDATE d_details SET Requests='Rejected' WHERE d_id='$user_id'";
    mysqli_query($con, $sql);
    ?>
     <script>
        alert("Request rejected successfully!");
    </script>
    <?php
    header("Location: $_SERVER[PHP_SELF]");
    exit;
}
?>



<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin panel</title>
    
    <style>
    h1 {
        text-align: center;
        font-size: 2.5em;
        font-weight: bold;
        padding-top: 1em;
    }
    </style>
</head>

<body class="bg-light">

    <!-- navbar -->
    <?php
      include 'a-header.php';
      ?>
    <!-- navbar end -->

    <h1>Admin panel</h1>

    <div class="container">
    <?php if (!isset($_SESSION['admin_logged_in'])): ?>
            <p>Please log in to access the restaurant and delivery sides.</p>
        <?php else: ?>
        <h3>Restaurant side</h3>
        <?php
        $sql="SELECT * FROM r_o_details WHERE Requests='Pending'";
        $result = mysqli_query($con, $sql);
        ?>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>#</th>
                <th>Restaurant name</th>
                <th>Mobile number</th>
                <th>Address</th>
                <th>Actions</th>
                <!-- <th>Action</th> -->
            </thead>
            <tbody>
                <?php while ($row=$result->fetch_assoc())
                {?>
                <tr>
                <td><?php echo $row['r_o_id']?></td>
                <td><?php echo $row['res_name']?></td>
                <td><?php echo $row['res_phone']?></td>
                <td><?php echo $row['res_address']?></td>
                <td>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display:inline;">
                    <input type="hidden" name="user_id" value="<?php echo $row['r_o_id'];?>">
                    <input type="submit" class="btn btn-outline-success" name="approve" value="Approve">
                </form>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display:inline;">
                    <input type="hidden" name="user_id" value="<?php echo $row['r_o_id'];?>">
                    <input type="submit" class="btn btn-outline-danger" name="reject" value="Reject">
                </form>
                </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
        <?php
        // $con->close();
        ?>
    </div>
    <div class="container">
        <h3>Delivery side</h3>
        <?php
        $sql="SELECT * FROM d_details WHERE Requests='Pending'";
        $result = mysqli_query($con, $sql);
        ?>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <th>#</th>
                <th>Delivery boy name</th>
                <th>Mobile number</th>
                <th>Address</th>
                <th>Actions</th>
                <!-- <th>Action</th> -->
            </thead>
            <tbody>
                <?php while ($row=$result->fetch_assoc())
                {?>
                <tr>
                <td><?php echo $row['d_id']?></td>
                <td><?php echo $row['d_name']?></td>
                <td><?php echo $row['d_phone']?></td>
                <td><?php echo $row['d_address']?></td>
                <td>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display:inline;">
                    <input type="hidden" name="userr_id" value="<?php echo $row['d_id'];?>">
                    <input type="submit" class="btn btn-outline-success" name="approvee" value="Approve">
                </form>
                <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" style="display:inline;">
                    <input type="hidden" name="userr_id" value="<?php echo $row['d_id'];?>">
                    <input type="submit" class="btn btn-outline-danger" name="rejectt" value="Reject">
                </form>
                </td>
                </tr>
                <?php } ?>
            </tbody>

        </table>
    </div>
    <?php endif; ?>
    <script>
    let login_form = document.getElementById('login-form');

    login_form.addEventListener('submit', function(e) {
        e.preventDefault();

        let data = new FormData();

        data.append('email_mob', login_form.elements['email_mob'].value);
        data.append('pass', login_form.elements['pass'].value);
        data.append('login', '');

        var myModal = document.getElementById("loginModal");
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();


        let xhr = new XMLHttpRequest();
        xhr.open("POST", "../ajax/login_register(a).php", true);

        xhr.onload = function() {
            let responseText = this.responseText.split(' ').pop();
            //console.log(responseText)
            switch (responseText) {
                case '0':
                    alert("Invalid Email or Mobile Number!");
                    break;
                case '4':
                    alert("Incorrect Password!");
                    break;
                default:
                    alert('Login successfully');
                    location.reload();

            }
        };


        xhr.send(data);
    });
    </script>
</body>

</html>
