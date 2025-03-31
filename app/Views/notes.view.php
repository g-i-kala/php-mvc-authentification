<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

ob_start();

?>
<div>
    <div class="header__wrapper mx-auto py-8">
        <h1 class="font-bold">About</h1>
     
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>