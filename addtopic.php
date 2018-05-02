<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 02/05/2018
 * Time: 02:07
 */


    require './includes/header.php';

    require_once './pdo_config.php';

    //check for required fields
    if((!$_POST['user_email']) || (!$_POST['title']) || (!$_POST['post_content'])){
        header( 'topic.php');
        exit;
    }

    //connect to server and select database
    /*$conn = mysqli_connect("MySQL3306", "root", "")
        or die(mysqli_error());
    mysqli_select_db("dofustats_users", $conn) or die(mysqli_error());*/

    $email = trim(filter_input(INPUT_POST, 'user_email', FILTER_SANITIZE_EMAIL ));
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $content = trim(filter_input(INPUT_POST, 'post_content', FILTER_SANITIZE_STRING));
        //get id of the last query
    $topic_id = $conn->lastInsertId();

    //create and issue the first query
    $add_topic = "INSERT INTO topic ('topic_id', 'title', 'user_email', 'date') VALUES ($topic_id, $title, $email, now())";
    $conn->query($add_topic);



    //create and issue the second query
   /* $add_post= "INSERT INTO reply VALUES  ('', '$topic_id', {$_POST['post_content']}, now(),
        {$_POST['user_email']})";
    $conn->query($add_post);*/

    //Confirmation message
    $msg = "<p>The <? PHP {$_POST['title']} ?> topic has been created.</p>";

    $conn = null;
?>


 <html>
 <head>
     <title>New Topic Added</title>
     </head>
 <body>
 <article>
     <h1>New Topic Added</h1>
     <? $php

        print $msg;
     ?>
 </article>

 </body>
</html>



<?php
include './includes/footer.php';
?>
