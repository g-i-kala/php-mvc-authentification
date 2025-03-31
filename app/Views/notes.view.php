<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">
   
     <?php
    foreach($notes as $note) {
        echo "<li> {$note['content']} </li>";
    };
    ?>     

</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>