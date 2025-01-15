<?php
include 'config/conn.php';

// Ambil data dari database untuk tabel jumlah_penduduk
$query = "SELECT * FROM jumlah_penduduk";
$resultAngka = $conn->query($query);

// Ambil data dari database untuk tabel peternakan
$query = "SELECT * FROM peternakan";
$resultObjek = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">
<!-- head -->

<head>
    <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
    <meta name='description' content="Website Public" />
    <meta name='keywords' content="" />
    <meta name='robots' content='index,follow' />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-161425080-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-161425080-1');
    </script>

    <title>Visi Misi - Website Pemerintah Kabupaten Bantul</title>
    <link href="https://bantulkab.go.id//resource/doc/images/icon/favicon.png" rel="SHORTCUT ICON" />
    <!-- themes style -->
    <link rel="stylesheet" type="text/css" href="https://bantulkab.go.id/resource/themes/canvas/load-style.css" media="screen" />
    <!-- other style -->

</head>


<body class="stretched">

    <!-- Document Wrapper
	============================================= -->
    <div id="wrapper" class="clearfix">

        <!-- Header
		============================================= -->
        <header id="header" class="transparent-header full-header" data-sticky-class="not-dark">

            <div id="header-wrap">

                <div class="container clearfix">

                    <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                    <!-- Logo
============================================= -->

                    <div id="logo">
                        <a href="index.php" class="standard-logo" data-dark-logo="https://bantulkab.go.id//resource/temp/logo/logo-bantul-dark@2x.png"><img src="https://bantulkab.go.id//resource/temp/logo/logo-bantul@2x.png" alt="Logo Bantul"></a>
                        <a href="index.php" class="retina-logo" data-dark-logo="https://bantulkab.go.id//resource/temp/logo/logo-bantul-dark.png"><img src="https://bantulkab.go.id//resource/temp/logo/logo-bantul.png" alt="Logo Bantul"></a>
                    </div>
                    <!-- #logo end -->

                    <!-- Primary Navigation
