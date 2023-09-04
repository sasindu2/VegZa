<?php
 require_once '../config.php';

 if(isset($_POST['insert_product'])){

    $product_title=$_POST['product_title'];
    $product_stock=$_POST['product_stock'];
    $categories_id=$_POST['categories_id'];
    $product_expiry=$_POST['product_expiry'];
    $product_price=$_POST['product_price'];
    $product_description=$_POST['product_description'];
    
    $product_image=$_FILES['product_image']['name'];
    $tmp_image=$_FILES['product_image']['tmp_name'];
    
    if( $product_title=='' or $product_stock=='' or $categories_id=='' or $product_price=='' or $product_description==''){
        echo "<script> alert('Please fill all the available fields')</script>";
        exit();
    }else{
        
        //insert query
        $insert_product="INSERT INTO `products` (product_title,product_stock,categories_id,product_expiry,product_image,product_price,product_description,date) values('$product_title','$product_stock','$categories_id','$product_expiry','$product_image','$product_price','$product_description',NOW())";
        
        $result_query=mysqli_query($connection, $insert_product);
        if($result_query){
            move_uploaded_file($tmp_image,"../product_images/$product_image");
            echo "<script> alert('Successfully insert the product')</script>";
        }

    }

 }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Insert Item</title>
    <style>
        body {
            background-color: #f5f8fa;
        }
        .my-form {
            margin: 50px auto;
            max-width: 600px;
            padding: 30px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .my-form h4 {
            color: #4caf50; /* Green color for the title */
            margin-bottom: 20px;
            font-weight: bold; /* Make the title bold */
            text-align: center; /* Align the title to center */
            display: flex;
            align-items: center;
        }
        .my-form label {
            font-weight: bold;
        }
        .my-form .btn-primary {
            background-color: #4caf50; /* Green color for the button */
            border-color: #4caf50; /* Green color for the button border */
            
        }
        .my-form .btn-primary:hover {
            background-color: #45a049; /* Slightly darker shade on hover */
            border-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="my-form">
            <h4>Insert New Product</h4>
            
            <form name="my-form" action="Insert_item.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="product_title" class="col-md-4 col-form-label text-md-right">Product Title:</label>
                    <div class="col-md-8">
                        <input type="text" id="product_title" class="form-control" name="product_title" placeholder="Enter Product Title" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_stock" class="col-md-4 col-form-label text-md-right">Product Stock (kg):</label>
                    <div class="col-md-8">
                        <input type="number" id="product_stock" class="form-control" name="product_stock" placeholder="Enter Product Stock" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_cat" class="col-md-4 col-form-label text-md-right">Product Categories:</label>
                    <div class="col-md-8">
                        <select id="product_cat" name="categories_id" class="form-control" required>
                            <option value="0" selected>Vegitable</option>
                            <option value="1">Fruit</option>
                            <!-- Add options dynamically from PHP code--> 
                        </select>
                    </div>
               </div>
               <!-- <div class="form-group row">
                    <label for="product_type" class="col-md-4 col-form-label text-md-right">Product Type:</label>
                    <div class="col-md-8">
                        <input type="text" id="product_type" class="form-control" name="product_type" placeholder="Enter Product Type" required>
                    </div>
                </div>-->
                <div class="form-group row">
                    <label for="product_expiry" class="col-md-4 col-form-label text-md-right">Product Expiry:</label>
                    <div class="col-md-8">
                        <input type="date" id="product_expiry" class="form-control" name="product_expiry" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_image" class="col-md-4 col-form-label text-md-right">Product Image:</label>
                    <div class="col-md-8">
                        <input type="file" id="product_image" name="product_image" accept="image/*" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_price" class="col-md-4 col-form-label text-md-right">Product Price (Per kg):</label>
                    <div class="col-md-8">
                        <input type="number" id="product_price" class="form-control" name="product_price" step="0.01" placeholder="Enter Product Price" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="product_description" class="col-md-4 col-form-label text-md-right">Product Description:</label>
                    <div class="col-md-8">
                        <textarea id="product_description" class="form-control" name="product_description" rows="4" placeholder="Enter Product Description" required></textarea>
                    </div>
                </div>
                <!-- Add more fields and functionalities as needed -->
                <div class="form-group row">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary" name="insert_product">INSERT</button>
                        <button class="btn btn-primary"> <a href="../../home.php">Back to home page</a> </button>
                    </div>
                    
                </div>
            </form>
        </div>
    </div>
</body>
</html>