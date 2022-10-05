<?php require __DIR__ . '/../../templates/header.php'; ?>

<?php if ( isset( $_GET['success'] ) ): ?>
	<div class="success">
		El post ha sido creado
	</div>
<?php endif; ?>

<table>
	<?php foreach ( $all_post as $post ): ?>
		<tr>
			<td><?php echo $post['tittle']; ?></td>
			<td><a href="<?php echo SITE_URL . '/admin?action=list-post&delete-post=' . $post['id'] ?>&hash=<?php echo generate_hash( 'delete-post-' . $post['id'] ); ?>">Delete</a></td>
			<td><a href="<?php echo SITE_URL . '/admin?action=list-post&edit-post=' . $post['id'] ?>&hash=<?php echo edit_post( 'edit-post-' . $post['id'] ); ?>">Edit</a></td>
		</tr>
	<?php endforeach; ?>
</table>
<?php require __DIR__ . '/../../templates/footer.php'; ?>
