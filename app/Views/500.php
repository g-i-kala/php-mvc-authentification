<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
$heading = '';
ob_start();

?>
<div>
    <div class="header__wrapper mx-auto py-8">
        <h1 class="font-bold">500 Internal Server Error</h1>
    </div>

    <div class="dashboard__content">
        <p>Something went wrong on our end. Please try again later.</p>
    </div>


</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>