<?php
function get_all_post() {
  global $app_db;
  $result = $app_db->query("SELECT * FROM post" );
  return $app_db->fetch_all( $result);
}

function insert_post($tittle, $excerpt, $content){
  global $app_db;

  $published_on = date( 'm-d Y H:i:s' );

    $tittle = $app_db->real_escape_string( $tittle );
  	$excerpt = $app_db->real_escape_string( $excerpt );
  	$content = $app_db->real_escape_string( $content );

  $query ="INSERT INTO post
  ( tittle, excerpt, content, published_on )
  VALUES ('$tittle', '$excerpt', '$content', '$published_on')";

  $result = $app_db->query( $query );
}
function get_post( $post_id ) {
	global $app_db;

	$post_id = intval( $post_id );

	$query = "SELECT * FROM post WHERE id = " . $post_id;
	$result = $app_db->query( $query );

	return $app_db->fetch_assoc( $result );
}
function delete_post( $id ) {
	global $app_db;
	$result = $app_db->query( "DELETE FROM post WHERE id = $id" );
}
//Editar un post
function edit_post($id){
  global $app_db;
}
?>
