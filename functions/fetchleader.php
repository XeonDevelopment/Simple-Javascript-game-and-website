    <?php
    //Grabs the database items from username colum and score, ordering it by descending order
    $query = $db->prepare('SELECT * FROM users ORDER BY users.score DESC');
    $query->execute();

    //Grabs all data from the selected colums
    $result = $query -> fetchAll();

    // Grabs data from each row and echos out HTML code.

    foreach( $result as $row ) {

    	echo "<tr>";
    	echo "<td>" . $row['username'] . "</td>";
    	echo "<td>" . $row['score'] . "</td>";
    	echo "</tr>";

    }

    ?>