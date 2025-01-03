<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        VOCABULARY BANK
                    </div>

                    <div class="box-body">

                        <form action="">
                            <div class="input-group">
                                <input type="text" name="key" placeholder="search">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </div>
                        </form>

                        <table class="table-vocab">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>vocabularies</th>
                                    <th>meaning</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $no = 1;

                                    $where = " WHERE 1=1 ";
                                    if(isset($_GET['key'])){
                                        $where .= " AND word LIKE '%".addslashes($_GET['key'])."%' ";
                                    }

                                    $words = mysqli_query($conn, "SELECT * FROM tb_vocabulary $where ORDER BY id_vocabulary DESC");
                                    if(mysqli_num_rows($words) > 0){
                                        while($vocab = mysqli_fetch_array($words)){
                                ?>
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $vocab['word']?></td>
                                    <td><?= $vocab['meaning']?></td>
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