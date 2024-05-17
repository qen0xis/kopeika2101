<?php
	session_start();
	$_SESSION['user_id'] = null;

?>
<script>
	window.localStorage.clear();
	location.href = "../index.php"
</script>
<?php
	exit();
?>

