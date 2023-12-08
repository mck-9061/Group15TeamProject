<div id="message" class="message">
    <?php
        //testing
        // $_SESSION['message'] = "Test message";

        if (isset($_SESSION['message'])) {

            ?>
                <!-- Add styling here -->
                <div><?php echo "{$_SESSION['message']}"; ?></div>

            <?php


            unset($_SESSION['message']);
        }
    ?>
</div>