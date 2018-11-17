<?php
$servername = "localhost";
$username = "root";
$password = "080198";
$dbname = "tes";

$connection = mysqli_connect($servername, $username, $password, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }


$query = mysqli_query($connection,"SELECT product_categories.id AS id, product_categories.name AS name, GROUP_CONCAT(products.name SEPARATOR ',') AS name_product FROM product_categories LEFT JOIN products ON product_categories.id=products.category_id GROUP BY product_categories.id");
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
    .body{
        background-color: #eee;
    }
	</style>
</head>
<body class="body">
    <div class="container">
        <div class="">
            <h3>Bootcamp Test, Soal No 7</h3>
        </div>
        <hr>
        <div class="panel panel-primary">
            <div class="panel-heading">
                Menampilkan Data Dari Soal No 6 
            </div>
            <div class="panel-body">
                <table class="table">
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Product</th>
                    </tr>
                    <?php if(mysqli_num_rows($query)>0){ ?>
                    <?php
                        while($data = mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?php echo $data['id'] ?></td>
                        <td><?php echo $data["name"];?></td>
                        <td><?php echo $data["name_product"];?></td>
                    </tr>
                    <?php  } ?>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>

</body>
</html>