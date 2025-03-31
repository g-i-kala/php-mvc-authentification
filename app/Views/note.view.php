<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">
    <div class="text-sm text-right"> 
        <?= $note['created_at'] ?>
    </div>

    <div class="text-left"> 
        <?= $note['content'] ?>
    </div>
     
    <div class="my-4">
        <a href="/notes" class=" text-blue-400 hover:text-blue-700">Back to Notes</a>
    </div>
</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>