<?
    //1.create a database connection
    $dbhost = 'localhost';
    $dbuser = 'li-hang';
    $dbpass = '8brs5r00';
    $dbname = '2201713130213';
    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    // Test if the connection works.
    if (mysqli_connect_errno()){
        die('Database connection failed: ' .
           mysqli_connect_error().
           '('. mysqli_connect_error() .')'
            );
    }
?>