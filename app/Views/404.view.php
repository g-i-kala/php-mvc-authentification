<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

$title = "@Auth Dashboard";
ob_start();

?>
<div>
    <div class="header__wrapper mx-auto py-8">
        <h1 class="font-bold">Sorry.</h1>
    </div>

    <div class="dashboard__content">
        Page not found.
    </div>


</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>