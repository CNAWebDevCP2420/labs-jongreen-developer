<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { ?>

    <table border="1">
    <tr><td>Key</td><td>Value</td></tr>

    <?php

    foreach ($_REQUEST as $key=>$value) {

        echo "<tr><td>".htmlentities(stripslashes($key))."</td><td>".htmlentities(stripslashes($value))."</td></tr>";

    }

    ?>

    </table>

    <?php

}

?>