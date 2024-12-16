
<!DOCTYPE html>
<html>

<head>
    <title>Insert Page page</title>
</head>

<body>
    <center>
        <?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "hrlvesmy_leaderboard", "O6,&*7Y(oCy{", "hrlvesmy_leaderboard");

        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. "
                . mysqli_connect_error());
        }

        // Taking all 5 values from the form data(input)
        $user_name = $_REQUEST['user_name'];
        $marks = $_REQUEST['marks'];

        // We are going to insert the data into our sampleDB table
        $sql = "INSERT INTO leaderboard VALUES ('$user_name',
            '$marks')";

        // Check if the query is successful
        if(mysqli_query($conn, $sql)){
            echo "<h3>data stored in a database successfully."
                . " Please browse your localhost php my admin"
                . " to view the updated data</h3>";

            echo nl2br("\n$user_name\n $marks\n ");
        } else{
            echo "ERROR: Hush! Sorry $sql. "
                . mysqli_error($conn);
        }

        // Close connection
        mysqli_close($conn);
        ?>
    </center>
	<a href="adddata.php">
	    <button type="button">
			Back
    	</button>
	</a>
</body>

</html>
