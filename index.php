<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>
			CIT 261 Proficiency Check
		</title>
	</head>
	<?php
		date_default_timezone_set('America/Denver');
		function date_mod($file)
		{
			if ($file == '')
			{
				echo '<span style="font-style:italic">Not yet Uploaded</span>';
			}
			else
			{
				echo '<span style="font-weight:bold">'.date ("M j, Y g:iA", filemtime($file)).'</span>';
			}
		}
		
		function vid_link($link)
		{
			if ($link == '')
			{
				echo '';
			}
			else
			{
				echo '<a href="'.$link.'" target="_blank">Video Link</a>';
			}
		}
	?>
	<body>
		<header>
            <a href="index.php">CIT 261 Proficiency Check</a>
		</header>
		<section>
			<table id="topics">
				<tr>
					<td class="title">Topic ID</td>
					<td class="title">Topic Name</td>
					<td class="title">Comments</td>
					<td class="title">Teaching Presentation</td>
					<td class="title last" style="border-left:none; border-right:none;">Last Modified</td>
				</tr>
				<tr>
					<td class="topic">1</td>
					<td class="topic"><a href="topic1.html" target="_blank">Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod('topic1.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">2</td>
					<td class="topic"><a href="" target="_blank">Object Creation Functions, Inheritance, Properties, Methods, Instantiation</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
				</tr>
				<tr>
					<td class="topic">3</td>
					<td class="topic"><a href="" target="_blank">JSON Parse, Stringify</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
				</tr>
				<tr>
					<td class="topic">4</td>
					<td class="topic"><a href="topic4.html" target="_blank">Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</a></td>
					<td class="topic">Go to 13:05 in video</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0B7wk24U9QNoWcUV2dWZlYmxwQmc'); ?></td>
					<td class="last"><?php date_mod('topic4.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">5</td>
					<td class="topic"><a href="topic5.php" target="_blank">DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</a></td>
					<td class="topic">Go to 00:10 in video</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0B62hI9D6CJsvWGdpQWRvdmZFd0k'); ?></td>
					<td class="last"><?php date_mod('topic5.php'); ?></td>
				</tr>
				<tr>
					<td class="topic">6</td>
					<td class="topic"><a href="topic6.html" target="_blank">Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript</a></td>
					<td class="topic">Go to 06:30 in video</td>
					<td class="topic"><?php vid_link('https://drive.google.com/file/d/0B7wk24U9QNoWRjJvYUZRLS1RSk0/view'); ?></td>
					<td class="last"><?php date_mod('topic6.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">7</td>
					<td class="topic"><a href="topic7.html" target="_blank">Manipulating CSS Class Properties Using JavaScript</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod('topic7.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">8</td>
					<td class="topic"><a href="" target="_blank">Using XMLHTTPRequest to Consume a JSON Web Service</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
				</tr>
				<tr>
					<td class="topic">9</td>
					<td class="topic"><a href="topic9.html" target="_blank">Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.)</a></td>
					<td class="topic">Go to 08:00 in video</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0B62hI9D6CJsvVnBCZmx0cWxNMTA'); ?></td>
					<td class="last"><?php date_mod('topic9.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">10</td>
					<td class="topic"><a href="topic10.html" target="_blank">HTML5 Tags - Video, Audio, Canvas, etc.</a></td>
					<td class="topic">Go to 00:00 in video</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0Bwmm651nH-RYNWZoNC1uYVYxMG8'); ?></td>
					<td class="last"><?php date_mod('topic10.html'); ?></td>
				</tr>
			</table>
		<br>
		</section>
		<footer>
				Copyright &copy; 2017 &middot; <a href="https://www.tutapps.net" target="_blank">Chris Zitting &middot; <a href="https://www.hostyour.space" target="_blank">Host Your Space</a>
		</footer>
	</body>
</html>