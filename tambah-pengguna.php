<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        Add User
                    </div>

                    <div class="box-body">
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="full name" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" placeholder="username" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label>Level</label>
                                <select name="level" class="input-control" required>
                                    <option value=""> </option>
                                    <option value="Admin">Admin</option>
                                    <option value="Visitor">Visitor</option>
                                </select>
                            </div>

                            <button type="button" class="btn" onclick="window.location = 'user.php'">back</button>
                            <input type="submit" name="submit" value="submit" class="btn btn-blue">

                        </form>

                        <?php 

                            if(isset($_POST['submit'])){

                                $nama      = addslashes(ucwords($_POST['name']));
                                $username  = addslashes($_POST['username']);
                                $level     = $_POST['level'];
                                $pass      = '242424';

                                $cek       = mysqli_query($conn, "SELECT username FROM tb_admin WHERE username = '".$username."' ");
                                if(mysqli_num_rows($cek) > 0){
                                    echo '<div class="alert alert-error">Username already exists</div>';
                                }else{

                                    $simpan = mysqli_query($conn, "INSERT INTO tb_admin VALUES ( 
                                            null,
                                            '".$nama."',
                                            '".$username."',
                                            '".MD5($pass)."',
                                            '".$level."',
                                            null
                                    )");

                                if($simpan){
                                    echo '<div class="alert alert-success">User added successfully</div>';
                                }else{
                                    echo 'failed to add user' .mysqli_error($conn);
                                }

                                }
                               
                            }

                        ?>

                    </div>
                    
                </div>

            </div>
            
        </div>

<?php include 'footer.php' ?>      