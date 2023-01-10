<?php include("../init.php"); ?>

<?php
$postsController = $container->make("postsController");
$postsController->show();
?>

<!-- <h1>post.php</h1>
<!-- $_GET gibt alle Parameter aus -->
<!-- ein Titel wird übergeben und mit PHP entgegengenommen -->
<!-- <pre><?php var_dump($_GET); ?></pre> -->
<!-- <?php
$postsRepository = $container->getPostsRepository();
$id = $_GET['id'];
$post = $postsRepository->fetchPost($id);
// var_dump($post);
?> -->

<!-- <div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post['title']; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo nl2br($post['content']) ?> -->
        <!-- Objekt -->
<!--     </div>
</div> -->

<!-- <?php include("./elements/footer.php"); ?> --> -->