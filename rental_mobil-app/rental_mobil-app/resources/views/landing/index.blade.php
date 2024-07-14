<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Armada</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="asset/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="asset/img/logo1.png" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                    <li class="nav-item"><a class="nav-link" href="#ourcar">Our Car</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#team">Team</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>

                    @if (Route::has('login'))
                        <li class="nav-item">
                            @auth
                                <a href="{{ url('/dashboard') }}" class="nav-link">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" class="nav-link">Login</a>
                            @endif
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                        </li>
                    @endif
                </ul>
            </div>

        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <div class="masthead-subheading">Welcome To Our Rental!</div>
            <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
            <a class="btn btn-primary btn-xl text-uppercase" href="#services">Tell Me More</a>
        </div>
    </header>
    <!-- Services-->
    <section class="page-section" id="services">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Services</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Low Cost</h4>
                    <p class="text-muted">Low Cost are those that are offered at a price that is considered to be
                        reasonable and accessible to a wide range of people. These services are often designed to meet
                        the needs of budget-conscious consumers who are looking for good value for their money.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Fast Respon</h4>
                    <p class="text-muted">A fast respond service is one that allows you to get a quick and accurate
                        response to your questions or requests. This service is typically offered by online businesses
                        or organizations, such as e-commerce stores, customer support, or news websites.</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="my-3">Secure</h4>
                    <p class="text-muted">The company should have a fleet of well-maintained vehicles that are regularly
                        inspected and serviced. You can check the condition of the vehicles by reading online reviews or
                        by inspecting the vehicles yourself before you rent them.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- ourcar Grid-->
    <section class="page-section bg-light" id="ourcar">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Our Car</h2>
                <h3 class="section-subheading text-muted">car choice.</h3>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- ourcar item 1-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal1">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/1.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading">Toyota Hilux</div>
                            <div class="ourcar-caption-subheading text-muted">harga Rp 800.000-Rp 1.300.000
                                per hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- ourcar item 2-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal2">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/2.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading"> McLaren</div>
                            <div class="ourcar-caption-subheading text-muted">Rp 30.000.000-Rp 50.000.000 per hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4">
                    <!-- ourcar item 3-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal3">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/3.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading">Genesis G70</div>
                            <div class="ourcar-caption-subheading text-muted">Rp 1.500.000-Rp 3.000.000 per hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                    <!-- ourcar item 4-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal4">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/4.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading">BMW E36</div>
                            <div class="ourcar-caption-subheading text-muted">Rp 1.000.000-Rp 2.500.000 per hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                    <!-- ourcar item 5-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal5">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/5.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading">Lancia Trevi 1600</div>
                            <div class="ourcar-caption-subheading text-muted">Rp 2.000.000-Rp 5.000.000 per hari</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <!-- ourcar item 6-->
                    <div class="ourcar-item">
                        <a class="ourcar-link" data-bs-toggle="modal" href="#ourcarModal6">
                            <div class="ourcar-hover">
                                <div class="ourcar-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="asset/img/ourcar/6.jpg" alt="..." />
                        </a>
                        <div class="ourcar-caption">
                            <div class="ourcar-caption-heading">GranTurismo 2010</div>
                            <div class="ourcar-caption-subheading text-muted">Rp 8.000.000-Rp 15.000.000 per hari</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About-->
    <section class="page-section" id="about">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Testimonial</h2>
                <h3 class="section-subheading text-muted">Our Customer</h3>
            </div>
            <ul class="timeline">
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="asset/img/about/1.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>Feb 2011</h4>
                            <h4 class="subheading">Rissa Ulandari</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">"Kami sangat puas dengan layanan rental mobil ini! Mobilnya bersih,
                                nyaman, dan sangat terawat. Proses pemesanan sangat mudah dan stafnya sangat ramah.
                                Perjalanan keluarga kami menjadi lebih menyenangkan dan lancar. Terima kasih banyak!"
                            </p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="asset/img/about/2.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>March 2011</h4>
                            <h4 class="subheading">Alvin Abdulloh</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">"Sebagai seorang pelancong bisnis, saya memerlukan kendaraan yang
                                andal dan tepat waktu. Rental mobil ini tidak mengecewakan! Mobilnya dalam kondisi prima
                                dan penjemputan serta pengembaliannya sangat efisien. Pasti akan menggunakan layanan ini
                                lagi untuk perjalanan bisnis berikutnya."</p>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="asset/img/about/3.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>December 2015</h4>
                            <h4 class="subheading">Chorie Choerunnisya</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">"Layanan rental mobil ini sangat luar biasa! Kami menyewa mobil untuk
                                bulan madu kami dan sangat terkesan dengan kualitas mobil dan pelayanan yang diberikan.
                                Prosesnya mudah dan cepat, sehingga kami bisa fokus menikmati waktu kami bersama. Sangat
                                direkomendasikan!"</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="asset/img/about/4.jpeg"
                            alt="..." /></div>
                    <div class="timeline-panel">
                        <div class="timeline-heading">
                            <h4>July 2020</h4>
                            <h4 class="subheading">Muhammad Ibrahim Yazid</h4>
                        </div>
                        <div class="timeline-body">
                            <p class="text-muted">"We had a wonderful experience with this car rental service during our
                                vacation in Indonesia. The car was in excellent condition, and the staff was very
                                helpful and professional. It made our trip hassle-free and enjoyable. Highly recommended
                                and Terimakasih!"</p>
                        </div>
                    </div>
                </li>
                <li class="timeline-inverted">
                    <div class="timeline-image">
                        <h4>
                            Be Part
                            <br />
                            Of Our
                            <br />
                            Story!
                        </h4>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- Team-->
     <!--<section class="page-section bg-light" id="team">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="asset/img/team/1.jpg" alt="..." />
                            <h4>Parveen Anand</h4>
                            <p class="text-muted">Lead Designer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="asset/img/team/2.jpg" alt="..." />
                            <h4>Diana Petersen</h4>
                            <p class="text-muted">Lead Marketer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Diana Petersen LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="team-member">
                            <img class="mx-auto rounded-circle" src="asset/img/team/3.jpg" alt="..." />
                            <h4>Larry Parker</h4>
                            <p class="text-muted">Lead Developer</p>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Twitter Profile"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Larry Parker LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center"><p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p></div>
                </div>
            </div>
        </section> -->
    <!-- Clients-->
    <div class="py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a href="#!">
                        <img class="img-fluid img-brand d-block mx-auto"
                             src="asset/img/logos/ig.png" alt="Instagram Logo" aria-label="Instagram Logo" style="max-width: 150px;" />
                        <p>Instagram</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a href="#!">
                        <img class="img-fluid img-brand d-block mx-auto"
                             src="asset/img/logos/fb.png" alt="Facebook Logo" aria-label="Facebook Logo" style="max-width: 150px;" />
                        <p>Facebook</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a href="#!">
                        <img class="img-fluid img-brand d-block mx-auto"
                             src="asset/img/logos/wa.png" alt="WhatsApp Logo" aria-label="WhatsApp Logo" style="max-width: 150px;" />
                        <p>WhatsApp</p>
                    </a>
                </div>
                <div class="col-md-3 col-sm-6 my-3 text-center">
                    <a href="#!">
                        <img class="img-fluid img-brand d-block mx-auto"
                             src="asset/img/logos/yt.png" alt="YouTube Logo" aria-label="YouTube Logo" style="max-width: 150px;" />
                        <p>YouTube</p>
                    </a>
                </div>
            </div>
        </div>


    <!-- Contact-->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Peminjaman Kendaraan</h2>
            </div>
            <form id="contactForm" action="{{ route('peminjaman.store') }}" method="POST">
                @csrf
                <div class="row align-items-stretch mb-5">
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Nama Peminjam -->
                            <input class="form-control" id="nama_peminjam" type="text" name="nama_peminjam" placeholder="Nama Peminjam *"
                                required />
                            <div class="invalid-feedback">Nama peminjam harus diisi.</div>
                        </div>
                        <div class="form-group">
                            <!-- KTP Peminjam -->
                            <input class="form-control" id="ktp_peminjam" type="text" name="ktp_peminjam" placeholder="Nomor KTP Peminjam *"
                                required />
                            <div class="invalid-feedback">Nomor KTP peminjam harus diisi.</div>
                        </div>
                        <div class="form-group mb-md-0">
                            <!-- Keperluan Pinjam -->
                            <textarea class="form-control" id="keperluan_pinjam" name="keperluan_pinjam" placeholder="Keperluan Peminjaman *"
                                required></textarea>
                            <div class="invalid-feedback">Keperluan peminjaman harus diisi.</div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <!-- Tanggal Mulai -->
                            <input class="form-control" id="mulai" type="date" name="mulai" placeholder="Tanggal Mulai Peminjaman *"
                                required />
                            <div class="invalid-feedback">Tanggal mulai peminjaman harus diisi.</div>
                        </div>
                        <div class="form-group form-group-textarea mb-md-0">
                            <!-- Tanggal Selesai -->
                            <input class="form-control" id="selesai" type="date" name="selesai" placeholder="Tanggal Selesai Peminjaman *"
                                required />
                            <div class="invalid-feedback">Tanggal selesai peminjaman harus diisi.</div>
                        </div>
                    </div>
                </div>
                <!-- Submit success message-->
                <div class="d-none" id="submitSuccessMessage">
                    <div class="text-center text-white mb-3">
                        <div class="fw-bolder">Form submission successful!</div>
                        Your request has been submitted successfully.
                    </div>
                </div>
                <!-- Submit error message-->
                <div class="d-none" id="submitErrorMessage">
                    <div class="text-center text-danger mb-3">Error sending message!</div>
                </div>
                <!-- Submit Button-->
                <div class="text-center">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-xl text-uppercase" id="submitButton">Submit Request</a>
                </div>

            </form>
        </div>
    </section>

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Kelompok 1 Pemograman Web 2</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                    <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                </div>
            </div>
        </div>
    </footer>
    <!-- ourcar Modals-->
    <!-- ourcar item 1 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Toyota</h2>
                                <p class="item-intro text-muted">Hilux</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/1.jpg" alt="..." />
                                <p>Bagi AutoFamily yang sedang mencari mobil niaga untuk kebutuhan bisnis, tentunya
                                    informasi mengenai ukuran bak mobil pick up merupakan hal yang sangat penting
                                    sebagai pertimbangan. Salah satu pilihan yang tersedia di Armada adalah Toyota
                                    Hilux,mobil pick up yang dibekali dengan mesin andal, dengan kecepatan 180 km/jam.
                                </p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourcar item 2 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Hot Wheels</h2>
                                <p class="item-intro text-muted">McLaren</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/2.jpg" alt="..." />
                                <p>Mobil Hot Wheels McLaren adalah miniatur replika dari mobil sport mewah McLaren yang
                                    diproduksi oleh Mattel. Dibuat dalam skala 1:64, mobil ini memiliki desain eksterior
                                    yang mirip dengan aslinya, terbuat dari die-cast metal dengan detail plastik. Hot
                                    Wheels sering merilis berbagai model McLaren, seperti P1, 720S, dan Senna, dengan
                                    berbagai warna dan desain. Mobil ini populer di kalangan kolektor dan anak-anak
                                    karena detailnya yang realistis dan daya tahan yang baik.</p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourcar item 3 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Genesis</h2>
                                <p class="item-intro text-muted">G70</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/3.jpg" alt="..." />
                                <p>Genesis G70 adalah sedan mewah yang menawarkan desain sporty, interior berkualitas
                                    tinggi, dan performa bertenaga. Ditenagai oleh mesin turbocharged, G70 memiliki
                                    akselerasi cepat dan handling responsif. Dilengkapi dengan fitur keselamatan canggih
                                    dan teknologi modern, Genesis G70 memberikan kenyamanan dan keamanan dalam
                                    berkendara.</p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourcar item 4 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">BMW</h2>
                                <p class="item-intro text-muted">E36</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/4.jpg" alt="..." />
                                <p>BMW E36 adalah model dari seri 3 yang diproduksi antara 1990 dan 2000. Mobil ini
                                    memiliki desain klasik dengan garis elegan dan aerodinamis. Dikenal dengan gril khas
                                    BMW dan lampu depan ganda, E36 menawarkan pilihan mesin 4 silinder dan 6 silinder
                                    yang bertenaga, serta handling yang presisi. Interiornya nyaman dan ergonomis,
                                    dengan fitur seperti kontrol iklim dan sistem audio. Meskipun dari era 90-an, E36
                                    dilengkapi dengan fitur keselamatan dasar seperti airbag dan rem ABS. Mobil ini
                                    populer karena kombinasi performa, kenyamanan, dan desain abadi.</p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourcar item 5 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">Lancia Trevi</h2>
                                <p class="item-intro text-muted">1600</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/5.jpg" alt="..." />
                                <p>Lancia Trevi 1600 adalah sedan Italia dari tahun 1980-an dengan desain yang tegas dan
                                    aerodinamis. Memiliki mesin bensin 1.6 liter, Trevi menawarkan kenyamanan dalam
                                    kabin yang luas dan fitur-fitur dasar seperti kontrol iklim. Mobil ini cocok untuk
                                    penggunaan sehari-hari dengan performa yang memadai dan fitur keselamatan standar
                                    untuk era tersebut.</p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ourcar item 6 modal popup-->
    <div class="ourcar-modal modal fade" id="ourcarModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="asset/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase">GranTurismo</h2>
                                <p class="item-intro text-muted">2010</p>
                                <img class="img-fluid d-block mx-auto" src="asset/img/ourcar/6.jpg" alt="..." />
                                <p>Maserati GranTurismo tahun 2010 adalah mobil grand tourer dengan desain coupe elegan,
                                    dilengkapi mesin V8 bertenaga tinggi. Kabinnya mewah dengan bahan premium dan fitur
                                    teknologi canggih seperti sistem audio premium dan navigasi GPS. GranTurismo
                                    menawarkan kombinasi sempurna antara gaya Italia yang klasik, performa yang kuat,
                                    dan kenyamanan dalam berkendara jarak jauh.</p>
                                <ul class="list-inline">
                                    <li>
                                </ul>
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
