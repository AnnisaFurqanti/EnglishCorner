<?php include 'header.php' ?>

<?php
$sql = "SELECT title, content FROM tb_story";
$result = $conn->query($sql);
?>

<body class="bg-light"></body>

    <div class="content-story">
        
        <div class="container-story">
            <h1 class="story-title">English Stories</h1>
            <?php
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<div class='story'>";
                    echo "<h2>" . $row["title"] . "</h2>";
                    echo "<p>" . $row["content"] . "</p>";
                    echo "</div>";
                }
            } else {
                echo "No stories found.";
            }
            $conn->close();
            ?>
        </div>
 
    </div>

<?php include 'footer.php' ?> 