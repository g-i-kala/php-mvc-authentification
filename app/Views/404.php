<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
$heading = 'Not Found';
ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">

    <div class="dashboard__content">
        Page not found.
    </div>


</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>