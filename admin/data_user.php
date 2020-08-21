<?php include 'header.php' ?>
<!-- partial -->
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Form Data User</h4>
            <p class="card-description"> Masukkan Data User </p>

            <form class="forms-sample" action="proses/input_user.php" method="POST">

              <div class="form-group">
                <label for="exampleInputName1">Username</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Password</label>
                <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="password" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">Email</label>
                <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" required>
              </div>

              <div class="form-group">
                <label for="exampleInputName1">No HP</label>
                <input type="text" class="form-control" id="exampleInputName1" placeholder="No Hp" name="no_hp" required>
              </div>

              <div class="form-group">
                <label for="exampleFormControlSelect2">Pilih User</label>
                <select class="form-control" id="exampleFormControlSelect2" name="level">
                  <option value="admin">Admin</option>
                  <option value="operator">Operator</option>
                  <option value="autor">Autor</option>

                </select>
              </div>

              <button type="submit" class="btn btn-success mr-2" name="input_user">Submit</button>
              <button class="btn btn-light" type="reset">Reset</button>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tabel Data User</h4>
            <div class="table-responsive">
              <table class="table table-striped table-bordered data" id="example">
                <thead>
                  <tr>
                    <th>No </th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Level</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>

                  <!-- Proses menampilkan data dari database -->

                  <?php
                  $user = query("SELECT * FROM user");
                  $no = 1;
                  foreach ($user as $data) : ?>
                    <tr>
                      <th><?= $no; ?></th>
                      <td><?= $data['username'];  ?></td>
                      <td><?= $data['email']; ?></td>
                      <td><?= $data['no_hp']; ?></td>
                      <td><?= $data['level']; ?></td>
                      <td>
                        <a href="proses/proses_hapus_user.php?id=<?= $data['id_user']; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus ?');" class="btn btn-danger">Hapus</a>
                        <a href="proses/proses_view.php?id=<?= $data['id_user']; ?>" class="btn btn-success">View</a>
                        <a href="edit_user.php?id=<?= $data['id_user']; ?>" class="btn btn-primary">Edit</a>
                      </td>
                    </tr>

                  <?php
                    $no++;
                  endforeach;
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>

      </div>
      <?php include 'footer.php' ?>