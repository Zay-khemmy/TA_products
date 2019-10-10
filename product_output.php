<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Products</title>
    <style>
    
    </style>
</head>
<body>
        <!-- main container -->
<div class="container">
    <div class="logo">
        <div class="ta">
            <img src="images/techadvance.png" srcset="images/techadvance2.png 2x, images/techadvance3.png 3x">
        </div>
        <div class="division">
            <div class="growth">
                <img class="image" src="images/polygon1.png" srcset="images/polygon2.png 2x, images/polygon3.png 3x">
                <p class="sales_growth">Sales Growth</p><br>
                <img class="image" src="images/poly1.png" srcset="images/poly2.png 2x, images/poly3.png 3x">
                <p class="sales_growth" style="color: #ff0000;">Sales Decline</p>
            </div>
            <div class="growth_two">
                <img class="image" src="images/ellipse_1.png" srcset="images/ellipse_2.png 2x, images/ellipse_3.png 3x">
                <p class="sales_growth" style="color: #19d19b;">Live Product</p><br>
                <img class="image" src="images/ellipse1.png" srcset="images/ellipse2.png 2x, images/ellipse3.png 3x">
                <p class="sales_growth" style="color: #f2cc05;">Products in Development</p>
            </div>
        </div>
    </div>

    <div class="container" class="container_design">
    <div class='row'>
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

        $sql = "SELECT id, product_name, image_name, status_id, lastweek, thisweek FROM ta_live_products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
    
                $lastweek = $row["lastweek"];
                $thisweek = $row["thisweek"];
                $calculate = ($lastweek - $thisweek) * 100;
                $value = round(abs($calculate / $lastweek));
                $folder = 'images/';
                $url = $folder.$row['image_name'];
                $percent = '%';
                if ($lastweek > $thisweek) {
                    $image1 = '<img class="image1" src="images/polygon1.png" srcset="images/polygon2.png 2x, images/polygon3.png 3x">';
                }else {
                    $image1 = '<img class="image1" src="images/poly1.png" srcset="images/poly2.png 2x, images/poly3.png 3x">';
                }
                 echo "<div class='col-md-4'>
                            <div class='card card_style'>
                                <img class='img image_style' src='$url'>
                                <h6 class='text-success image_text'> $image1 $value $percent</h6>
                            </div>
                        </div>";
            }
        }
    $conn->close();
    ?>

      </div>  <!-- row close -->
    <div class='row'>
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
        
        $sql = "SELECT id, product_name, image_name, status_id FROM developing_products";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $complete = '50% COMPLETE';
                $folder = 'images/';
                $url = $folder.$row['image_name'];
                 echo "<div class='col-md-12'>
                            <div class='card card_style2'>
                                <div style='display:inline-block;'><img class='img image_style2' src='$url'></div>
                                <h6 class='text-primary text_style'>$complete</h6>
                            </div>
                        </div>";
            }
        }
        $conn->close();
      ?>
    </div>
    </div> <!-- container -->
</div>  <!-- main container -->
</body>
</html>

<!-- <h4 class='text-danger'>". $row["status_id"]."</h4> -->