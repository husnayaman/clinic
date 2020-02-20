<?php include_once('../_header.php'); ?>

    <div class="box">
    <h1>Staff</h1>
        <h4>
            <small>Edit Staff</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left">Back</i></a>
            </div>  
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <?php
                    $id = @$_GET['id'];
                    $sql_doc = mysqli_query($con, "SELECT * FROM tb_user WHERE id_user = '$id'") or die (myqsli_error($con));
                    $data = mysqli_fetch_array($sql_doc);
                ?>
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="hidden" name="id" value="<?=$data['id_user']?>">
                        <input type="text" name="name" id="name" value="<?=$data['name_user']?>" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="ic">No IC</label>
                        <input type="number" name="ic" id="ic" value="<?=$data['ic_user']?>" class="form-control" required autofocus>
                    </div>

                    <!-- <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" value="<?=$data['username']?>" class="form-control" required autofocus>
                    </div> -->

                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="pass" name="pass" id="pass" value="<?=$data['password']?>" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" value="<?=$data['email']?>" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="lvl">Level</label>
                        <div>
                            <label>
                                <input type="radio" name="lvl" id="lvl" value="staff" required <?=$data['level'] == "staff" ? "checked" : null ?>> Staff
                            </label>
                            <label>
                                <input type="radio" name="lvl" id="lvl" value="admin" required <?=$data['level'] == "admin" ? "checked" : null ?>> Admin
                            </label>
                        </div>
                    </div>

                    <div class="form-group pull-right">
                        <input type="submit" name="edit" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>        

<?php include_once('../_footer.php'); ?>
