<div id="message" class="message">
    <?php
        //testing
        // $_SESSION['message'] = "Test message";

        if (isset($_SESSION['message'])) {
            echo "{$_SESSION['message']}";
            unset($_SESSION['message']);
        }
    ?>
</div>