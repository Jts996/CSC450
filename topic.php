<?php
/**
 * Created by PhpStorm.
 * User: James
 * Date: 02/05/2018
 * Time: 02:07
 */


    require './includes/header.php';

?>


 <html>
 <head>
     <title>Add a Topic</title>
     </head>
 <body>
 <article>
     <h1>Add a Topic</h1>
     <form method=post action="addtopic.php">
         <p><strong>Your E-Mail Address:</strong><br>
             <input type="text" name="user_email" size=40 maxlength=150>
         <p><strong>Topic Title:</strong><br>
             <input type="text" name="title" size=40 maxlength=150>
         <P><strong>Post Text:</strong><br>
             <textarea name="post_content" rows=8 cols=40 wrap=virtual></textarea>
         <P><input type="submit" name="submit" value="Add Topic"></p>
     </form>

 </article>

 </body>
</html>



<?php
include './includes/footer.php';
?>
