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
                    <h2 class="h3 mb-2 text-gray-800">Edit Data Kamar</h2>
                    
                    <?php
                    //tangkap parameter dari listtamu, memakai method GET
                    $id_kamar = $_GET['id'];
                    $tipekamar = $_GET['tipe_kamar'];
                    $jmljamaah = $_GET['jml_jamaah'];
                    $stokkamar = $_GET['stok_kamar'];
                    $statuskamar = $_GET['status_kamar'];
                    $hargakamar = $_GET['harga_kamar'];
                    $tglpergii = $_GET['tgl_pergii'];
                    $tglpulangg = $_GET['tgl_pulangg'];

                    ?>

                    <div class="mt-5" style="width: 800px;">
                    <form action="/web2/kamar/prosesedit_kamar.php" method="POST">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tipe Umrah</label>
                            <input type="text" class="form-control" id="tipe_kamar" name="tipekamar" value="<?php echo $tipekamar; ?>"> <input type="hidden" id="id_kamar" name="id_kamar" value="<?php echo $id_kamar; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah Jemaah</label>
                            <input type="number" class="form-control" id="jml_jamaah" name="jmljamaah" value="<?php echo $jmljamaah; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah Petugas</label>
                            <input type="number" class="form-control" id="stok_kamar" name="stokkamar" value="<?= $stokkamar;?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Umrah</label>
                            <input type="text" class="form-control" id="harga_kamar" name="hargakamar" value="<?= $hargakamar;?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pergi</label>
                            <input type="date" class="form-control" id="tgl_pergii" name="tglpergii" value="<?= $tglpergii;?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pulang</label>
                            <input type="date" class="form-control" id="tgl_pulangg" name="tglpulangg" value="<?= $tglpulangg;?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Status</label>
                            <select class="form-control"  name="statuskamar" value="<?= $statuskamar;?>" >
                                <option>Aktif</option>
                                <option>Selesai</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-3" type="Submit" value="Edit"> Edit </button>
                        
                        
                    </form>
                    </div>
                <!-- Begin Page Content -->
              
                <!-- /.container-fluid -->
            </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('Layout/footer.php');?>