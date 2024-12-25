<?php 

    include '../koneksi.php';

    if(isset($_GET['idpengguna'])){

         $delete = mysqli_query($conn, "DELETE FROM tb_admin WHERE id_user = '".$_GET['idpengguna']."' ");
         echo "<script>window.location = 'user.php'</script>";

    }

?>