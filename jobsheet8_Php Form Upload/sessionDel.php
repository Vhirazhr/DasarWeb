<?php
session_start();
?>

<!DOCTYPE html>
<body>
    <?php
    session_unset();
    session_destroy();

    echo"All sessiom are removed"
    ?>
</body>
