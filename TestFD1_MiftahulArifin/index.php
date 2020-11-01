<?php 
$data = file_get_contents("price.json");
$json = json_decode($data, true);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="manifest" href="/manifest.json" />
  <link rel="apple-touch-icon" href="/assets/images/icon-192x192.png">
  <meta name="theme-color" content="#298eea" />
  <meta name="keywords" content="" />
  <link rel="shortcut icon" href="assets/images/favicon.ico">
  <title>Web Hosting Indonesia Unlimited & Terbaik - Niagahoster</title>

  <!--Bootstrap, Font, dan CSS-->
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/fonts/font-awesome/fontawesome.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
</head>

<body>
  <!--Header & Navbar Section-->
  <header>
    <section id="navigation" class="navigation">
      <div class="top">
        <div class="container">
          <div class="float-left d-none d-lg-block">
            <p>
              <span class="badge"><i class="fas fa-tag"></i></span>Gratis Ebook 9 Cara Cerdas Menggunakan Domain [ x ]
            </p>
          </div>
          <div class="float-right">
            <ul class="nav">
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-phone-alt"></i> 0274-5305505</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-comments"></i> Live Chat</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"><i class="fas fa-user-circle"></i> Member Area</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!--Navbar Section-->
      <div class="bottom">
        <div class="container">
          <nav class="navbar navbar-expand-lg px-0">
            <a class="navbar-brand" href="#" aria-label="Twitter">
              <img src="assets/images/logo.png" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">Hosting</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Domain</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Server</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Website</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Afiliasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Promo</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pembayaran</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Review</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Kontak</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
      <!--End Navbar Section-->
    </section>
    <!--Main Header Section-->
    <section class="hero icon-centang">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <h2>PHP Hosting</h2>
            <h3>Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h3>
            <ul>
              <li>Solusi PHP untuk performa query yang lebih cepat</li>
              <li>Konsumsi memori yang lebih rendah</li>
              <li>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7</li>
              <li>Fitur enkripsi IonCube dan Zend Guard Loaders</li>
            </ul>
          </div>
          <div class="col-md-6">
            <img src="assets/svg/illustration banner PHP hosting-01.svg" alt="" />
          </div>
        </div>
      </div>
    </section>
    <!--End Main Header Section-->
  </header>
  <!--End Header & Navbar Section-->

  <!--Main Section-->
  <main>
    <!--PHP Protection Section-->
    <section>
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-3">
            <div class="PHPprotect">
              <div class="PHPprotect-img">
                <object data="assets/svg/icon PHP Hosting_zendguard.svg" type="image/svg+xml">
                </object>
              </div>
              <p>PHP Zend Guard Loader</p>

            </div>
          </div>
          <div class="col-md-3">
            <div class="PHPprotect">
              <div class="PHPprotect-img">
                <object data="assets/svg/icon PHP Hosting_composer.svg" type="image/svg+xml">
                </object>
              </div>
              <p>PHP Composer</p>
            </div>
          </div>
          <div class="col-md-3">
            <div class="PHPprotect">
              <div class="PHPprotect-img">
                <object data="assets/svg/icon PHP Hosting_ioncube.svg" type="image/svg+xml">
                </object>
              </div>
              <p>PHP IonCube Loader</p>
            </div>
          </div>
        </div>
    </section>
    <!--End PHP Protection Section-->

    <!--Pilihan Paket Hosting Section-->
    <section class="content-pb">
      <div class="container">
        <div class="title paket">
          <h3>Paket Hosting Singapura yang Tepat</h3>
          <p>Diskon 40% + Domain dan SSL Gratis untuk Anda</p>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md pakethosting-pad pakethosting">
            <h4 class="paket-black-header">Bayi</h4>
            <div class="ket">
              <p style="text-decoration: line-through;">Rp. <?= $json['bayi']['normal'] ?></p>
              <div class="harga-paket">
                <div class="harga">
                  <sup>Rp. <?= $json['bayi']['diskon'] ?> <small>/ bln</small></sup>
                </div>
              </div>
            </div>
            <div class="ket">
              <p><b>938</b> Pengguna Terdaftar</p>
            </div>
            <div class="ket">
              <ul>
                <li><b>0.5X RESOURCE POWER</b></li>
                <li><b>500 MB</b> Disk Space</li>
                <li><b>Unlimited</b> Bandwidth</li>
                <li><b>Unlimited</b> Databases</li>
                <li><b>1</b> Domain</li>
                <li><b>Instant</b> Backup</li>
                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
              </ul>
              <a href="#" class="btn btn-basic-mtp btn-white-black ket-btn">Pilih Sekarang</a>
            </div>

          </div>
          <div class="col-md pakethosting-pad pakethosting">
            <h4 class="paket-black-header">Pelajar</h4>
            <div class="ket">
              <p style="text-decoration: line-through;">Rp. <?= $json['pelajar']['normal'] ?></p>
              <div class="harga-paket">
                <div class="harga">
                  <sup>Rp. <?= $json['pelajar']['diskon'] ?> <small>/ bln</small></sup>
                </div>
              </div>
            </div>
            <div class="ket">
              <p><b>4.168</b> Pengguna Terdaftar</p>
            </div>
            <div class="ket">
              <ul>
                <li><b>1X RESOURCE POWER</b></li>
                <li><b>Unlimited</b> Disk Space</li>
                <li><b>Unlimited</b> Bandwidth</li>
                <li><b>Unlimited</b> POP3 Email</li>
                <li><b>Unlimited</b> Databases</li>
                <li><b>10</b> Addons Domain</li>
                <li><b>Instant</b> Backup</li>
                <li><b>Domain Gratis</b> Selamanya</li>
                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
              </ul>
              <a href="#" class="btn btn-basic-mtp btn-white-black ket-btn">Pilih Sekarang</a>
            </div>
          </div>
          <div class="col-md pakethosting-pad pakethosting">
            <div class="ket-blue paket-blue best-seller">
              <h4 class="paket-blue-header">Personal</h4>
              <p style="text-decoration: line-through;">Rp. <?= $json['personal']['normal'] ?></p>
              <div class="harga-paket">
                <div class="harga">
                  <sup>Rp. <?= $json['personal']['diskon'] ?> <small>/ bln</small></sup>
                </div>
              </div>
            </div>
            <div class="ket-blue paket-bluedark">
              <p><b>10.017</b> Pengguna Terdaftar</p>
            </div>
            <div class="ket">
              <ul>
                <li><b>2X RESOURCE POWER</b></li>
                <li><b>Unlimited</b> Disk Space</li>
                <li><b>Unlimited</b> Bandwidth</li>
                <li><b>Unlimited</b> POP3 Email</li>
                <li><b>Unlimited</b> Databases</li>
                <li><b>Unlimited</b> Addons Domain</li>
                <li><b>Instant</b> Backup</li>
                <li><b>Domain Gratis</b> Selamanya</li>
                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                <li><b>Private</b> Name Server</li>
                <li><b>SpamAssasin</b> Mail Protection</li>
              </ul>
              <a href="#" class="btn btn-basic-mtp btn-white-blue ket-btn">Pilih Sekarang</a>
            </div>
          </div>
          <div class="col-md pakethosting-pad pakethosting">
            <h4 class="paket-black-header">Bisnis</h4>
            <div class="ket">
              <p style="text-decoration: line-through;">Rp. <?= $json['bisnis']['normal'] ?></p>
              <div class="harga-paket">
                <div class="harga">
                  <sup>Rp. <?= $json['bisnis']['diskon'] ?> <small>/ bln</small></sup>
                </div>
              </div>
            </div>
            <div class="ket">
              <p><b>3.552</b> Pengguna Terdaftar</p>
            </div>
            <div class="ket">
              <ul>
                <li><b>3X RESOURCE POWER</b></li>
                <li><b>Unlimited</b> Disk Space</li>
                <li><b>Unlimited</b> Bandwidth</li>
                <li><b>Unlimited</b> POP3 Email</li>
                <li><b>Unlimited</b> Databases</li>
                <li><b>Unlimited</b> Addons Domain</li>
                <li><b>Magic Auto</b> Backup & Restore</li>
                <li><b>Domain Gratis</b> Selamanya</li>
                <li><b>Unlimited SSL</b> Gratis Selamanya</li>
                <li><b>Private</b> Name Server</li>
                <li><b>Prioritas</b> Layanan Support</li>
                <li>
                  <b><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                      class="fa fa-star"></i> <i class="fa fa-star"></i></b>
                </li>
                <li><b>SpamExpert</b> Pro Mail Protection</li>
              </ul>
              <a href="#" class="btn btn-basic-mtp btn-white-black ket-btn">Pilih Sekarang</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Pilihan Paket Hosting Section-->

    <!--Powerful PHP Section-->
    <section class="powerfulphp py-4">
      <div class="container">
        <div class="title">
          <h3>Powerful dengan Limit PHP yang Lebih Besar</h3>
        </div>
        <div class="content icon-centang">
          <div class="row justify-content-center">
            <div class="col-md-5">
              <ul class="list-group">
                <li class="list-group-item">max execution time 300s</li>
                <li class="list-group-item">max execution time 300s</li>
                <li class="list-group-item">php memory limit 1024 MB</li>
              </ul>
            </div>
            <div class="col-md-5">
              <ul class="list-group">
                <li class="list-group-item">post max size 128 MB</li>
                <li class="list-group-item">upload max filesize 128 MB</li>
                <li class="list-group-item">max input vars 2500</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Powerful Section-->

    <!--Include All Paket Hosting Section-->
    <section class="content-pb">
      <div class="container">
        <div class="title">
          <h3>Semua Paket Hosting Sudah Termasuk</h3>
        </div>
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_PHP Semua Versi.svg"
                    type="image/svg+xml">
                  </object>
                </div>
                <h3>PHP Semua Versi</h3>
                <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
              </div>
            </div>
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_My SQL.svg" type="image/svg+xml">
                  </object>
                </div>
                <h3>MySQL Versi 5.6</h3>
                <p>Nikmat MySQL versi terbaru, tercepat dan kaya akan fitur</p>
              </div>
            </div>
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_CPanel.svg" type="image/svg+xml">
                  </object>
                </div>
                <h3>Panel Hosting cPanel</h3>
                <p>Kelola website dengan panel canggih yang familiar di hati Anda</p>
              </div>
            </div>
          </div>
          <div class="row justify-content-center">
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_garansi uptime.svg" type="image/svg+xml">
                  </object>
                </div>
                <h3>Garansi Uptime 99.9%</h3>
                <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
              </div>
            </div>
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_InnoDB.svg" type="image/svg+xml">
                  </object>
                </div>
                <h3>Database InnoDB Unlimited</h3>
                <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
              </div>
            </div>
            <div class="col-md">
              <div class="semuahosting text-center">
                <div class="semuahosting-img">
                  <object class="object-img" data="assets/svg/icon PHP Hosting_My SQL remote.svg" type="image/svg+xml">
                  </object>
                </div>
                <h3>Wildcard Remote MySQL</h3>
                <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Include All Paket Hosting-->

    <!--Support Framework Laravel Section-->
    <section class="laravels content-pb pt-4">
      <div class="container">
        <div class="title">
          <h3>Mendukung Penuh Framework Laravel</h3>
        </div>
        <div class="row align-items-start">
          <div class="col-lg-6">
            <p>Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung
              penuh framework favorit Anda</p>
            <ul>
              <li>Install Laravel <b>1 klik</b> dengan Softaculous Installer.</li>
              <li>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo.</b></li>
              <li>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstall packages pilihan Anda.</li>
            </ul>
            <p class="nb">Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</p>
            <a href="" class="btn btn-basic-mtp btn-white-blue">Pilih Hosting Anda</a>
          </div>
          <div class="col-lg-6"><img src="assets/svg/illustration banner support laravel hosting.svg" alt=""></div>
        </div>
      </div>
    </section>
    <!--End Support Framework Laravel Section-->

    <!--Modul PHP Section-->
    <section class="modul">
      <div class="container">
        <div class="title">
          <h3>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h3>
        </div>
        <div class="content">
          <div class="row justify-content-center">
            <div class="col-md-12">
              <div class="row">
                <ul class="col-6 col-sm-3">
                  <li>IcePHP</li>
                  <li>apc</li>
                  <li>apcu</li>
                  <li>apm</li>
                  <li>ares</li>
                  <li>bcmath</li>
                  <li>bcompiler</li>
                  <li>big_int</li>
                  <li>bitset</li>
                  <li>bloomy</li>
                  <li>bz2_filter</li>
                  <li>clamav</li>
                  <li>coin_acceptor</li>
                  <li>crack</li>
                  <li>dba</li>
                </ul>
                <ul class="col-6 col-sm-3">
                  <li>http</li>
                  <li>huffman</li>
                  <li>idn</li>
                  <li>igbinary</li>
                  <li>imagick</li>
                  <li>imap</li>
                  <li>include</li>
                  <li>inotify</li>
                  <li>interbase</li>
                  <li>intl</li>
                  <li>ioncube_loader</li>
                  <li>ioncube_loader_4</li>
                  <li>jsmin</li>
                  <li>json</li>
                  <li>ldap</li>
                </ul>
                <ul class="col-6 col-sm-3">
                  <li>nd_pdo_mysql</li>
                  <li>oauth</li>
                  <li>oci8</li>
                  <li>odbc</li>
                  <li>opcache</li>
                  <li>pdf</li>
                  <li>pdo</li>
                  <li>pdo_dblib</li>
                  <li>pdo_firebird</li>
                  <li>pdo_mysql</li>
                  <li>pdo_odbc</li>
                  <li>pdo_pgsql</li>
                  <li>pdo_sqlite</li>
                  <li>pgsql</li>
                  <li>phalcon</li>
                </ul>
                <ul class="col-6 col-sm-3">
                  <li>stats</li>
                  <li>stem</li>
                  <li>stomp</li>
                  <li>suhosin</li>
                  <li>sybase_ct</li>
                  <li>sysvmsg</li>
                  <li>sysvsem</li>
                  <li>sysvshm</li>
                  <li>tidy</li>
                  <li>timezonedb</li>
                  <li>trader</li>
                  <li>translit</li>
                  <li>uploadprogress</li>
                  <li>uri_template</li>
                  <li>uuid</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="text-center pt-4">
        <a href="" class="btn btn-basic-mtp btn-white-black">Selengkapnya</a>
      </div>
      </div>
    </section>
    <!--End Modul PHP Section-->

    <!--Linux Hosting Section-->
    <section class="linux-hosting content-pb mt-6">
      <div class="container">
        <div class="row align-items-start">
          <div class="col-lg-6">
            <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
            <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan <br>
              teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi <br>
              dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer <br>
              berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>Raid-10</b> protection <br>
              dan auto backup untuk keamanan website PHP Anda</p>
            <a href="" class="btn btn-basic-mtp btn-white-blue">Pilih Hosting Anda</a>
          </div>
          <div class="col-lg-6">
            <div class="col-lg-6 text-right pt-5"><img src="assets/images/Image support.png" alt=""></div>
          </div>
        </div>
      </div>
      </div>
    </section>
    <!--End Linux Hosting Section-->

    <!--Share Section-->
    <section class="share">
      <div class="container">
        <div class="content">
          <div class="row align-items-center">
            <div class="col-lg-6"><b>Bagikan jika Anda menyukai halaman ini.</b></div>
            <div class="col-lg-6">
              <ul>
                <li><a class="ic facebook"><i class="fab fa-facebook-square" style="color: #3b5998;"></i></a> <span
                    class="share-qty">80k</span></li>
                <li><a class="ic twitter"><i class="fab fa-twitter" style="color: #00acee ;"></i></i></a> <span
                    class="share-qty">450</span></li>
                <li><a class="ic gplus"><i class="fab fa-google-plus-g" style="color: #db4a39"></i></a> <span
                    class="share-qty">1900</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Share Section-->

    <!--Contact Section-->
    <section class="contact">
      <div class="container">
        <div class="content">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h3>Perlu <b>BANTUAN?</b> Hubungi Kami : <b>0274-5305505</b></h3>
            </div>
            <div class="col-lg-4 text-right">
              <a href="" class="btn btn-basic-mtp btn-white-blue-outline"><i class="fas fa-comments"></i> Live Chat</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--End Contact Section-->

    <!--Footer Section-->
    <footer>
      <div class="container">
        <div class="top">
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
              <h6>HUBUNGI KAMI</h6>
              <ul>
                <li>0274-5305505</li>
                <li>Senin - Minggu</li>
                <li>24 Jam Nonstop</li>
              </ul>
              <ul>
                <li>Jl. Selokan Mataram Monjali</li>
                <li>Karangjati MT I/304</li>
                <li>Sinduadi, Mlati, Sleman</li>
                <li>Yogyakarta 55284</li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>LAYANAN</h6>
              <ul>
                <li><a href="javascript:void(0)">Domain</a></li>
                <li><a href="javascript:void(0)">Shared Hosting</a></li>
                <li><a href="javascript:void(0)">Cloud VPS Hosting</a></li>
                <li><a href="javascript:void(0)">Managed VPS Hosting</a></li>
                <li><a href="javascript:void(0)">Web Builder</a></li>
                <li><a href="javascript:void(0)">Keamanan SSL / HTTPS</a></li>
                <li><a href="javascript:void(0)">Jasa Pembuatan Website</a></li>
                <li><a href="javascript:void(0)">Program Affiliasi</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>SERVICE HOSTING</h6>
              <ul>
                <li><a href="javascript:void(0)">Hosting Murah</a></li>
                <li><a href="javascript:void(0)">Hosting Indonesia</a></li>
                <li><a href="javascript:void(0)">Hosting Singapura SG</a></li>
                <li><a href="javascript:void(0)">Hosting PHP</a></li>
                <li><a href="javascript:void(0)">Hosting Wordpress</a></li>
                <li><a href="javascript:void(0)">Hosting Laravel</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>TUTORIAL</h6>
              <ul>
                <li><a href="javascript:void(0)">Knowledgebase</a></li>
                <li><a href="javascript:void(0)">Blog</a></li>
                <li><a href="javascript:void(0)">Cara Pembayaran</a></li>
              </ul>
            </div>
          </div>
          <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
              <h6>TENTANG KAMI</h6>
              <ul>
                <li><a href="javascript:void(0)">Tim Niagahoster</a></li>
                <li><a href="javascript:void(0)">Karir</a></li>
                <li><a href="javascript:void(0)">Events</a></li>
                <li><a href="javascript:void(0)">Penawaran & Promo Spesial</a></li>
                <li><a href="javascript:void(0)">Kontak Kami</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>KENAPA PILIH NIAGAHOSTER?</h6>
              <ul>
                <li><a href="javascript:void(0)">Support Terbaik</a></li>
                <li><a href="javascript:void(0)">Garansi Harga Termurah</a></li>
                <li><a href="javascript:void(0)">Domain Gratis Selamanya</a></li>
                <li><a href="javascript:void(0)">Review Pelanggan</a></li>
              </ul>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>NEWSLETTER</h6>
              <div class="newsletter">
                <input type="text" placeholder="Email">
                <button>Berlangganan</button>
              </div>
              <p>Dapatkan promo dan konten menarik dari penyedia hosting terbaik Anda.</p>
            </div>
            <div class="col-md-6 col-lg-3">
              <h6>&nbsp;</h6>
              <ul class="social">
                <a href="javascript:void(0)">
                  <li><i class="fab fa-facebook-f"></i></li>
                </a>
                <a href="javascript:void(0)">
                  <li><i class="fab fa-twitter"></i></li>
                </a>
                <a href="javascript:void(0)">
                  <li><i class="fab fa-google-plus-g"></i></li>
                </a>
              </ul>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <h6>PEMBAYARAN</h6>
              <ul class="payment">
                <li><img src="assets/images/bank/bca.png" alt="bca"></li>
                <li><img src="assets/images/bank/mandiri.png" alt="mandiri"></li>
                <li><img src="assets/images/bank/bni.png" alt="bni"></li>
                <li><img src="assets/images/bank/visa.png" alt="visa"></li>
                <li><img src="assets/images/bank/mastercard.png" alt="mastercard"></li>
                <li><img src="assets/images/bank/atmbersama.png" alt="atmbersama"></li>
                <li><img src="assets/images/bank/permata.png" alt="permata"></li>
                <li><img src="assets/images/bank/prima.png" alt="prima"></li>
                <li><img src="assets/images/bank/alto.png" alt="alto"></li>
              </ul>
              <p>Aktivasi instan dengan e-Payment. Hosting dan domain langsung aktif!</p>
            </div>
          </div>
        </div>
        <div class="bottom">
          <div class="row">
            <div class="col-md-9">
              <p>Copyright &copy;2016 Niagahoster | Hosting powered by PHP7, CloudLinux, CloudFlare, BitNinja anda DC
                Biznet Technovillage Jakarta</p>
              <p>Cloud VPS Murah powered by Webuzo Softaculous, Intel SSD and cloud computing technology</p>
            </div>
            <div class="col-md-3">
              <a href="javascript:void(0)">Syarat dan Ketentuan</a>
              <a href="javascript:void(0)">Kebijakan Privasi</a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!--End Footer Section-->
  </main>
  <!--End Main Section-->

  <!--JS Section-->
  <script src="assets/js/jquery-3.4.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/script.js"></script>
  <!--End JS Section-->
</body>

</html>