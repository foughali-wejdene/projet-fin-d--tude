
<?php
//session_start();

require("config/commandes.php");


        
//$id = $_GET['id'];
//$qte = $_GET['qte'];
//récuperer id
//$Produits = getProduit($id);
$Produits=afficher();

if(isset($_GET['pdt'])){
    
    if(!empty($_GET['pdt']) OR is_numeric($_GET['pdt']))
    {
        $id = $_GET['pdt'];

    }
}

//print_r($_SESSION['id']);


?>
<header>
        <!-- Top Nav -->
<?php
                        if(isset($_SESSION['id']) AND $userinfo['id'] = $_SESSION['id']) {
                    ?>
        <div class="navigation">
            <div class="nav-center container d-flex">
                <a href="index.php?id=<?php echo $_SESSION['id'];?>" class="logo">
                    <h1>WIK</h1>
                </a>

                <ul class="nav-list d-flex">
                    <li class="nav-item">
                        <a href="index.php?id=<?php echo $_SESSION['id'];?>" class="nav-link">HOME</a>
                    </li>
                  
                    <li class="nav-item">
                        <a href="shop.php?id=<?php echo $_SESSION['id'];?>" class="nav-link">SHOP</a>
                    </li>
                    
                   
                    <li class="nav-item">
                        <a href="about.php" class="nav-link">ABOUT US</a>
                    </li>
                    <li class="nav-item">
                    <a href="profile.php?id=<?php echo $_SESSION['id'];?>"  class="nav-link">ACOUNT</a>
                    </li>


                </ul>
                       
                <div class="icons d-flex">
                    <a href="profile.php?id=<?php echo $_SESSION['id'];?>" class="icon">
                        <i class="bx bx-user"></i>
                    </a>
                    <a href="search.php" class="icon">
                        <i class="bx bx-search"></i>
                    </a>
                    <div class="icon">
                        <i class="bx bx-heart"></i>
                        <span class="d-flex">0</span>
                    </div>
                    <a href="panier.php?id=<?php echo $_SESSION['id'];?>" class="icon">
                        <i class="bx bx-cart"></i>
                        <span class="d-flex">0</span>
                    </a>
                    <a href="deconnexion.php" class="icon">
                        <i class="bx bx-log-out"></i>
                    </a>
                </div>

                <div class="hamburger">
                    <i class="bx bx-menu-alt-left"></i>
                </div>
            </div>
        </div>
        
    </header>
<?php
                        }else
                         {?>
                            <div class="navigation">
                            <div class="nav-center container d-flex">
                                <a href="index.php" class="logo">
                                    <h1>WIK</h1>
                                </a>
                
                                <ul class="nav-list d-flex">
                                    <li class="nav-item">
                                        <a href="index.php" class="nav-link">HOME</a>
                                    </li>
                                  
                                    <li class="nav-item">
                                        <a href="shop.php" class="nav-link">SHOP</a>
                                    </li>
                                    
                                   
                                    <li class="nav-item">
                                        <a href="about.php" class="nav-link">ABOUT US</a>
                                    </li>
                                    <li class="nav-item">
                                    <a href="compte_client.php"  class="nav-link">ACOUNT</a>
                                    </li>
                
                
                                </ul>
                                       
                                <div class="icons d-flex">
                                    <a href="compte_client.php" class="icon">
                                        <i class="bx bx-user"></i>
                                    </a>
                                    <a href="search.html" class="icon">
                                        <i class="bx bx-search"></i>
                                    </a>
                                    <div class="icon">
                                        <i class="bx bx-heart"></i>
                                        <span class="d-flex">0</span>
                                    </div>
                                    <a href="panier.php" class="icon">
                                        <i class="bx bx-cart"></i>
                                        <span class="d-flex">0</span>
                                    </a>
                                    <a href="deconnexion.php" class="icon">
                                        <i class="bx bx-log-out"></i>
                                    </a>
                                </div>
                
                                <div class="hamburger">
                                    <i class="bx bx-menu-alt-left"></i>
                                </div>
                            </div>
                        </div>
                        
                    </header>
                     <?php   }
                        ?>