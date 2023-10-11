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
                    <h2 class="h3 mb-2 text-gray-800">Tambah Data Karyawan</h2>
                    <div class="card shadow mb-4">
                    <form action="/web2/user/save_user.php" method="POST">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Karyawan PT. Al Ahram Sarana Wisata</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" name="usernameuser" placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Divisi</label>
                            <select class="form-control"  name="passworduser" >
                                <option>Ticketing</option>
                                <option>Purchasing</option>
                                <option>Personalia</option>
                                <option>Umrah & Hajj</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jabatan</label>
                            <select class="form-control"  name="jabatanuser" >
                                <option>Manager</option>
                                <option>Anggota</option>
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