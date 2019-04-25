
 <?php
    $host = "dicodingsrvr.database.windows.net";
    $user = "xal70666";
    $pass = "Baihaqi123";
    $db = "dicodingwebapp";

    try {
        $conn = new PDO("sqlsrv:server = $host; Database = $db", $user, $pass);
        $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    } catch(Exception $e) {
        echo "Failed: " . $e;
    }

 ?>
