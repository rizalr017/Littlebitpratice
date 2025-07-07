<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css"/>
		<link rel="stylesheet" href="css/produk.css"/>
		<script src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Coba</title>
    <body>
        <div class="main-content">
        <div class="topnav">
            <a href="index.php"><i class="fas fa-home">Home</i></a>
            <a href="tentang.php"><i class="fas fa-info-circle"></i>Tentang</a>
            <a href="produk1.php"><i class="fas fa-info-circle"></i>Produk</a>
            <a href="gallery.php"><i class="fas fa-images"></i>Gallery</a>
            <a href="kontak.php"><i class="fas fa-envelope"></i>Kontak</a>
            <a href="login.php"><i class="fas fa-key"></i>Login</a>
        </div>
        <section class="hero">
        <div class="content">
            <h2>Silahkan dibeli selama stock produk masih ada</h2>
            <div id="get_category">
			</div>
            <div class="products-grid">
                <div class="product-item">
                    <img title="FIFA 21" alt="FIFA 21" 
                        src="images/cover/fifa.jpg" class="store">
                    <a href="https://www.ea.com/games/fifa/fifa-21/buy" class="terdaftar">
                        FIFA 21 Rp.500.000
                    </a> 
                </div>
                
                <div class="product-item">
                    <img title="Assassin's Creed Valhalla" alt="Assassin's Creed Valhalla"
                        src="images/cover/ACValhalla.jpg" class="store">
                    <a href="https://store.ubi.com/sea/assassin-s-creed-valhalla-all-games?ncid=287-3---1-pdsc-6-11-Store_Search_ACK_STD_Campaigns_20--17-1-7-0420-4----ID_87777-----&maltcode=ubisoftstore_convst_pdsc_google___UBISOFT____&addinfo=" class="terdaftar">
                        Assassin's Creed Rp.500.000
                    </a>
                </div>
                
                <div class="product-item">
                    <img title="CyberPunk 2077" alt="CyberPunk 2077"
                        src="images/cover/Cyberpunk.jpg" class="store">
                    <a href="https://www.cyberpunk.net/us/en/pre-order" class="terdaftar">
                        CyberPunk 2077 Rp.500.000
                    </a> 
                </div>
                
                <div class="product-item">
                    <img title="WatchDogs Legion" alt="WatchDogs Legion"
                        src="images/cover/watchdogslegion.jpg" class="store">
                    <a href="https://www.ubisoft.com/en-gb/game/watch-dogs/legion/buy" class="terdaftar">
                        WatchDogs Rp.500.000
                    </a> 
                </div>
                
                <div class="product-item">
                    <img title="Kingdom Hearts" alt="Kingdom Hearts" 
                        src="images/cover/KINGDOM_HEARTS_Melody_of_Memory_box_art.jpg" class="store">
                    <a href="https://store.na.square-enix-games.com/en_US/product/611600/kingdom-hearts-melody-of-memory-ps4" class="terdaftar">
                        Kingdom Hearts Rp.500.000
                    </a> 
                </div>
                
                <div class="product-item">
                    <img title="Dirt 5" alt="Dirt 5"
                        src="images/cover/download.jpg" class="store">
                    <a href="https://dirtgame.com/dirt5" class="terdaftar">
                        Dirt 5 Rp.500.000
                    </a>
                </div>
            </div>
        </div>
    </div>
        <footer class="footer">
        <div class="row">
            <div class="col-md-4 mb-4">
                <h5>Tentang Kami</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque porro provident quae totam adipisci. 
                    Consectetur, voluptatum, quia illo quam tenetur totam nulla quibusdam magnam iure 
                    maiores obcaecati quod voluptas labore!</p>
            </div>
            <div class="col-md-4 mb-4">
                <h5>Kontak</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                Cumque porro provident quae totam adipisci. 
                Consectetur, voluptatum, quia illo quam tenetur totam nulla quibusdam magnam iure 
                maiores obcaecati quod voluptas labore!</p>
            </div>
            <div class="col-md-4">
                <h5>Sesuatu</h5>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Exercitationem, 
                eveniet, atque est impedit hic nisi dolorem et minima dignissimos dolor voluptatem quia. 
                Aspernatur praesentium a, maxime quidem est inventore odit!</p>
            </div>
            </div>
            <hr>
            <div class="text-center mt-4">
                DADADADADA
            </div>
        </div>
    </footer>
    <script>
    // Hamburger menu functionality
    const hamburger = document.getElementById('hamburger');
    const menuList = document.getElementById('menu-list');
    
    hamburger.addEventListener('click', () => {
        menuList.classList.toggle('active');
        hamburger.classList.toggle('active');
    });
    </script>
</body>
</html>