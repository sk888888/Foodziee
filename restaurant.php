<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php include 'inc-cus/link.php';?>
    <style>
        .form-check-input[type="checkbox"] 
        {
            background-color: lightgray; 
            border-color: lightgray;
        }
        .form-check-input[type="checkbox"]:checked 
        {
        background-color: green; 
        border-color: green;
        }
        .hidden{
            display: none;
        }
    </style>
</head>
<body class="bg-light">
<?php include 'inc-res/r-header.php';?>
<div class="container-fluid mb-5">
    <div class="row">
        <div class="col text-center">
            <!-- <h4 class="text-center">Manage orders</h4> -->
            <div class="form-check form-switch d-inline-block mx-auto">
                <input class="form-check-input" type="checkbox" id="toggle-switch" style="width: 30px;
                height: 20px;">
                <label class="form-check-label" for="toggle-switch"><h5>Manage orders</h5></label>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="offline-container">
    <div class="row">
        <div class="col text-center">
            <h3 class="mb-3">You Are Offline!!!</h3>
            <p style="font-size:20px;">Dear Partner,we noticed that you have switched OFF your outlet.<br>Please switch it ON to start receiving new orders</p>
        </div>
    </div>
</div>
<div class="container" id="table-container">
    <div class="row">
        <div class="col">
            <table  class="table table-bordered">
              <thead>
                <tr>
                    <th class="text-center">Order No.</th>
                    <th class="text-center">Token No.</th>
                    <th class="text-center">Ordered By</th>
                    <th class="text-center">Amount</th>
                    <th class="text-center">Action</th>
                    <th class="text-center">Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                    <td class="text-center">00001</td>
                    <td class="text-center">001</td>
                    <td class="text-center">meet padaliya</td>
                    <td class="text-center">$100.00</td>
                    <td class="text-center"><button class="btn btn-primary btn-sm">View</button></td>
                    <td class="text-center">ready</td>
                </tr>        
                <tr>
                    <td class="text-center">00002</td>
                    <td class="text-center">002</td>
                    <td class="text-center">mansi sathvara</td>
                    <td class="text-center">$200.00</td>
                    <td class="text-center"><button class="btn btn-primary btn-sm">View</button></td>
                    <td class="text-center">Preparing</td>
                </tr>        
                <tr>
                    <td class="text-center">00003</td>
                    <td class="text-center">003</td>
                    <td class="text-center">joypatel</td>
                    <td class="text-center">$300.00</td>
                    <td class="text-center"><button class="btn btn-primary btn-sm">View</button></td>
                    <td class="text-center">dispatch</td>
                </tr>
                <tr>
                    <td class="text-center">00004</td>
                    <td class="text-center">004</td>
                    <td class="text-center">selmon</td>
                    <td class="text-center">$350.00</td>
                    <td class="text-center"><button class="btn btn-primary btn-sm">View</button></td>
                    <td class="text-center">delivered</td>
                </tr>          
              </tbody>
            </table>
        </div>
    </div>
</div>
<script>
        const toggleSwitch = document.getElementById('toggle-switch');
        const offlineContainer = document.getElementById('offline-container');
        const tableContainer = document.getElementById('table-container');

        tableContainer.style.display = 'none';
        toggleSwitch.addEventListener('change', () => {
        if (toggleSwitch.checked) 
        {
            offlineContainer.style.display = 'none';
            tableContainer.style.display = 'block';
        } else 
        {
            offlineContainer.style.display = 'block';
            tableContainer.style.display = 'none';
        }
        });
</script>
<footer>
    <?php include 'inc-res/r-footer.php';?>
</footer>
</body>
</html>