<?php
// if (!isset($_SESSION['user_id'])) {
//     header("Location: login.php");
//     exit();
// }

ob_start();

?>
<div class="mx-auto max-w-7xl py-6 sm-px-6 lg:px-8">
   
     <?php foreach($notes as $note) : ?>
        <a href="/note?id=<?= $note['id'] ?>" class="link size-fit self-center my-4  py-1 text-blue-400 hover:text-blue-700">
            <li>
                <?= $note['content'] ?>
            </li>
        </a>
    <?php endforeach; ?>     

</div>

<?php
$content = ob_get_clean();
include 'layout.view.php';
?>