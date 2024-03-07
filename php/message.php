<div id="message" class="message">
    <?php
        //testing
        // $_SESSION['message'] = "Test message";

        if (isset($_SESSION['message'])) {

            ?>
                <script> alert( "<?php echo "{$_SESSION['message']}"; ?>")  </script>

            <?php


            unset($_SESSION['message']);
        }
    ?>
</div>