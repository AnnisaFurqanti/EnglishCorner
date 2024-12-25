<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        Change Password
                    </div>

                    <div class="box-body">
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="pass1" placeholder="password" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input type="password" name="pass2" placeholder="confirm password" class="input-control" required>
                            </div>

                            <button type="button" class="btn" onclick="window.location = 'index.php'">back</button>
                            <input type="submit" name="submit" value="submit" class="btn btn-blue">

                        </form>

                        <?php 

                            if(isset($_POST['submit'])){

                                $pass1      = addslashes($_POST['pass1']);
                                $pass2  = addslashes($_POST['pass2']);

                                if($pass1 != $pass2){
                                    echo '<div class="alert alert-error">Password confirmation does not match. Please check and try agin.</div>';
                                }else{
                                
                                    $update    = mysqli_query($conn, "UPDATE tb_admin SET 
                                           password = '".MD5($pass1)."'
                                           WHERE id_user = '".$_SESSION['uid']."'
                                    ");
         

                                    if($update){
                                        echo '<div class="alert alert-success">Password change successful</div>';
                                    }else{
                                        echo 'Password change failed' .mysqli_error($conn);
                                    }

                                }

                            }

                        ?>

                    </div>
                    
                </div>

            </div>
            
        </div>

<?php include 'footer.php' ?>      