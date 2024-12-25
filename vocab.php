<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">
            <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

            <div class="container-vocab">
                
                <div class="box-beranda">

                    <div class="box-header-beranda text-center">
                        <h2>VOCABULARY BANK</h2>
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