<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

$heading = "Dashboard";
ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">
    <div class="mx-auto py-8">
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