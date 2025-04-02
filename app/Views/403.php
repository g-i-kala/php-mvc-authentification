<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }
$heading = '403 Forbidden';
ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">

    <div class="dashboard__content">
        You are not authorised to this asset.
    </div>


</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>