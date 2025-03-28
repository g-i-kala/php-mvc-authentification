<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

ob_start();

?>
<div>
    <div class="header__wrapper mx-auto py-8">
        <h1 class="font-bold">Welcome, <?php echo htmlspecialchars($_SESSION['username']) ?>! </h1>
    </div>

    <div class="dashboard__content">
        #dajse
    </div>


</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>