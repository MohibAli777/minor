<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Add Product</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- <<<<<<<<<<<<  Navbar  >>>>>>>>>>>>> -->
    <div class="navbar">
        <a href="#" class="navbar-brand">Gametopia</a>
        <div class="user-info">
        <i class="fa-solid fa-user admin"></i>
            <span><strong>Hello </strong><?php echo $_SESSION['admin']; ?></span>
            <button><a href="#" class="logout-option">Logout</a></button>
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
    <!-- <<<<<<<<<<<<  Table  >>>>>>>>>>>>> -->
    <div class="container">
        <h2>Product Details</h2>
        <div class="table-container">
            <table>
            <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Category</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead> <img src="" alt="">
                <tbody>
                    <?php
                        include 'config.php';
                        $record = mysqli_query($con, "SELECT * FROM `product_table`");
                        while($row = mysqli_fetch_array($record))
                        echo "
                        <tr>
                            <td>$row[Id]</td>
                            <td>$row[Pname]</td>
                            <td>$row[Pprice]</td>
                            <td><img src='$row[Pimage]'></td>
                            <td>$row[Pcategory]</td>
                           
                        </tr>
                        ";
                    ?>
                </tbody>
                
            </table>
        </div>
    </div>
</body>
</html>
<!-- 8905150881c -->