<?php
include("../init.php");

?>
<!-- <?php  phpinfo(); ?> -->

<?php include("elements/header.php"); ?>

<?php
$postsController = $container->make("postsController");
$postsController->index();
?>
<!-- Hello -->
<!-- <ul>
  <?php foreach ($res AS $row): ?>
    <li>
      <a href="post.php?id=<?php echo $row->id; ?>">
        <?php echo $row->title; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul> -->

<?php include("elements/footer.php"); ?>

