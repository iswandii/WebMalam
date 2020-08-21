<?php include 'header.php' ?>
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">

                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Form Edit Data User</h4>
                        <p class="card-description"> Update Data User </p>

                        <?php

                        // ambil data di URL 
                        $id = $_GET['id'];

                        // query data user berdasarkan id
                        $user = query("SELECT * FROM user WHERE id_user='$id'")[0];
                        ?>

                        <form class="forms-sample" action="proses/proses_edit_user.php" method="POST">
                            <input type="hidden" name="id_user" value="<?= $user['id_user'] ?>">

                            <div class="form-group">
                                <label for="exampleInputName1">Username</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username" value="<?= $user['username'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Password</label>
                                <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="password" value="<?= $user['password'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?= $user['email'] ?>" required>
                            </div>

                            <div class=" form-group">
                                <label for="exampleInputName1">No HP</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="No Hp" name="no_hp" value="<?= $user['no_hp'] ?>" required>
                            </div>

                            <div class=" form-group">
                                <label for="exampleFormControlSelect2">Pilih User</label>
                                <?php if (empty($user['level'])) { ?>
                                    <select class="form-control" id="exampleFormControlSelect2" name="level">
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        <option value="autor">Autor</option>
                                    </select>
                                <?php } else { ?>
                                    <select class="form-control" id="exampleFormControlSelect2" name="level">
                                        <option <?= ($user['level'] == 'admin') ? 'selected' : '' ?> value="admin">Admin</option>
                                        <option <?= ($user['level'] == 'operator') ? 'selected' : '' ?> value="operator">Operator</option>
                                        <option <?= ($user['level'] == 'autor') ? 'selected' : '' ?> value="autor">Autor</option>

                                    </select>
                                <?php } ?>
                            </div>

                            <button type="submit" class="btn btn-danger mr-2" name='update_user'>Update</button>

                        </form>
                    </div>
                </div>
            </div>