<?php session_start();

$errors = [];
$missing = [];
//check for login attempt
if (isset($_POST['login'])) {
    //process login attempt
    $expected = ['email', 'pwd'];
    $required = ['email', 'pwd'];

    $email=trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    if (empty($email))
        $missing[]='email';
    $pwd=trim(filter_input(INPUT_POST,'pwd', FILTER_SANITIZE_STRING));
    if (empty($pwd))
        $missing[]='pwd';

    //connect to the database
    if (!$missing && !$errors) {
        try {
            require_once('../../pdo_config.php');
            //check database for matching email address
            $sql = 'SELECT email, password, isAdmin FROM users WHERE email = :email';
            $stmt = $conn->prepare($sql);
            $stmt->execute([':email' => $email]);
            $rows = $stmt->rowCount();
            //get hashed password and admin status if a user was returned
            if ($rows != 0) {
                $row = $stmt->fetch();
                $hash = $row[1];
                $isAdmin = $row[2];
                $_SESSION['isAdmin'] = $isAdmin;
                $_SESSION['signedIn'] = $signedIN;
                //verify password and redirect to admin or index page
                if (password_verify($pwd, $hash)){
                    if ($isAdmin == 1)
                        header('Location: admin.php');
                    else
                        header('Location: index.php');
                }
                //display message if password is not correct
                else
                    echo '<h3>Your password is incorrect. Please try again.</h3>';
            }
            //display message if email not found in database
            else
                echo '<h3>No accounts found. Please try again or register.</h3>';
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            echo '<h3>We are unable to process your login attempt at this time. Please try again later.</h3>';
            include 'includes/footer.php';
            exit;
        }
    }
}
require './includes/header.php';
?>

    <form method="post" action="login.php">
        <fieldset>
            <legend>
                <h1>Log In</h1>
            </legend>
            <h3>
                <label for="email">Email:
                    <?php if ($missing && in_array('email', $missing)) { ?>
                        <span class="warning">Please enter a valid email address</span>
                    <?php } ?>
                </label><br>
                <input type="email" name="email" id="email"
                    <?php if ($missing || $errors) {
                        echo 'value="' . htmlentities($email) . '"';
                    } ?>> <br>

                <label for="pwd">Password:
                    <?php if($missing && in_array('pwd', $missing)) { ?>
                        <span class="warning">Please enter your password</span>
                    <?php } ?>
                </label><br>
                <input type="password" name="pwd" id="pwd"><br><br>

                <input type="submit" value="Log In" name="login"

            </h3>
        </fieldset>
    </form>

<?php
include'includes/footer.php'
?>