<?php
include 'connect.php';

$q = 'select * from kamar';
$i = 1;

$result = mysqli_query($con, $q);

?>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Al Ahram | History</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
    
    <?php include('Layout/header.php');?>
    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include('Layout/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include('Layout/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">History Keberangkatan</h1>

                    <div class="text-right">
                        <a class="btn btn-primary btn-sm mt-4 mb-3 float right" href="/web2/tambahhistory.php">Tambah Data</a>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">List Keberangkatan Umrah Al Ahram Sarana</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Tipe Umrah</th>
                                            <th>Jumlah Jemaah</th>
                                            <th>Jumlah Petugas</th>
                                            <th>Nama Umrah</th>
                                            <th>Tanggal Pergi</th>
                                            <th>Tanggal Pulang</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        while ($kamar = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                                        ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $kamar['tipe_kamar']; ?></td>
                                            <td><?= $kamar['jml_jamaah']; ?></td>
                                            <td><?= $kamar['stok_kamar']; ?></td>
                                            <td><?= $kamar['harga_kamar']; ?></td>
                                            <td><?= $kamar['tgl_pergii']; ?></td>
                                            <td><?= $kamar['tgl_pulangg']; ?></td>
                                            <td><?= $kamar['status_kamar']; ?></td>
                                            <td>
                                                <!-- edit -->
                                                <a class="btn btn-warning btn-sm" href="/web2/edithistory.php?id=<?= $kamar['id_kamar']; ?>&tipe_kamar=<?= $kamar['tipe_kamar']; ?>&jml_jamaah=<?= $kamar['jml_jamaah']; ?>&stok_kamar=<?= $kamar['stok_kamar']; ?>&status_kamar=<?= $kamar['status_kamar']; ?>&harga_kamar=<?= $kamar['harga_kamar']; ?>&tgl_pergii=<?= $kamar['tgl_pergii']; ?>&tgl_pulangg=<?= $kamar['tgl_pulangg']; ?>"><i class="fas fa-edit"></i></a>
                                                <!-- delete -->
                                                <a class="btn btn-danger btn-sm" href="/web2/kamar/del_kamar.php?id=<?= $kamar['id_kamar']; ?>" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fas fa-trash-alt"></i></a>
                                            </td>
                                            
                                            
                                        </tr>
                                        <?php }; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('Layout/footer.php');?>

            <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>