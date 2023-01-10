<?php include __DIR__ . "/../layouts/header.php" ?>

<h1>post.php</h1>
<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?php echo $post['title']; ?></h3>
    </div>
    <div class="panel-body">
        <?php echo nl2br($post['content']) ?>
    </div>
</div>

<?php include __DIR__ . "/../layouts/footer.php" ?>