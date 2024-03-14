<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="homestyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Navbar -->
    <header>
        <!-- <input type="checkbox" name="" id="chk1"> -->
        <div class="logo"><h1>Gametopia</h1></div>
        <div class="search">
            <form action="">
                <input type="text" name="search" id="srch" placeholder="Search for Games,Category and More">
                <button type="submit">Search</button>
            </form>
        </div> 
        <ul>
            <li class="lis"><a href="#"><i class="fa-solid fa-house"></i>Home</a></li>
            <li class="lis"><a href="#"><i class="fa-solid fa-envelope"></i>Support</a></li>
            <li class="lis"><a href="#"><i class="fa-solid fa-cart-shopping"></i>Cart</a></li>
            <li class="lis"><a href="#"><i class="fa-solid fa-user"></i>Login</a></li>
        </ul>
    </header>
    <!-- Image Slider -->
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="img/1.png" alt="">
            </div>
            <div class="item">
                <img src="img/2.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/3.jpg" alt="">
            </div>
            <div class="item">
                <img src="img/1.png" alt="">
            </div>
        </div>
        <!-- slider button -->
        <div class="button">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <!-- Navigation dots -->
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <!-- Second Navbar -->
    <nav>
        <ul class="navbar-list">
          <li class="navbar-item"><a href="#">Action</a></li>
          <li class="navbar-item"><a href="#">Adventure</a></li>
          <li class="navbar-item"><a href="#">Simulation</a></li>
          <li class="navbar-item"><a href="#">Shooting</a></li>
          <li class="navbar-item"><a href="#">Racing</a></li>
          <li class="navbar-item"><a href="#">Sports</a></li>
          <li class="navbar-item"><a href="#">Survival</a></li>
          <li class="navbar-item"><a href="#">Horror</a></li>
          <li class="navbar-item"><a href="#">Puzzle</a></li>
        </ul>
      </nav>
    <!-- Cards PC -->
    <div class="cards-section">
        <h2 class="category-title">PC Games</h2>
        <button class="view-all-button">View All</button>
        <div class="cards-container">
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$19.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$24.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$14.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$29.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$39.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
      <hr>
      <!-- Cards Xbox -->
      <div class="cards-section">
        <h2 class="category-title">Xbox Games</h2>
        <button class="view-all-button">View All</button>
        <div class="cards-container">
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$19.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$24.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$14.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$29.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
          <div class="card">
            <img src="img/c1.jpg" alt="Product Image">
            <div class="card-content">
              <h2>Product Title</h2>
              <p>$39.99</p>
              <button class="buy-button">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    <script src="script.js"></script>
    
</body>
</html>