============================================= -->


                    <nav id="primary-menu">
                        <ul class="sf-js-enabled" style="touch-action: pan-y;">
                            <li class=" sub-menu"> <a href="#">
                                    <div>Tentang Bantul</div>
                                </a>
                                <ul>
                                    <li> <a href="sekilas.php">
                                            <div> Sekilas Kabupaten Bantul </div>
                                        </a></li>
                                    <li> <a href="semboyan.php">
                                            <div> Semboyan Bantul </div>
                                        </a></li>
                                    <li> <a href="lambang.php">
                                            <div> Lambang Daerah </div>
                                        </a></li>
                                    <li> <a href="sejarah.php">
                                            <div> Sejarah Bantul </div>
                                        </a></li>
                                    <li> <a href="visimisi.php">
                                            <div> Visi Misi </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class=""> <a href="#">
                                    <div>Profil</div>
                                </a>
                                <ul>
                                    <li> <a href="bupati.php">
                                            <div> <i class=""></i>Bupati & Wakil Bupati </div>
                                        </a></li>
                                    <li> <a href="forkopimda.php">
                                            <div> <i class=""></i>Forkopimda </div>
                                        </a></li>
                                    <li> <a href="stafahli.php">
                                            <div> <i class=""></i>Staf Ahli Bupati </div>
                                        </a></li>
                                    <li> <a href="perangkat.php">
                                            <div> <i class=""></i>Perangkat Daerah </div>
                                        </a></li>
                                    <li> <a href="kapanewon.php">
                                            <div> <i class=""></i>Kapanewon / Kecamatan </div>
                                        </a></li>
                                    <li> <a href="bumd.php">
                                            <div> <i class=""></i>BUMD </div>
                                        </a></li>
                                </ul>
                            </li>
                            <li class=" sub-menu"> <a href="sebaran.php">
                                    <div>Sebaran</div>
                                </a>
                            </li>
                            <!-- <li class=" sub-menu"> <a href="bantul_admin.php">
                                    <div>Login</div>
                                </a>
                            </li> -->

                        </ul>



                        <!-- Top Search
						============================================= -->
                        <div id="top-search">
                            <a href="#" id="top-search-trigger"><i class="bi bi-search"></i></a>
                            <form action="https://bantulkab.go.id/pencarian/pencarian_proses.html" method="post">
                                <input type="text" name="berita" class="form-control" autocomplete="off" value="" placeholder="Pencarian tidak bisa . . .">
                            </form>
                        </div><!-- #top-search end -->

                    </nav><!-- #primary-menu end -->

                </div>

            </div>

        </header><!-- #header end -->


        <!-- Content
		============================================= -->

        <section id="page-title">
            <div class="container clearfix">
                <h1>Visi Misi</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tentang Bantul</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Visi Misi</li>
                </ol>
            </div>
        </section>
        <section id="content">
            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="postcontent nobottommargin clearfix">
                        <!-- isi content -->
                        <div id="snav-content1" style="text-align:justify;">
                            <h2 align="center">PETA</h2>
                            <h3 class="mt-0 text-center">PETA PERSEBARAN PERTERNAKAN KABUPATEN BANTUL 2023</h3>
                            <iframe src="map.php" frameborder="0" style="width: 100%; height: 350px; border-radius: 23px; box-shadow: 0px 10px 20px rgba(0,0,0,0.2);"></iframe>
                            <!-- table ANGKA -->
                            <h3 class="mt-5 text-center">DATA PERSEBARAN ANGKA</h3>
                            <table class="table table-bordered table-striped display nowrap" id="dataTableAngka" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Wilayah</th>
                                        <th>Tahun 2023</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1; // Inisialisasi nomor urut
                                    while ($row = $resultAngka->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                                            <td><?php echo $row['wilayah']; ?></td>
                                            <td><?php echo $row['tahun_2023']; ?></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                            <!-- table Objek -->
                            <h3 class="mt-5 text-center">DATA PERSEBARAN OBJEK</h3>
                            <table class="table table-bordered table-striped display nowrap" id="dataTableObjek" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Alamat</th>
                                        <th>Kategori</th>
                                        <th>Lat</th>
                                        <th>Lng</th>
                                        <th>Foto</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1; // Inisialisasi nomor urut
                                    while ($row = $resultObjek->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                                            <td><?php echo $row['objek']; ?></td>
                                            <td><?php echo $row['alamat']; ?></td>
                                            <td><?php echo $row['kategori']; ?></td>
                                            <td><?php echo $row['latitude']; ?></td>
                                            <td><?php echo $row['lng']; ?></td>
                                            <td>
                                                <?php if ($row['foto'] != '') : ?>
                                                    <img src="img_maps/<?php echo $row['foto']; ?>" class="img-fluid" alt="Foto Objek" style="max-width: 100px;">
                                                <?php else : ?>
                                                    <span>Tidak ada foto</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                    <div class="sidebar nobottommargin col_last clearfix">
                        <div class="sidebar-widgets-wrap">
                            <div id="shortcodes" class="widget widget_links clearfix">
                                <h4>Tentang Bantul</h4>
                                <ul>
                                    <li><a href="sekilas.php">Sekilas Kabupaten Bantul</a></li>
                                    <li><a href="semboyan.php">Semboyan Bantul</a></li>
                                    <li><a href="lambang.php">Lambang Daerah</a></li>
                                    <li><a href="sejarah.php">Sejarah Bantul</a></li>
                                    <li><a href="visimisi.php">Visi Misi</a></li>
                                    <li><a href="">Video Profil Bantul</a></li>
                                </ul>
                            </div>
                            <div class="widget">
                                <h4>Instagram Photostream</h4>
                                <div>
                                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                                    <div class="elfsight-app-f426c5d4-ee62-45a2-8657-21181a2d0fd7" data-elfsight-app-lazy></div>
                                </div>
                            </div>
                            <div class="widget widget-twitter-feed">
                                <h4>Twitter Feed</h4>
                                <a class="twitter-timeline" data-width="250" data-height="300" href="https://twitter.com/pemkabbantul?ref_src=twsrc%5Etfw"></a>
                                <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                                <a href="https://twitter.com/pemkabbantul?ref_src=twsrc%5Etfw" class="btn btn-secondary btn-sm fright">Follow Twitter </a>
                            </div>
                            <br />
                            <div class="fancy-title topmargin title-border">
                                <h4>Media Sosial Bantul</h4>
                            </div>
                            <a href="https://www.facebook.com/pemkabbantul/" class="social-icon si-facebook si-small si-rounded si-light" title="Facebook">
                                <i class="icon-facebook"></i>
                                <i class="icon-facebook"></i>
                            </a>
                            <a href="diskominfo@bantulkab.go.id" class="social-icon si-gplus si-small si-rounded si-light" title="Google+">
                                <i class="icon-gplus"></i>
                                <i class="icon-gplus"></i>
                            </a>
                            <a href="https://www.instagram.com/pemkabbantul/" class="social-icon si-instagram si-small si-rounded si-light" title="instagram">
                                <i class="icon-instagram"></i>
                                <i class="icon-instagram"></i>
                            </a>
                            <a href="https://www.youtube.com/channel/UC3XfkK2AGWbJC9zINJQZUzw" class="social-icon si-youtube si-small si-rounded si-light" title="youtube">
                                <i class="icon-youtube1"></i>
                                <i class="icon-youtube1"></i>
                            </a>
                            <a href="https://twitter.com/pemkabbantul" class="social-icon si-twitter si-small si-rounded si-light" title="Twitter">
                                <i class="icon-twitter"></i>
                                <i class="icon-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- #content end -->

        <!-- Footer
		============================================= -->
        <footer id="footer" class="dark">
            <div class="container">
                <!-- Footer Widgets
				============================================= -->
                <div class="footer-widgets-wrap clearfix">
                    <div class="col_two_third">
                        <div class="col_one_third">
                            <div class="widget clearfix">
                                <p>Website Resmi Pemerintah Kabupaten Bantul</p>
                                <div>
                                    <address>
                                        <strong>Kantor:</strong>
                                        <br>
                                        Jl. Robert Wolter Monginsidi No.1 Bantul, Yogyakarta, Indonesia 55711
                                    </address>
                                    <abbr title="Phone Number"><strong>Telepon:</strong></abbr> (0274) 367509<br>
                                    <abbr title="Fax"><strong>Fax:</strong></abbr> ((0274) 368078<br>
                                    <abbr title="Email Address"><strong>Email:</strong></abbr>
                                    diskominfo@bantulkab.go.id
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third">
                            <div class="widget clearfix" style="margin-bottom: -20px;">
                                <h4>Link</h4>
                                <div class="row">
                                    <div class="col-12 bottommargin-sm">
                                        <p><a href="https://bantulkab.go.id/kebijakanprivasi.html">Kebijakan Privasi</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="widget clearfix" style="margin-bottom: -30px; margin-top: -20px;">
                                <h4>Pengunjung</h4>
                                <div class="row">
                                    <div class="col-lg-6 bottommargin-sm">

                                        <!-- <div class="counter counter-small"><span data-from="0" data-to="5863407"
											data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div> -->
                                        <div class="counter counter-small"><span data-from="0" data-to="8973844" data-refresh-interval="80" data-speed="3000" data-comma="true"></span></div>
                                        <h5 class="nobottommargin">Total</h5>
                                    </div>
                                    <div class="col-lg-6 bottommargin-sm">
                                        <!-- <div class="counter counter-small"><span data-from="0" data-to="79"
											data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div> -->
                                        <div class="counter counter-small"><span data-from="0" data-to="12174" data-refresh-interval="50" data-speed="2000" data-comma="true"></span></div>
                                        <h5 class="nobottommargin">Hari ini</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="widget clearfix" style="margin-bottom: -20px; ">
                                <div class="row">
                                    <div class="col-lg-6 clearfix bottommargin-sm">
                                        <a href="https://www.facebook.com/pemkabbantul/" target="_blank" class="social-icon si-dark si-colored si-facebook nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-facebook"></i>
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.facebook.com/pemkabbantul/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Like
                                                    us</strong><br>on Facebook</small></a>
                                    </div>
                                    <div class="col-lg-6 clearfix">
                                        <a href="https://kab-bantul.id/portal/feed.html" class="social-icon si-dark si-colored si-rss nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-rss"></i>
                                            <i class="icon-rss"></i>
                                        </a>
                                        <a href="https://kab-bantul.id/portal/feed.html"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                RSS Feeds</small></a>
                                    </div>
                                    <div class="col-lg-6 clearfix bottommargin-sm">
                                        <a href="https://www.instagram.com/pemkabbantul/" target="_blank" class="social-icon si-dark si-colored si-instagram nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-instagram"></i>
                                            <i class="icon-instagram"></i>
                                        </a>
                                        <a href="https://www.instagram.com/pemkabbantul/" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Like
                                                    us</strong><br>on Instagram</small></a>
                                    </div>
                                    <div class="col-lg-6 clearfix">
                                        <a href="https://www.youtube.com/channel/UC3XfkK2AGWbJC9zINJQZUzw" target="_blank" class="social-icon si-dark si-colored si-youtube nobottommargin" style="margin-right: 10px;">
                                            <i class="icon-youtube"></i>
                                            <i class="icon-youtube"></i>
                                        </a>
                                        <a href="https://www.youtube.com/channel/UC3XfkK2AGWbJC9zINJQZUzw" target="_blank"><small style="display: block; margin-top: 3px;"><strong>Subscribe</strong><br>to
                                                Youtube BantulTV</small></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col_one_third col_last">
                            <div class="widget clearfix">
                                <h4>Bantul Events</h4>
                                <div id="post-list-footer">
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="https://bantulkab.go.id/event/detail/17183693411215.html">UAD Moto Exhibition 2024</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>03 Juli 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="https://bantulkab.go.id/event/detail/17189802100457.html">CAKRAWALA CUP 2024</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>27 Juni 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="spost clearfix">
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="https://bantulkab.go.id/event/detail/17165998587321.html">Gelar Produk Industri Kreatif Dekranasda Bantul</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li>07 Juni 2024</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col_one_third col_last">
                        <div class="widget clearfix">
                            <h4>Berita Terkini</h4>
                            <div id="post-list-footer">
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="https://bantulkab.go.id/berita/detail/6494.html">HLUN ke-28, Seribu Lansia Ikuti Senam Massal di Paseban</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>28 Juni 2024</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="https://bantulkab.go.id/berita/detail/6495.html">Tak Hanya Keamanan Masyarakat, Jaga Warga Siap Jaga Keistimewaan DIY</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>28 Juni 2024</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="spost clearfix">
                                    <div class="entry-c">
                                        <div class="entry-title">
                                            <h4><a href="https://bantulkab.go.id/berita/detail/6493.html">Jalan Usaha Tani Diresmikan, Maksimalkan Potensi Pertanian di Lahan Pasir</a></h4>
                                        </div>
                                        <ul class="entry-meta">
                                            <li>27 Juni 2024</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Copyrights
			============================================= -->
            <div id="copyrights">
                <div class="container clearfix">
                    <div class="col_half">
                        Copyrights &copy; 2020 Kabupaten Bantul<br />
                    </div>
                    <!-- <div class="col_half col_last tright">
						<div class="fright clearfix">
							<a href="https://www.facebook.com/pemkabbantul/" class="social-icon si-small si-borderless si-facebook">
								<i class="icon-facebook"></i>
								<i class="icon-facebook"></i>
							</a>
							<a href="https://twitter.com/pemkabbantul" class="social-icon si-small si-borderless si-twitter">
								<i class="icon-twitter"></i>
								<i class="icon-twitter"></i>
							</a>
							<a href="https://www.instagram.com/pemkabbantul/" class="social-icon si-small si-borderless si-instagram">
								<i class="icon-instagram"></i>
								<i class="icon-instagram"></i>
							</a>
						</div>

						<div class="clear"></div>

						<i class="icon-envelope2"></i> diskominfo@bantulkab.go.id <span class="middot">&middot;</span>
						<i class="icon-headphones"></i>(0274) 367509<span class="middot">&middot;</span>
					</div> -->

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->
    </div><!-- #wrapper end -->

    <!-- Go To Top
	============================================= -->
    <div id="gotoTop" class="icon-angle-up"></div>


    <!-- External JavaScripts
	============================================= -->
    <!-- load javascript -->
    <script type="text/javascript" src="https://bantulkab.go.id/resource/js/jquery/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://bantulkab.go.id/resource/themes/canvas/js/plugins.js"></script>
    <script type="text/javascript" src="https://bantulkab.go.id/resource/themes/canvas/js/functions.js"></script>
    <script type="text/javascript" src="https://bantulkab.go.id/resource/themes/default/plugins/media-master/jquery.media.js"></script>

    <!-- end of javascript  -->
    <!-- Footer Scripts
	============================================= -->
    <!-- <link href="https://bantulkab.go.id//resource/js/cctv/plyr.css" rel="stylesheet" />
	<script src="https://bantulkab.go.id//resource/js/cctv/polyfill.min.js"></script>
	<script src="https://bantulkab.go.id//resource/js/cctv/plyr.min.js"></script>
	<script src="https://bantulkab.go.id//resource/js/cctv/hls.min.js"></script> -->
    <!-- 
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script> -->
    <!-- <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="/resources/demos/style.css">

	<script>
		$(function() {
			$("#datepicker").datepicker({
				format: "yyyy",
				viewMode: "years", 
				minViewMode: "years",
				autoclose:true
			});
		});
	</script> -->
    <!-- datatables -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.bootstrap5.js"></script>
    <!-- datatables eksport -->
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/dataTables.buttons.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.dataTables.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/3.0.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'Data Sebaran Angka';
            // DataTable initialisation
            $('#dataTableAngka').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "pageLength": 5,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });
        $(document).ready(function() {
            //Only needed for the filename of export files.
            //Normally set in the title tag of your page.
            document.title = 'Data Sebaran Objek';
            // DataTable initialisation
            $('#dataTableObjek').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "pageLength": 5,
                "buttons": [
                    'colvis',
                    'copyHtml5',
                    'csvHtml5',
                    'excelHtml5',
                    'pdfHtml5',
                    'print'
                ]
            });
        });
    </script>
</body>

</html>