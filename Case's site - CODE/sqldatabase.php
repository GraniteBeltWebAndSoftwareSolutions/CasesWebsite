<?php 


echo "click arrow to go back now ";
echo "<a href='snakeLikeGameJavascript.html'>Click To Play Snake</a>";


?>

 <?php


	
	
	define('DB_HOST', 'localhost');
	define('DB_USER', 'akkyo7dw6lhh');
	define('DB_PASS', '0101RdRZ#');
	define('DB_NAME', 'gaiman');
		// Create Connection
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

	// Check Connection
	if(mysqli_connect_errno()){
		// Connection Failed
		echo 'Failed to connect to MySQL '. mysqli_connect_errno();
	}
	
	
	
	
	
	
	
	
	
	
	echo "This has connected";
	

	// Create Query
	$query = 'SELECT * FROM books WHERE id=1';   // changed this here
echo "This has connected2";
	// Get Result
	$result = mysqli_query($conn, $query);
echo "This has connected3";
	// Fetch Data
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC); //it don't like this line
	var_dump($posts);                       // added this here
	//var_dump($posts);
echo "This has connected4";
	// Free Result
	mysqli_free_result($result);
echo "This has connected5";
	// Close Connection
	mysqli_close($conn);
echo "This has connected6";
	
	
	
	
	echo "This has connected";
	
	echo "This has connected";
?>

<?php  ?>
	<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post) : ?>
			<div class="well">
				<h1><?php echo $post['author'];
				echo strlen($post['author']);



				?></h1>
				<h3><?php echo $post['title']; ?></h3>
				<small>A book titled <?php echo $post['title']; ?> by <?php echo $post['author']; ?>
				
				with a strlen() of <?php echo strlen($post['title']); ?>
				
				for the title <?php 
				
				
				?>
				
				
				
				</small>
				<p><?php echo $post['cost']; ?></p>
				<a class="btn btn-default" href="<?php echo ROOT_URL; ?>post.php?id=<?php echo $post['id']; ?>">Read More</a>
			</div>
		<?php endforeach; ?>
	</div>
<?php include('inc/footer.php');




 ?>










