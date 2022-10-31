<section class="container mb-5 mt-5">
    <h2 class="display-5">Ostatnie wpisy</h2>

    <?php
        if ($database->getEntries()->rowCount()) {
            foreach ($database->getEntries() as $entry) {
    ?>
                <div class="card mt-2 mb-2">
                    <div class="card-header">
                        Data: <?php echo $entry['created_at']; ?> - Dodał: <?php echo $entry['firstname']; ?>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><?php echo $entry['content']; ?></p>
                        <a href="helper/remove_entry.php?entry_id=<?php echo $entry['id']; ?>" class="btn btn-danger">Usuń ten wpis</a>
                    </div>
                </div>

    <?php
            }
        } else {
            echo "<p class=\"lead pt-4\">Obecnie brak wpisów...</p>";
        }

    ?>



</section>