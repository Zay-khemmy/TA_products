<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Products</title>
    <!-- <style>
        .container{

        }
    </style> -->
</head>
<body>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "ta_products";
        $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
            // echo "Connected successfully";

        $sql = "SELECT id, product_name, image_name, status_id FROM ta_live_products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                 echo "<div class='row'>
                            <div class='col-lg-4'>
                                <div class='card'>
                                    <div class='card-body'>
                                        <h5 class='text-success'>". $row["product_name"]."</h5>
                                        <h4 class='text-danger'>". $row["status_id"]."</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
            }
        }
    $conn->close();
    ?>
</body>
</html>