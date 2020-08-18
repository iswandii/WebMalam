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

                        $id = $_GET['id'];

                        $query_show = mysqli_query($koneksi, "SELECT * FROM user WHERE id_user='$id'");

                        if (mysqli_num_rows($query_show) == 0) {
                            echo '<script>window.history.back()</script>';
                        } else {
                            $data = mysqli_fetch_assoc($query_show);
                        }

                        ?>

                        <form class="forms-sample" action="proses/proses_edit.php" method="POST">
                            <input type="hidden" name="id_user" value="<?php echo $data['id_user'] ?>">

                            <div class="form-group">
                                <label for="exampleInputName1">Username</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="Username" name="username" value="<?php echo $data['username'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Password</label>
                                <input type="password" class="form-control" id="exampleInputName1" placeholder="Password" name="password" value="<?php echo $data['password'] ?>" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputName1">Email</label>
                                <input type="email" class="form-control" id="exampleInputName1" placeholder="Email" name="email" value="<?php echo $data['email'] ?>" required>
                            </div>

                            <div class=" form-group">
                                <label for="exampleInputName1">No HP</label>
                                <input type="text" class="form-control" id="exampleInputName1" placeholder="No Hp" name="no_hp" value="<?php echo $data['no_hp'] ?>" required>
                            </div>

                            <div class=" form-group">
                                <label for="exampleFormControlSelect2">Pilih User</label>
                                <?php if (empty($data['level'])) { ?>
                                    <select class="form-control" id="exampleFormControlSelect2" name="level">
                                        <option value="admin">Admin</option>
                                        <option value="operator">Operator</option>
                                        <option value="autor">Autor</option>
                                    </select>
                                <?php } else { ?>
                                    <select class="form-control" id="exampleFormControlSelect2" name="level">
                                        <option <?php echo ($data['level'] == 'admin') ? 'selected' : '' ?> value="admin">Admin</option>
                                        <option <?php echo ($data['level'] == 'operator') ? 'selected' : '' ?> value="operator">Operator</option>
                                        <option <?php echo ($data['level'] == 'autor') ? 'selected' : '' ?> value="autor">Autor</option>

                                    </select>
                                <?php } ?>
                            </div>

                            <button type="submit" class="btn btn-danger mr-2" name='update_user'>Update</button>

                        </form>
                    </div>
                </div>
            </div>