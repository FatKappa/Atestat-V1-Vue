<?php
echo '<html>
<head>
<title>
Andreea
</title>
<link rel="stylesheet" type="text/css" href="./css/susstyle.css">
</head>';
echo '<body>
<blockquote>';

$RaspunsuriCorecte = 1;

	if ( !isset( $_POST[ 'q1' ] ) || strlen( $_POST[ 'q1'] ) == 0 )
	{
	}
	elseif ($_POST['q1'] == '1')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q2' ] ) || strlen( $_POST[ 'q2'] ) == 0 )
	{
	}
	elseif ($_POST['q2'] == '4')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q3' ] ) || strlen( $_POST[ 'q3'] ) == 0 )
	{
	}
	elseif ($_POST['q3'] == '5')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q4' ] ) || strlen( $_POST[ 'q4'] ) == 0 )
	{
	}
	elseif ($_POST['q4'] == '1')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q6' ] ) || strlen( $_POST[ 'q6'] ) == 0 )
	{
	}
	elseif ($_POST['q6'] == '1')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q7' ] ) || strlen( $_POST[ 'q7'] ) == 0 )
	{
	}
	elseif ($_POST['q7'] == '5')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q8' ] ) || strlen( $_POST[ 'q8'] ) == 0 )
	{
	}
	elseif ($_POST['q8'] == '5')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q9' ] ) || strlen( $_POST[ 'q9'] ) == 0 )
	{
	}
	elseif ($_POST['q9'] == '4')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}

	if ( !isset( $_POST[ 'q10' ] ) || strlen( $_POST[ 'q10'] ) == 0 )
	{
	}
	elseif ($_POST['q10'] == '4')
	{
		$RaspunsuriCorecte  = $RaspunsuriCorecte + 1;
	}
    
    echo '<div align="center">';
	echo 'Raspunsuri corecte : '.$RaspunsuriCorecte ;


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Scheletul";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    
    $sql = "INSERT INTO Users (Nume, Prenume, Clasa, Punctaj)
    VALUES ('". $_POST['Nume']."', '". $_POST['Prenume']. "', '". $_POST['Clasa']."', '".$RaspunsuriCorecte."')";

    if ($conn->query($sql) === TRUE) {
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }


    $sql = "SELECT * FROM Users ORDER BY Punctaj DESC LIMIT 10";
    $result = $conn->query($sql);

    
    echo "<br>";
    
    if ($result->num_rows > 0) {
        // output data of each row
        $it = 1;
        echo '<table border="1">';
        echo '<caption> Scoruri </caption><br>';
        echo '<tr>';
        echo '<th width="120"> Loc </th>';
        echo '<th width="120"> Nume </th>';
        echo '<th width="120"> Prenume </th>';
        echo '<th width="120"> Clasa </th>';
        echo '<th width="120"> Punctaj </th>';
        echo '</tr>';
        while($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td>'.$it.'</td>';
            echo '<td>'.$row["Nume"].'</td>';
            echo '<td>'.$row["Prenume"].'</td>';
            echo '<td>'.$row["Clasa"].'</td>';
            echo '<td>'.$row["Punctaj"].'</td>';
            $it = $it + 1;
            
        }
    } else {
        echo "0 results";
    }
    echo '</div>';
    $conn->close();
    
    echo '</blockquote>
</body>

</html> ';
?> 