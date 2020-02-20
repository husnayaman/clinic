<?php include_once('../_header.php'); ?>

    <div class="box">
    <h1>Staff</h1>
        <h4>
            <small>Add Staff</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left">Back</i></a>
            </div>    
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="process.php" method="post">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" required autofocus>
                    </div>

                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="pass" name="pass" id="pass" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="ic">No IC</label>
                        <input type="number" name="ic" id="ic" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="date">Registration Date</label>
                        <input type="date" name="date" id="date" value="<?=date('Y-m-d')?>" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="lvl">Level</label>
                        <div>
                            <label>
                                <input type="radio" name="lvl" id="lvl" value="staff" required> Staff
                            </label>
                            <label>
                                <input type="radio" name="lvl" id="lvl" value="admin" required> Admin
                            </label>
                        </div>
                    </div>


                    <div class="form-group pull-right">
                        <input type="submit" name="add" value="Save" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>        

<?php include_once('../_footer.php'); ?>
