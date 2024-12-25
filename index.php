<?php include 'header.php' ?>

        <!-- content -->
        <div class="content">

            <div class="container">
                
                <div class="box">

                    <div class="box-header">
                        <h3>Welcome, <?= $_SESSION['uname']?>!</h3>
                        <p>Nisa's English Corner is a space for English learners to enhance English grammar, vocabulary, and reading skills.</p>
                        <P>Let’s make learning English simple and fun!</P>
                    </div>
                    
                    <div class="box-body">
                        <h3>Quick Navigation</h3>
                        <p>Explore our resources:</p>
                     <ul>
                        <li><a href="grammar.php">Grammar</a>: Grammar refers to the set of rules that govern how words are structured and used in a language to form correct sentences.</li>
                        <li><a href="vocab.php">Vocabulary</a>: Vocabulary is the collection of words in a language. Expanding your vocabulary helps you express ideas clearly.</li>
                        <li><a href="english-story.php">English Story</a>: English story is a narrative written in English, often used for improving reading skills and expanding vocabulary.</li>
                    </ul>
                    </div>

                    
                </div>



            </div>
            
        </div>

<?php include 'footer.php' ?>      