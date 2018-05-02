<?php
    require './includes/header.php';

    require_once './pdo_config.php';



try {
    $conn->beginTransaction();

    //gather the topics
    $get_topics = "select topic_id, title,
 date_format(date, '%b %e %Y at %r') as fmt_date,
 user_email from topic order by date desc";
    $statement = $conn->prepare($get_topics);
    $statement->execute();
    $num_of_columns = $statement->fetchColumn();

    echo $num_of_columns;
    if($num_of_columns <= 0) {
        //there are no topics, so say so
        $display_block = "<P><em>No topics exist.</em></p>";
    } else {
        //create the display string
        $display_block = "
    <table cellpadding=3 cellspacing=1 border=1>
    <tr>
    <th>TOPIC TITLE</th>
    <th># of Replies</th>
    </tr>";

        $topic_info = $statement->setFetchMode(pdo::FETCH_ASSOC);

        foreach ($statement->fetchAll() as $topic_info) {
            echo $num_of_columns;
            $topic_id = $topic_info['topic_id'];
            $topic_title = stripslashes($topic_info['title']);
            $topic_create_time = $topic_info['fmt_date'];
            $topic_owner = stripslashes($topic_info['user_email']);

            //get number of posts
            $get_num_posts = "select count(reply_id) from reply
             where topic = $topic_id";
            $statement1 = $conn->prepare($get_num_posts);
            $statement1->execute();
            $num_replies = $statement1->rowCount();

            //add to display
            $display_block .= "
        <tr>
        <td>
        <strong>$topic_title</strong></a><br>
        Created on $topic_create_time by $topic_owner</td>
        <td align=center>$num_replies</td>
        </tr>";
        }

        //close up the table
        $display_block .= "</table>";
    }
}catch (Exception $e){
    echo "Error loading";
}
 ?>
 <html>
 <head>
 <title>Forum</title>
 </head>
 <body>
<h1>Forum Topics</h1>
<button type="button"><a href="./topic.php">Add Topic</a></button>
<?php print $display_block; ?>

</body>
</html>

<?php
    include './includes/footer.php';
?>