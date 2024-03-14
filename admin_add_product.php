<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar with User Info</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
    <link rel="stylesheet" href="style.css">
</head>
<?php
    session_start();
    if(!$_SESSION['admin']){
        header("location:login.php");
    }
?>
<body>
    <!-- <<<<<<<<<<<<  Navbar  >>>>>>>>>>>>> -->
    <div class="navbar">
        <a href="#" class="navbar-brand">Gametopia</a>
        <div class="user-info">
        <i class="fa-solid fa-user admin"></i>
            <span><strong>Hello </strong><?php echo $_SESSION['admin']; ?></span>
            <button class="logout"><a href="logout.php" class="logout-option"><i class="fa-solid fa-right-from-bracket"></i>Logout</a></button>
        </div>
    </div>
    <!-- <<<<<<<<<<<<  Sidebar  >>>>>>>>>>>>> -->
    <div class="sidebar">
        <h2>Dashboard</h2>
        <ul>
            <li><a href="#"><i class="fa-solid fa-house"></i>Dashboard</a></li>
            <li><a href="admin_add_product.php"><i class="fa-solid fa-cart-shopping"></i>Add products</a></li>
            <li><a href="admin_table.php"><i class="fa-solid fa-box"></i>Products</a></li>
            <li><a href="#"><i class="fa-solid fa-user"></i>Customers</a></li>
        </ul>
    </div>
    <!-- <<<<<<<<<<<<<<< Add Table >>>>>>>>>>>>>>>  -->
    <div class="cont">
        <h2>Add Product</h2>
        <form action="insert.php" method="POST" id="productForm" enctype="multipart/form-data">
            <div class="form-group">
                <label for="productName">Product Name:</label>
                <input type="text" id="productName" name="Pname" required>
            </div>
            <div class="form-group">
                <label for="productPrice">Product Price:</label>
                <input type="text" id="productPrice" name="Pprice" required>
            </div>
            <div class="form-group">
                <label for="productImage">Product Image:</label>
                <input type="file" id="productImage" name="Pimage" accept="image/*" required>
            </div>
            <div class="form-group">
                <label for="productCategory">Product Category:</label>
                <select id="productCategory" name="Pages" required>
                <option value="">Select Category</option>
                <option value="Electronics">PC Game</option>
                <option value="Clothing">Xbox Game</option>
                <option value="Books">PS Game</option>
                </select>
            </div>
            <button type="submit" name="submit" class="sub">Add Product</button>
        </form>
    </div>
</body>
</html>
<!-- 8905150881c -->