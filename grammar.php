<?php include 'header.php' ?>

<?php
$sql = "SELECT * FROM tb_grammar";
$result = $conn->query($sql);
?>

    <div class="container-grammar">
            <h1 class="grammar-title">English Grammar</h1>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='grammar'>";
                    echo "<h2>" . nl2br(htmlspecialchars($row["title"])) . "</h2>";
                    echo "<h3>" . nl2br(htmlspecialchars($row["sub_title"])) . "</h3>";
                    echo "<p>" . nl2br(htmlspecialchars($row["content"])) . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No data found.";
            }
            $conn->close();
            ?>
    </div>

<?php include 'footer.php' ?> 