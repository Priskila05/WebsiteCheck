
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="{{ asset('/check_asset/plugins/fontawesome-free/css/all.min.css') }}"/>
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('/check_asset/dist/css/checkApps.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/customAuth/css/home.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/customAuth/css/styleku.css') }}"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-green navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                    <i class="fas fa-bars"></i>
                    <style>
                        .fa-bars{
                            color:white;
                        }
                    </style>
                </a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('home') }}" class="nav-link"><font color = "white">Home</font></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('maps') }}" class="nav-link"><font color = "white">Maps Zone</font></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{ route('check') }}" class="nav-link"><font color = "white">Check Kondisi</font></a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="far fa-bell"></i>
                    <style>
                        .fa-bell{
                            color:white;
                        }
                    </style>
                    <span class="badge badge-warning navbar-badge">3</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                    <i class="fas fa-expand-arrows-alt"></i>
                    <style>
                        .fa-expand-arrows-alt{
                            color:white;
                        }
                    </style>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="dropdown" href="#"><font color = "white">
                    {{ Auth::user()->level }}&nbsp;&nbsp;<i class="fa fa-user" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <img src="{{ asset('/customAuth/img/logo.png') }}" alt="Check Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">Check Apps</span>
        </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('/customAuth/img/person.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->username}}</a>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{ route('home') }}" class="nav-link">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('maps') }}" class="nav-link">
                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Maps Zone</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('check') }}" class="nav-link">
                            <i class="fa fa-check-square" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Check Kondisi</p>
                        </a>
                    </li>
                    @if (auth()->user()->level=="Admin")
                    <li class="nav-item">
                        <a href="{{ route('pertanyaan') }}" class="nav-link">
                            <i class="fa fa-table" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Data Pertanyaan</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('responden') }}" class="nav-link">
                            <i class="fa fa-database" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Data Responden</p>
                        </a>
                    </li>
                    @endif
                </ul>
                <ul class="nav nav-treeview>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off" aria-hidden="true"></i>
                            <p>&nbsp;&nbsp;&nbsp;Logout</p>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <br/><br/>
    <div class="content-wrapper">
    <!-- Main content -->
    <div class="container-fluid text-center">
        <center><h2></h2><center>

        <div class="slideshow-container">
            <div class="mySlides fade">
                <div class="numbertext">1 / 3</div>
                    <img src="{{ asset('/customAuth/img/slide2.jpg') }}" style="width:50%" >
        
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                        <img src="{{ asset('/customAuth/img/slide3.jpeg') }}" style="width:50%">
                    </div>
                    <div class="mySlides fade">
                        <div class="numbertext">3 / 3</div>
                            <img src="{{ asset('/customAuth/img/slide4.jpg') }}" style="width:50%">
                        </div>
                    </div>
                    <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>

                    <!-- MAIN (Center website) -->
                    <div class="main">
                        <hr>
                        <!-- Portfolio Gallery Grid -->
                        <div class="row">
                            <div class="column">
                                <div class="content">
                                    <img src="{{ asset('/customAuth/img/berita1.jpg') }}" style="width:100%">
                                    <h4><font color = "black">Vaksin Covid-19 Ditemukan!</font></h4>
                                    <p><font color = "black">Masyarakat Indonesia tengah menunggu kehadiran vaksin Covid-19, yang kini sedang dalam persiapan.
                                        Selain perizinan perihal keamanan dan efektivitas vaksin, cara distribusi vaksin juga harus diperhatikan.
                                        Pakar Imunisasi Elizabeth Jane Soepardi mengatakan vaksin merupakan produk biologis
                                    yang memiliki kerentanan pada perubahan suhu.</font></p>
                                    <a href="#">Selengkapnya..</a>
                                </div>
                            </div>
                            <div class="column">
                                <div class="content">
                                    <img src="{{ asset('/customAuth/img/berita2.jpg') }}" style="width:100%">
                                    <h3><font color = "black">Penyebaran Covid-19</font></h3>
                                    <p><font color = "black">Alam (dalam artian luas memiliki makna yang setara dengan dunia alam, 
                                    dunia fisik, atau dunia materi) mengacu kepada fenomena dunia fisik dan juga kehidupan secara umum.
                                    Skala alam terbentang dari sub-atomik sampai kosmik.</font></p>
                                    <a href="#">Selengkapnya..</a>
                                </div>
                            </div>
                            <div class="column">
                                <div class="content">
                                    <img src="{{ asset('/customAuth/img/berita3.jpg') }}" style="width:100%">
                                    <h3><font color = "black">Korban Terkini</font></h3>
                                    <p><font color = "black">Alam (dalam artian luas memiliki makna yang setara dengan dunia alam, 
                                    dunia fisik, atau dunia materi) mengacu kepada fenomena dunia fisik dan juga kehidupan secara umum.
                                    Skala alam terbentang dari sub-atomik sampai kosmik.</font></p>
                                    <a href="#">Selengkapnya..</a>
                                </div>
                            </div>
                            <div class="column">
                                <div class="content">
                                    <img src="{{ asset('/customAuth/img/berita4.jpg') }}" style="width:100%">
                                    <h3><font color = "black">Hidup Sehat</font></h3>
                                    <p><font color = "black">Alam (dalam artian luas memiliki makna yang setara dengan dunia alam, 
                                    dunia fisik, atau dunia materi) mengacu kepada fenomena dunia fisik dan juga kehidupan secara umum.
                                    Skala alam terbentang dari sub-atomik sampai kosmik.</font></p>
                                    <a href="#">Selengkapnya..</a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <img src="{{ asset('/customAuth/img/slide1.jpg') }}" alt="Bear" style="width:80%">
                            <h3><font color = "black">BE WISE</font></h3>
                        </div>
                    </div>
                    <!-- END MAIN -->
                </div> 
            </div>
            <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
        <div class="p-3">
            <h5>Title</h5>
            <p>Sidebar content</p>
        </div>
        </aside>
        <!-- Main Footer -->
        <footer class="container-fluid text-center">
            <p>Copyright @ Proyek PABWE-2020</p>
        </footer>
        </div>
        </div>
    </div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="{{ asset('/check_asset/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/check_asset/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('/check_asset/dist/js/adminlte.min.js') }}"></script>
</body>
</html>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>