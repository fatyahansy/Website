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
                    <h2 class="h3 mb-2 text-gray-800">Edit Data Karyawan</h2>
                    
                    <?php
                    //tangkap parameter dari listuser, memakai method GET
                    $id_user = $_GET['id'];
                    $usernameuser = $_GET['username'];
                    $passworduser = $_GET['password'];
                    $jabatanuser = $_GET['jabatan'];

                    ?>

                    <div class="card shadow mb-4">
                    <form action="/web2/user/prosesedit_user.php" method="POST">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Karyawan</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Nama</label>
                            <input type="text" class="form-control" id="username" name="usernameuser" value="<?php echo $usernameuser; ?>"> <input type="hidden" id="id_user" name="id_user" value="<?php echo $id_user; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Divisi</label>
                            <select class="form-control"  name="passworduser" value="<?= $passworduser;?>" >
                                <option>Ticketing</option>
                                <option>Purchasing</option>
                                <option>Personalia</option>
                                <option>Umrah & Hajj</option>
                                <option>Marketing</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Jabatan</label>
                            <select class="form-control"  name="jabatanuser" value="<?= $jabatanuser;?>" >
                                <option>Manager</option>
                                <option>Anggota</option>
                            </select>
                        </div>
                        <button class="btn btn-primary mt-3" type="Submit" value="Edit"> Submit </button>
                        
                    </form>
                    </div>
                <!-- Begin Page Content -->
              
                <!-- /.container-fluid -->
            </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include('Layout/footer.php');?>