<style>
  .aksi button{
    margin-right: 5px;
  }
</style>

<!-- Content Header (Page header) -->
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Tables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data User dan Admin</h3>
                <br>
                <div class="aksi">
                  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                  Tambah User
                </button>
                <a href="index.php?page=import_data">
                  <button type="button" class="btn btn-success">
                    <i class="fa fa-save"></i>
                    Import Data
                  </button>
                </a>
                <br><br>
                <a href="page/user/print_user.php" target="_blank">
                  <button type="button" class="btn btn-success">
                    <i class="fa fa-print"></i>
                    Print
                  </button>
                </a>
                </div>
                
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                        <th>No</th>
                        <th>ID User</th>
                        <th>Nama User</th>
                        <th>Status</th>
                        <th>Action</th>
                  </thead>
                  <tbody>
                    <?php 
                        
                        $no = 0;
                        $admin = $mysqli->query("SELECT * FROM tbuser");
                        while ($m = mysqli_fetch_array($admin)) {
                        $no++;
                    ?>
                    <tr>
                        <td><?php echo $no; ?></td>
                        <td><?php echo $m['iduser']; ?></td>
                        <td><?php echo $m['namauser']; ?></td>
                        <td><?php echo $m['status']; ?></td>
                        <td>
                            <a href="index.php?page=edit_user&kode=<?php echo $m['iduser'];?>">
                                <button class="btn btn-warning btn-sm"  role="button"><i class="fa fa-edit"></i></button>
                             </a>
                             <a href="index.php?page=delete_user&kode=<?php echo $m['iduser'];?>" onclick="return confirm('Yakin akan menghapus data?')">
                                <button class="btn btn-danger btn-sm"  role="button"><i class="fa fa-edit"></i></button>
                            </a>
                        </td>
                    </tr>
                        <?php } ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

    <!-- Modal Form tambah data -->
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Form Tambah User</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form action="index.php?page=create_user" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID User</label>
                    <input type="text" class="form-control" name="iduser" id="exampleInputEmail1" placeholder="Ketik User Id..">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" name="namauser" id="exampleInputEmail1" placeholder="Ketik nama..">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Status</label>
                    <input type="text" class="form-control" name="status" id="exampleInputEmail1" placeholder="Ketik status..">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Ketik Password..">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->