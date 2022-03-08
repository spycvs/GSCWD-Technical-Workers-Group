<?php
$userData = array();
if(!empty($_GET['p_id'])){
    // Include the database configuration file
    require_once 'printdb.php';
    
    // Get the user's ID from the URL
    $userID = $_GET['p_id'];
    
    // Fetch the user data based on the ID
    //$query = $db->query("SELECT * FROM bievaluation WHERE p_id = ".$userID);
    $sql = "SELECT * FROM bievaluation WHERE p_id = ".$userID;

    $query = mysql_query($sql);

   
    if (mysql_num_rows($query) == 0) {
        echo "No rows found, nothing to print so am exiting";
        exit;
    }
    
    // While a row of data exists, put that row in $row as an associative array
    // Note: If you're expecting just one row, no need to use a loop
    // Note: If you put extract($row); inside the following loop, you'll
    //       then create $userid, $fullname, and $userstatus
    while ($row = mysql_fetch_assoc($query)) {
        echo $row["p_id"];
        echo $row["p_title"];
        echo $row["p_location"];
    }
    
    mysql_free_result($result);
}
?>
