<?php include __DIR__ . "/../layouts/header.php" ?>

<h1>Startseite des Blogs</h1>
<p class="lead">Das hier ist die Startseite des Blogs.</p>

<ul>
  <?php foreach ($posts AS $post): ?>
    <li>
      <a href="post.php?id=<?php echo $post->id; ?>">
        <?php echo $post->title; ?>
      </a>
    </li>
  <?php endforeach; ?>
</ul>

<?php include __DIR__ . "/../layouts/footer.php" ?>