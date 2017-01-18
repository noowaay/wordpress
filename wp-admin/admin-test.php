<?php
/** Load WordPress Bootstrap */
require_once( dirname( __FILE__ ) . '/admin.php' );

/** Load WordPress dashboard API */
require_once(ABSPATH . 'wp-admin/includes/dashboard.php');
?>

<div>
	<p>--------TEST-------</p>
	<pre>
	<?php
	$id = $_GET['test'];
	$paged = get_query_var('test', 1);  ?>

	<h1>Currently Browsing Page <?php echo (int) $paged.' '.$text; ?></h1>

	<?php
	$link = '#';
	$wpQuery = new WP_Query('author='.$id);
	print_r($wpQuery->posts);
	if ($wpQuery->have_posts()) {
		echo 'ok';
		while ($wpQuery->have_posts()) {
			$wpQuery->the_post();
			$link = get_the_ID().' '.get_the_title();
			echo '<p>'.$link.'</p>';
		}
	}
	?>
	</pre>
</div>

<?php
	require( ABSPATH . 'wp-admin/admin-footer.php' );
?>