<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">
    <title>Shopping online</title>
</head>
<body>
    <center>
        <div class="main">
            <form method="post" action="insert.php" enctype="multipart/form-data">
                <h2>Welcome Into RN Store</h2>
                <img src="download5.jpeg" alt="logo" width="200px" style="border-radius: 30px;">
                <label>Name of Product: </label>
                <input type="text" name="name"><br/>
                <label>Price of Product: </label>
                <input type="text" name="price"><br/>
                <input type="file" name="image" id="file" style="display: none;">
                <label for="file" id="file">Upload Image</label>
                <button name="upload">Upload Product</button><br/><br/>
            </form>
            <a href="products.php">Display All Products</a>
        </div>
    </center>
</body>
</html>