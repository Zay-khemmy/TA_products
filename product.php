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
echo "Connected successfully";
    //create a ta_live_products table
// $sql = "CREATE TABLE ta_live_products(
//             id INT(6) AUTO_INCREMENT PRIMARY KEY,
//             product_name VARCHAR(50) NOT NULL,
//             image_name VARCHAR(50) NOT NULL,
//             status_id INT(5) NOT NULL,
//             rate DECIMAL(5,4) NOT NULL,
//             lastweek INT(20) NOT NULL,
//             thisweek INT(20) NOT NULL
//         )";
        
//         if ($conn->query($sql) === TRUE) {
//             echo "ta_live_products created successfully";
//         } else {
//             echo "Error creating table: " . $conn->error;
//         }
        // create a developing products table
        // $sql = "CREATE TABLE developing_products(
        //     id INT(6) AUTO_INCREMENT PRIMARY KEY,
        //     product_name VARCHAR(50) NOT NULL,
        //     image_name VARCHAR(50) NOT NULL,
        //     status_id INT(5) NOT NULL,
        //     rate DECIMAL(5,4) NOT NULL
        // )";
        
        // if ($conn->query($sql) === TRUE) {
        //     echo "developing_products created successfully";
        // } else {
        //     echo "Error creating table: " . $conn->error;
        // }

    
    // insert into ta_live_products
// $sql = "INSERT INTO ta_live_products (product_name, image_name, status_id, lastweek, thisweek)
//         VALUES ('Pay Electricity Bills', 'peb3.jpg', '1', '4000', '2000');";
// $sql .= "INSERT INTO ta_live_products (product_name, image_name, status_id, lastweek, thisweek)
//          VALUES ('EKO Electricity Distribution Company', 'eko3.jpg', '1', '2000', '6000');";
// $sql .= "INSERT INTO ta_live_products (product_name, image_name, status_id, lastweek, thisweek)
//          VALUES ('KANO Electricity Distribution Company', 'kano3.jpg', '1', '6000', '3000');";
// $sql .= "INSERT INTO ta_live_products (product_name, image_name, status_id, lastweek, thisweek)
//          VALUES ('JOS Electricity Distribution Company', 'jos3.jpg', '1', '3000', '5000');";
// $sql .= "INSERT INTO ta_live_products (product_name, image_name, status_id, lastweek, thisweek)
//          VALUES ('WONDAFU', 'wonderfu3.jpg', '1', '5000', '7000')";

// if ($conn->multi_query($sql) === TRUE) {
//         echo "New records created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }


    // insert into developing_products
// $sql = "INSERT INTO developing_products (product_name, image_name, status_id)
//         VALUES ('SHIRIN', 'shirin3.png', '1');";
// $sql .= "INSERT INTO developing_products (product_name, image_name, status_id)
//        VALUES ('BUY BOT', 'buybot.png', '1')";
// if ($conn->multi_query($sql) === TRUE) {
//         echo "New records created successfully";
//     } else {
//         echo "Error: " . $sql . "<br>" . $conn->error;
//     }


$conn->close();
?>