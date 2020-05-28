			<?php
		if (isset($_POST['video']))
		{
			$song = $_POST['video'];
			$song = preg_replace("#.*youtube\.com/watch\?v=#","",$song);
			$song = '<iframe width="50" height="50"  src="http://www.youtube.com/embed/'.$song.'?autoplay=1&muted=0&control=0" style="top: 10px;" frameborder="0"></iframe>';
			echo $song;
		} 
	?>
	