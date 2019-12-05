
        <?php
        if (isset($error)): ?> 
            <p>
                <?= $error; ?>
            </p>
        <?php else:
            foreach ($jokes as $joke): ?>
                <blockquote>
                    <p>
                        <?= htmlspecialchars($joke['joketext'], ENT_QUOTES, 'UTF-8') ?> 

                        (by <a href="mailto:<?php echo htmlspecialchars($joke['email'], ENT_QUOTES,'UTF-8'); ?>">
                            <?php echo htmlspecialchars($joke['name'], ENT_QUOTES,'UTF-8'); ?>
                        </a>)



                        <form action="deleteJoke.php" method="POST">
                            <input type="hidden" name="id" value="<?php echo $joke['id'] ?>">
                            <input type="submit" value="Delete"> 
                        </form>
                    </p>
                </blockquote>          
            <?php endforeach;
        endif;         
        

