<?php include 'header.php' ?>

<?php
    $edit     = mysqli_query($conn, "SELECT * FROM tb_admin WHERE id_user = '".$_GET['id']."' ");
    $pengguna = mysqli_fetch_object($edit);
?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        edit data
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
                                
                                $update    = mysqli_query($conn, "UPDATE tb_admin SET 
                                           nama = '".$nama."',
                                           username = '".$username."',
                                           user = '".$level."'
                                           WHERE id_user = '".$_GET['id']."'
                                    ");
         

                                if($update){
                                    echo '<div class="alert alert-success">Data edit successful</div>';
                                }else{
                                    echo 'Edit failed' .mysqli_error($conn);
                                }

                            }

                        ?>

                    </div>
                    
                </div>

            </div>
            
        </div>

<?php include 'footer.php' ?>      