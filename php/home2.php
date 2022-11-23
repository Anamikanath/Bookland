<header>
   
    <nav class="navbarheader navbar navbar-light navbar-expand-lg">
     <div><h1  id="f1" ><i class="fas fa-book">Bookland</i></h1>
    <span  id="f2" ><p id="p1">****A Zion for Bookworms</p>
    </span></div>
    <button class="navbar-toggler" type="button" data-toggle="collapse"
    data-target="#navbar-collapse">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="navbar-nav ml-auto">
            <li class="navbar-item ml-5">
           <a href="register.php" id="abc0">signup</a></button>
            </li>
            <li class="navbar-item ml-5">
            <a href="login.php" id="abc0">login</a>
            </li>
            <li class="navbar-item ml-5">
            <a href="cart.php" class="nav-item nav-link active">
                    <h5 id="abc0">
                        <i class="fas fa-shopping-cart"></i> Cart
                        <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span class=\"cart_count\" class=\"text-warning bg-light\">$count</span>";
                        }else{
                            echo "<span class=\"cart_count\" class=\"text-warning bg-light\">0</span>";
                        }

                        ?>
                    </h5>
                </a>
    
        </li>
        </ul>
    </div></nav>
    <div class="topnav">
        <a  href="index.php">Home</a>
        <a href="#educational">Educational</a>
        <a href="#novel">Novel</a>
        <a href="#literature">Literature</a>
        <a href="#science_fiction">Science Fiction</a>
        <a href="#comic">Comic</a>
        <a href="#fantasy">Fantasy</a>
        <a href="#horror">Horror</a>
        <a href="#detective">Detective</a>
        <a href="#mystery">Mystery</a>
        <a href="#action">Action</a>
        <a href="#others">Others</a>

      </div></div><br><br><br>
    
</header>