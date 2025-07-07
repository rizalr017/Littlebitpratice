<!DOCTYPE html>
<html lang="en_US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/style.css"/>
		<script src="js/script.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include "./templates/top.php"; ?>
    <?php include "./templates/navbar.php"; ?>
    <script src="script.js" defer></script>
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
        <div class="container">
            <h1>Selamat Datang di Website Kami</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi provident odio iste sint, 
            distinctio suscipit. Cum exercitationem minus fuga, doloribus optio eligendi 
            excepturi placeat veritatis. Alias nihil earum adipisci atque.</p>
            <button class="btn btn-primary">Pelajari Lebih Lanjut</button>
        </div>

    </section>
        <h1 class="aaaa">Selamat Datang di Website Kami</h1>
        <p class="bbbb">Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi provident odio iste sint, 
        distinctio suscipit. Cum exercitationem minus fuga, doloribus optio eligendi 
        excepturi placeat veritatis. Alias nihil earum adipisci atque.</p>
            <div class="login-form">
                <h1>Login</h1>
                <form action="admin/login.php" method="post" name="validasiForm" onsubmit="return validasiInput(this)">
                <form id="admin-login-form">    
                <div class="form-group">
                        <label for="username">Nama</label>
                        <input type="text" id="username" name="username" placeholder="Nama">
                    </div>
                    <div class="form-group">
                        <label for="email">E-Mail</label>
                        <input type="email" name="email" id="email" placeholder="E-Mail">
                    </div>
                    <div class="form-group">
                        <label for="telp">Password</label>
                        <input type="password" name="telp" id="telp" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="daftar_process" value="KIRIM" class="submit-btn">
                    </div>
                </form>
            </div>
                <?php include "./templates/footer.php"; ?>
</div>
<footer class="footer">
        <div class="row">
            <div class="col-md-4">
                <h5>Tentang Kami</h5>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Cumque porro provident quae totam adipisci. 
                    Consectetur, voluptatum, quia illo quam tenetur totam nulla quibusdam magnam iure 
                    maiores obcaecati quod voluptas labore!</p>
            </div>
            <div class="col-md-4">
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
            <div class="text-center">
                DADADADADA
            </div>
        </div>
    </footer>
<script type="text/javascript" src="./js/main.js"></script>
</body>
</head>
</html>