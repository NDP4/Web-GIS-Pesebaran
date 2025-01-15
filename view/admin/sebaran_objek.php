<?php
require_once '../../config/conn.php';

session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: ../../bantul_admin.php');
    exit();
}

// Ambil username dari database
$user_id = $_SESSION['user_id'];
$query = "SELECT username FROM user WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param('i', $user_id);
$stmt->execute();
$stmt->bind_result($username);
$stmt->fetch();
$stmt->close();

// Ambil data dari database
$query = "SELECT * FROM peternakan";
$result = $conn->query($query);
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin | Sebaran Objek</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- google maps api -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?" async defer></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/gh/somanchiu/Keyless-Google-Maps-API@v6.6/mapsJavaScriptAPI.js"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap"></script> -->
    <script async type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCRYyqyiLqo4ms7f-DktJKqcv0VWa7rOWI&callback=Function.prototype" defer></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDIJ9XX2ZvRKCJcFRrl-lRanEtFUow4piM&callback=initMap" async defer></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAOVYRIgupAurZup5y1PRh8Ismb1A3lLao&libraries=places&callback=initMap" async defer></script> -->


    <!-- datatables -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.bootstrap5.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.0.2/css/buttons.dataTables.css">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav  sidebar sidebar-dark accordion" style="background: linear-gradient(to bottom, #1F3A5F 0%, #4d648d 100%);" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center mt-3" href="blank.php">
                <div class="sidebar-brand-icon ">
                    <!-- <i class="fas fa-laugh-wink"></i> -->
                    <img style="width: 45px;" src="https://bantulkab.go.id/resource/doc/images/logos/logo-bantul-medium.png" alt="logo">
                </div>
                <div class="sidebar-brand-text mx-3"><sup>Kab. </sup>Bantul</div>
                <!-- <a href="#" class="standard-logo" data-dark-logo="https://bantulkab.go.id//resource/temp/logo/logo-bantul-dark@2x.png"><img src="https://bantulkab.go.id//resource/temp/logo/logo-bantul@2x.png" alt="Logo Bantul"></a> -->
                <!-- <a href="https://bantulkab.go.id/beranda.html" class="retina-logo" data-dark-logo="https://bantulkab.go.id//resource/temp/logo/logo-bantul-dark.png"><img src="https://bantulkab.go.id//resource/temp/logo/logo-bantul.png" alt="Logo Bantul"></a> -->
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0 mt-3">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="blank.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-layer-group"></i>
                    <span>Sebaran</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Data Sebaran:</h6>
                        <a class="collapse-item" href="sebaran_angka.php">Angka</a>
                        <a class="collapse-item" href="sebaran_objek.php">Objek</a>
                    </div>
                </div>
            </li>



            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                <!-- Addons -->
            </div>


            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="../../config/process/logout.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light topbar mb-4 static-top shadow" style="background: #1f2b3e; ">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>



                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white small"><?php echo htmlspecialchars($username); ?></span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="profile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../../config/process/logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 text-gray-800">Sebaran Objek</h1>
                    <span style="font-size: 12px;" class="mb-5 text-gray-400"><i><a href="blank.php" style="text-decoration: none;" class="text-gray-400">Dashboard</a> - DATA - Sebaran - Objek</i></span>
                    <!-- content -->
                    <div class="row mt-3">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <h3 align="center" class="h3 mt-4">Tabel Sebaran Peternakan</h3>
                                <div style="display: flex; justify-content: end; padding-right: 12px;" class="mt-0 mb-0">
                                    <button class="btn btn-success btn-sm mb-4" data-toggle="modal" data-target="#addModal">Tambah Data</button>
                                </div>

                                <div class="card-header py-3 mt-2 mb-5" align="center" style="border-radius: 12px;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped display nowrap" id="dataTable" width="100%" cellspacing="0">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama</th>
                                                    <th>Alamat</th>
                                                    <th>Kategori</th>
                                                    <th>Lat</th>
                                                    <th>Lng</th>
                                                    <th>Foto</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $no = 1; // Inisialisasi nomor urut
                                                while ($row = $result->fetch_assoc()) { ?>
                                                    <tr>
                                                        <td><?php echo $no++; ?></td> <!-- Menampilkan nomor urut -->
                                                        <td><?php echo $row['objek']; ?></td>
                                                        <td><?php echo $row['alamat']; ?></td>
                                                        <td><?php echo $row['kategori']; ?></td>
                                                        <td><?php echo $row['latitude']; ?></td>
                                                        <td><?php echo $row['lng']; ?></td>
                                                        <td>
                                                            <?php if ($row['foto'] != '') : ?>
                                                                <img src="../../img_maps/<?php echo $row['foto']; ?>" class="img-fluid" alt="Foto Objek" style="max-width: 100px;">
                                                            <?php else : ?>
                                                                <span>Tidak ada foto</span>
                                                            <?php endif; ?>
                                                        </td>
                                                        <td>
                                                            <button class="btn btn-primary btn-sm edit-btn" data-id="<?php echo $row['id']; ?>" data-objek="<?php echo $row['objek']; ?>" data-alamat="<?php echo $row['alamat']; ?>" data-kategori="<?php echo $row['kategori']; ?>" data-latitude="<?php echo $row['latitude']; ?>" data-lng="<?php echo $row['lng']; ?>" data-toggle="modal" data-target="#editModal">Edit</button>
                                                            <button class="btn btn-danger btn-sm delete-btn" data-id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#deleteModal">Hapus</button>
                                                        </td>

                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Add Modal -->
                                    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="addModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addModalLabel">Tambah Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="addForm" action="../../config/process/add_data_objek.php" method="POST" enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label for="add-foto">Foto</label>
                                                            <input type="file" class="form-control-file" id="add-foto" name="foto" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-objek">Objek</label>
                                                            <input type="text" class="form-control" id="add-objek" name="objek" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-alamat">Alamat</label>
                                                            <input type="text" class="form-control" id="add-alamat" name="alamat" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-kategori">Kategori</label>
                                                            <select class="form-control" id="add-kategori" name="kategori" required>
                                                                <option value="peternakan ayam">Peternakan Ayam</option>
                                                                <option value="peternakan sapi">Peternakan Sapi</option>
                                                                <option value="peternakan ikan">Peternakan Ikan</option>
                                                                <option value="peternakan">Peternakan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-latitude">Latitude</label>
                                                            <input type="text" class="form-control" id="add-latitude" name="latitude" required readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="add-lng">Longitude</label>
                                                            <input type="text" class="form-control" id="add-lng" name="lng" required readonly>
                                                        </div>
                                                        <!-- Include map or coordinates input here -->
                                                        <div id="map" style="height: 400px; width: 100%;"></div>
                                                        <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>



                                    <!-- Delete Modal -->
                                    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="deleteModalLabel">Hapus Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="deleteForm" action="../../config/process/delete_data_objek.php" method="POST">
                                                        <input type="hidden" name="id" id="delete-id">
                                                        <p>Apakah Anda yakin ingin menghapus data ini?</p>
                                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- Edit Modal -->
                                    <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel">Edit Data</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="editForm" action="../../config/process/update_data_objek.php" method="POST" enctype="multipart/form-data">
                                                        <input type="hidden" id="edit-id" name="id">
                                                        <div class="form-group">
                                                            <label for="edit-foto">Foto Baru</label>
                                                            <input type="file" class="form-control-file" id="edit-foto" name="foto">
                                                            <small class="form-text text-muted">Biarkan kosong jika tidak ingin mengganti foto.</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-objek">Objek</label>
                                                            <input type="text" class="form-control" id="edit-objek" name="objek" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-alamat">Alamat</label>
                                                            <input type="text" class="form-control" id="edit-alamat" name="alamat" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-kategori">Kategori</label>
                                                            <select class="form-control" id="edit-kategori" name="kategori" required>
                                                                <option value="peternakan ayam">Peternakan Ayam</option>
                                                                <option value="peternakan sapi">Peternakan Sapi</option>
                                                                <option value="peternakan ikan">Peternakan Ikan</option>
                                                                <option value="peternakan">Peternakan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-latitude">Latitude</label>
                                                            <input type="text" class="form-control" id="edit-latitude" name="latitude" required readonly>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="edit-lng">Longitude</label>
                                                            <input type="text" class="form-control" id="edit-lng" name="lng" required readonly>
                                                        </div>
                                                        <!-- Include map or coordinates input here -->
                                                        <div id="edit-map" style="height: 400px; width: 100%;"></div>
                                                        <button type="submit" class="btn btn-primary mt-3">Edit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Web GIS <?= date('Y'); ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../config/process/logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

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
            document.title = 'Simple DataTable';
            // DataTable initialisation
            $('#dataTable').DataTable({
                "dom": '<"dt-buttons"Bf><"clear">lirtp',
                "paging": true,
                "autoWidth": true,
                "pageLength": 100,
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

    <!-- untuk mengkondisikan maps -->
    <script>
        let map;
        let marker;

        function initMap() {
            // Initialize map
            map = new google.maps.Map(document.getElementById('map'), {
                center: {
                    lat: -7.9006697,
                    lng: 110.2541329
                },
                zoom: 11
            });

            // Add a marker on map click
            map.addListener('click', function(event) {
                addMarker(event.latLng);
            });
        }

        function addMarker(location) {
            // Remove the existing marker, if any
            if (marker) {
                marker.setMap(null);
            }

            // Add new marker
            marker = new google.maps.Marker({
                position: location,
                map: map
            });

            // Set the latitude and longitude values to the form
            document.getElementById('add-latitude').value = location.lat();
            document.getElementById('add-lng').value = location.lng();
        }

        // Initialize map when modal is shown
        $('#addModal').on('shown.bs.modal', function() {
            initMap();
        });
    </script>
    <script>
        let editMap;
        let editMarker;

        function initEditMap() {
            // Initialize map
            editMap = new google.maps.Map(document.getElementById('edit-map'), {
                center: {
                    lat: -7.9006697,
                    lng: 110.2541329
                },
                zoom: 11
            });

            // Add a marker on map click
            editMap.addListener('click', function(event) {
                addEditMarker(event.latLng);
            });
        }

        function addEditMarker(location) {
            // Remove the existing marker, if any
            if (editMarker) {
                editMarker.setMap(null);
            }

            // Add new marker
            editMarker = new google.maps.Marker({
                position: location,
                map: editMap
            });

            // Set the latitude and longitude values to the form
            document.getElementById('edit-latitude').value = location.lat();
            document.getElementById('edit-lng').value = location.lng();
        }

        // Initialize map when modal is shown and set marker to current coordinates
        $('#editModal').on('shown.bs.modal', function() {
            initEditMap();

            const lat = parseFloat(document.getElementById('edit-latitude').value);
            const lng = parseFloat(document.getElementById('edit-lng').value);

            if (!isNaN(lat) && !isNaN(lng)) {
                const currentLocation = {
                    lat: lat,
                    lng: lng
                };
                editMap.setCenter(currentLocation);
                addEditMarker(currentLocation);
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('.edit-btn').on('click', function() {
                var id = $(this).data('id');
                var objek = $(this).data('objek');
                var alamat = $(this).data('alamat');
                var kategori = $(this).data('kategori');
                var latitude = $(this).data('latitude');
                var lng = $(this).data('lng');
                var foto = $(this).data('foto'); // assuming you have a data attribute for 'foto'

                // Set values to form fields in edit modal
                $('#edit-id').val(id);
                $('#edit-objek').val(objek);
                $('#edit-alamat').val(alamat);
                $('#edit-kategori').val(kategori);
                $('#edit-latitude').val(latitude);
                $('#edit-lng').val(lng);

                // Clear any previously selected file
                $('#edit-foto').val('');

                // Optionally, display existing photo (if applicable)
                // Example: 
                // $('#current-photo').attr('src', 'path_to_current_photo/' + foto);

                // Optional: Update map coordinates display if applicable
                // You may need to update map display based on latitude and longitude
            });

            $('.delete-btn').on('click', function() {
                var id = $(this).data('id');
                $('#delete-id').val(id);
            });
        });
    </script>



</body>

</html>