<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BSI Bakery</title>

    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div class="container">
        <!-- Start Header Nav -->
        <nav>
            <div class="logo">
                <a href="../index.html">BSI Bakery</a>
            </div>
            <div class="menu">
                <ul>
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="index.html">Produk</a></li>
                    <li><a href="../about.html">Tentang Kami</a></li>
                </ul>
            </div>
            <div class="menu-toggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
        <!--End Header Nav  -->

        <!-- Start PHP -->
        <?php
        $harga = 50000;
        $jumlah = $_POST['jumlah'];
        $total_harga = $harga * $jumlah;
        ?>
        <!-- End PHP -->

        <!-- Start Content -->
        <div class="content">
            <div class="menu-populer">
                <img src="../images/kue-brownies.jpg" alt="Kue Brownies" />
                <p>Kue Brownies</p>
                <p>Rp. 50.000,-</p>
                <br />
                <p>Jumlah Beli <?php echo "$jumlah" ?></p>
                <p>Total Harga <?php echo "$total_harga" ?></p>
                <a href = "../index.html"><button>Kembali ke Halaman Utama </a></button>
            </div>
        </div>
        <!-- End Content -->
    </div>

    <!-- Start Footer -->
    <div class="footer">
        <p>Copyright &copy; 2022 BSI Bakery</p>
    </div>
    <!-- End Footer -->

    <script src="../script.js"></script>
</body>

</html>