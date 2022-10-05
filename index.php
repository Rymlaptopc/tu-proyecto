<?php require('init.php'); ?>
<?php

$all_post = get_all_post();

$post_found = false;
if ( isset( $_GET['view'] ) ) {
  $post_found = get_post( $_GET['view'] );
	if ( $post_found ) {
		$all_post = [ $post_found ];
	}
}

?>
<?php require( 'templates/header.php' ); ?>

<!--<div id="content"> -->
  <div class="post">
    <?php foreach ($all_post as $post): ?>
      <article class="post">
        <header>
          <h2 class="post-title">
          <a href="?view=<?php echo $post['id']; ?>"><?php echo $post['tittle']; ?></a>
          </h2>
        </header>
        <div class="post-content">
          <?php if ($post_found): ?>
            <?php echo $post['content']; ?>
          <?php else: ?>
            <?php echo $post['excerpt']; ?>
          <?php endif;  ?>
        </div>
        <footer>
          <span class="post-date">
          Publicada en:
          <?php echo date('m-d Y H:i:s'); ?>
          </span>
          <hr style="border-top:0.1rem solid #606c76; ;">
        </footer>
      </article>
    <?php endforeach; ?>
  </div>
</div>
<?php require( 'templates/footer.php' ); ?>
