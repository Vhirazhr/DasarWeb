<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
        $_SESSION["favcolor"] = "Green";
        $_SESSION["favanimal"] = "Cat";
        echo "Session variables are set.";
        ?>
    </body>
</html>
