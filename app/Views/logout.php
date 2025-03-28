<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

$title = "@Auth Logged Out";
ob_start();

?>
<div>
    <div class="header__wrapper mx-auto py-8">
        <h1 class="font-bold"> You are logged out.</h1>
    </div>

    <div>
        <p>Want to log back in? </p>
        <a href='/login' class="link size-fit self-center my-4  py-1 text-blue-400 hover:text-blue-700 "> Log In </a>
    </div>

</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>