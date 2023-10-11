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
                    <h2 class="h3 mb-2 text-gray-800">Tambah History Keberangkatan</h2>
                    <div class="card shadow mb-4">
                    <form action= "/web2/kamar/save_kmr.php" method="POST">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tipe Umrah</label>
                            <select class="form-control" name="tipekamar" placeholder="Tipe Umrah">
                                <option>Umrah Reguler</option>
                                <option>Umrah Plus</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah Jemaah</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="jmljamaah" placeholder="Masukkan Jumlah Jemaah yang Berangkat">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jumlah Petugas</label>
                            <input type="number" class="form-control" id="exampleFormControlInput1" name="stokkamar" placeholder="Masukkan Jumlah Petugas dari Indonesia">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama Umrah</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="hargakamar" placeholder="Masukkan Nama Umrah">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pergi</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tglpergii">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Tanggal Pulang</label>
                            <input type="date" class="form-control" id="exampleFormControlInput1" name="tglpulangg">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Status</label>
                            <select class="form-control" name="statuskamar">
                                <option>Aktif</option>
                                <option>Selesai</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-3" type="Submit"> Submit </button>
                        
                        
                    </form>
                    </div>
                <!-- Begin Page Content -->
              
                <!-- /.container-fluid -->
            </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('Layout/footer.php');?>