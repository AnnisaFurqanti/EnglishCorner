<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        User
                    </div>

                    <div class="box-body">
                        
                        <a href="tambah-pengguna.php"><i class="fa fa-plus"></i> add user</a>


                        <form action="">
                            <div class="input-group">
                                <input type="text" name="key" placeholder="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>


                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Name</th>
                                    <th>Username</th>
                                    <th>Level</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;

                                    $where = " WHERE 1=1 ";
                                    if(isset($_GET['key'])){
                                        $where .= " AND nama LIKE '%".addslashes($_GET['key'])."%' ";
                                    }

                                    $user = mysqli_query($conn, "SELECT * FROM tb_admin $where ORDER BY id_user DESC");
                                    if(mysqli_num_rows($user) > 0){
                                        while($pengguna = mysqli_fetch_array($user)){
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $pengguna['nama']?></td>
                                    <td><?= $pengguna['username']?></td>
                                    <td><?= $pengguna['user']?></td>
                                    <td>
                                        <a href="edit-pengguna.php?id=<?= $pengguna['id_user'] ?>">edit</a> |
                                        <a href="hapus.php?idpengguna=<?= $pengguna['id_user'] ?>" onclick="return confirm('Are you sure want to delete this data?')">delete</a>
                                    </td>
                                </tr>

                            <?php }}else{ ?>
                                <tr>
                                    <td colspan="5">Data not found</td>
                                </tr>
                            <?php } ?>
                            </tbody>
                        </table>

                    </div>
                    
                </div>

            </div>
            
        </div>

<?php include 'footer.php' ?>      