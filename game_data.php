<?php
    require './includes/header.php';



        //Connecting to the database
        $servername = "localhost";
        $username = "username";
        $password = "password";
    $database = mysql_connect()

?>

<article class="search_table">
    <label>Username: </label>
    <input type="text" name="username" value="<?php echo $name?>"/><br>
    <label>Number of Results: </label>
    <input type="text" name="numOfRes" value="<?php echo $result_limit?>"/><br>
    <input type="submit" name="submitButton" value="submit"/>

</article>


<article>
    <table>
        <tr>
            <th>Rank</th>
            <th>Name</th>
            <th>Score</th>
        </tr>
        <?php
            $name = $_POST['username'];
            $result_limit = $_POST['numOfRes'];
            $submitButton = $_POST['submitButton']


            //Query the database for the requested data
            $result = $conn->query("SELECT username, score FROM players ORDER BY score LIMIT 10");
            $rank = 1;
            //Checking if $result has a new line before trying to input the data
            if(has.next($result)){
                //Place data in a table/leaderboard
                while($row = $result){
                    echo "<td>{$rank}</td>
                          <td>{$row['user']}</td>
                          <td>{$row['score']}</td>";
                    //Increment rank by one for every data entry in the table
                    $rank++;
                }
            }
        ?>
    </table>
</article>
</body>

<?php
    include './includes/footer.php';
?>