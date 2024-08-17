<?php
require('config.php');

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $price = $_POST['price'];
    $img = $_FILES['image'];
    $img_location = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_up ="img/". $img_name;

    $insert = "INSERT INTO products (name, price, image) VALUES (:name, :price, :img)";
    $stmt = $con->prepare($insert);
    if(move_uploaded_file($img_location, "img/".$img_name)){
        $stmt->execute(array(
            ':name' => $name,
            ':price'=> $price,
            ':img'=> $img_up
        ));
        echo "<script>alert('successfully')</script>";
    }else{
        echo "<script>alert(;failed')</script>";
    }
    //header("location:index.php");
}
?>