<?php session_start();

require './includes/header.php';
$errors = [];
$missing = [];
//check if the form has been sumbitted
if (isset($_POST['submit'])) {
    //process form

    $expected = ['firstname', 'lastname', 'email', 'phone', 'pwd1', 'pwd2'];
    $required = ['firstname', 'lastname', 'email', 'phone', 'pwd1', 'pwd2'];

    $firstname=trim(filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_STRING));
    if (empty($firstname))
        $missing[]='firstname';

    $lastname=trim(filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_STRING));
    if (empty($lastname))
        $missing[]='lastname';

    $email=trim(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL));
    if (empty($email))
        $missing[]='email';

    $phone=trim(filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_NUMBER_INT));
    if (empty($phone))
        $missing[]='phone';

    $pwd1=trim(filter_input(INPUT_POST, 'pwd1', FILTER_SANITIZE_STRING));
    $pwd2=trim(filter_input(INPUT_POST, 'pwd2', FILTER_SANITIZE_STRING));
    if (empty($pwd1) || empty($pwd2))
        $missing[]='pwd1';
    elseif ($pwd1 != $pwd2)
        $errors[]='pwd1';
    else ($pwd = password_hash("$pwd1", PASSWORD_DEFAULT));

    if (!$missing && !$errors) {
        try {
            require_once('./pdo_config.php');
            $sql = "INSERT into users (firstName, lastName, email, phone, password) VALUES ('$firstname', '$lastname', '$email', '$phone', '$pwd')";
            if($conn->query($sql))
                echo '<h3>Thank you for registering!<br>You can now <a href="login.php">log in</a> using your email and password.</h3>';
            else
                echo '<h3>We were unable to process your registration at this time.</h3>';
            include 'includes/footer.php';
            exit;
        }
        catch (PDOException $e) {
            echo $e->getMessage();
            echo '<h3>We were unable to process your registration at this time.</h3>';
            include 'includes/footer.php';
            exit;
        }
    }
}
?>

<form method="post" action="register.php">

    <fieldset>
        <legend>
            <h1>Create an Account</h1>
        </legend>
        <?php
        if ($missing || $errors) { ?>
            <p class="warning">Please fix the item(s) indicated.</p>
        <?php } ?>
        <h3>
            <label for="firstname">First Name:
                <?php if ($missing && in_array('firstname', $missing)) { ?>
                    <span class="warning">Please enter your first name</span>
                <?php } ?>
            </label><br>
            <input type="text" name="firstname" id="firstname"
                <?php if ($missing || $errors) {
                    echo 'value="' . htmlentities($firstname) . '"';
                } ?>> <br>

            <label for="lastname">Last Name:
                <?php if ($missing && in_array('lastname', $missing)) { ?>
                    <span class="warning">Please enter your last name</span>
                <?php } ?>
            </label><br>
            <input type="text" name="lastname" id="lastname"
                <?php if ($missing || $errors) {
                    echo 'value="' . htmlentities($lastname) . '"';
                } ?>> <br>

            <label for="email">Email:
                <?php if ($missing && in_array('email', $missing)) { ?>
                    <span class="warning">Please enter your email address</span>
                <?php } ?>
            </label><br>
            <input type="email" name="email" id="email"
                <?php if ($missing || $errors) {
                    echo 'value="' . htmlentities($email) . '"';
                } ?>> <br>

            <label for="phone">Phone Number:
                <?php if ($missing && in_array('phone', $missing)) { ?>
                    <span class="warning">Please enter your phone number</span>
                <?php } ?>
            </label><br>
            <input type="tel" name="phone" id="phone"
                <?php if ($missing || $errors) {
                    echo 'value="' . htmlentities($phone) . '"';
                }?>> <br>

            <?php if ($errors && in_array('pwd1', $errors)) { ?>
                <span class="warning">The passwords entered do not match</span>
            <?php } ?>
            <label for="pwd1">Password:
                <?php if ($missing && in_array('pwd1', $missing)) { ?>
                    <span class="warning">Please enter a password</span>
                <?php } ?>
            </label><br>
            <input type="password" name="pwd1" id="pwd1"> <br>

            <?php if ($errors && in_array('pwd2', $errors)) { ?>
                <span class="warning">The passwords entered do not match</span>
            <?php } ?>
            <label for="pwd2">Re-enter Password:
                <?php if ($missing && in_array('pwd2', $missing)) { ?>
                    <span class="warning">Please re-enter your password</span>
                <?php } ?>
            </label><br>
            <input type="password" name="pwd2" id="pwd2"> <br><br>

            <input type="submit" value="Submit" name="submit">

        </h3>
    </fieldset>



</form>


<?php include'includes/footer.php'; ?>
