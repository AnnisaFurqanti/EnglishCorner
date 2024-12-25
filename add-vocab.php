<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        Add Vocabulary
                    </div>

                    <div class="box-body">
                        
                        <form action="" method="POST">

                            <div class="form-group">
                                <label>Word</label>
                                <input type="text" name="word" placeholder="add new word" class="input-control" required>
                            </div>

                            <div class="form-group">
                                <label>Meaning</label>
                                <input type="text" name="meaning" placeholder="add meaning" class="input-control" required>
                            </div>

                            <button type="button" class="btn" onclick="window.location = 'vocab.php'">back</button>
                            <input type="submit" name="submit" value="submit" class="btn btn-blue">

                        </form>

                        <?php 

                            if(isset($_POST['submit'])){

                                $words      = addslashes(ucwords($_POST['word']));
                                $meaning  = addslashes($_POST['meaning']);

                                $cek       = mysqli_query($conn, "SELECT word FROM tb_vocabulary WHERE word = '".$words."' ");
                                if(mysqli_num_rows($cek) > 0){
                                    echo '<div class="alert alert-error">Word already exists</div>';
                                }else{

                                    $simpan = mysqli_query($conn, "INSERT INTO tb_vocabulary VALUES ( 
                                            null,
                                            '".$words."',
                                            '".$meaning."',
                                            null
                                    )");

                                if($simpan){
                                    echo '<div class="alert alert-success">New word added successfully</div>';
                                }else{
                                    echo 'failed to add new word' .mysqli_error($conn);
                                }

                                }
                               
                            }

                        ?>

                    </div>
                    
                </div>

            </div>
            
        </div>

<?php include 'footer.php' ?>      