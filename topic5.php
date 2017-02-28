<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="styles.css">
		<title>
			CIT 261 Proficiency Check
		</title>
		<script>
		document.addEventListener("mousemove", removeLinks);
		window.addEventListener("click", function() {
			var table1  = document.getElementById("topics");
			var attr = table1.setAttribute("style");
			attr.value = "border:purple 3px solid;";
			span.setAttributeNode(attr);
			console.log("Did it work?");
		});
		function removeLinks()
		{
			var anchors = document.getElementsByTagName("A");

			for ( var i=0; i < anchors.length; i++ ) 
				{
				var span = document.createElement("SPAN");
				if ( anchors[i].className ) {
						span.className = anchors[i].className;
					}

				if ( anchors[i].id ) {
					span.id = anchors[i].id;
					}

				span.innerHTML = anchors[i].innerHTML;

				anchors[i].parentNode.replaceChild(span, anchors[i]);
				}
		}
		
		function addStyle()
		{
			var table1  = document.getElementById("topics");
			var attr = document.createAttribute("style");
			attr.value = "border:purple 3px solid;";
			span.setAttributeNode(attr);
		}
		
		</script>
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
			<a href="index.php">CIT 261 Proficiency Check</a> - DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.
		</header>
		<section>
			<table id="topics">
				<tr>
					<td onclick="addStyle()" class="title">Topic ID</td>
					<td class="title">Topic Name</td>
					<td class="title">Comments</td>
					<td class="title">Teaching Presentation</td>
					<td class="title last" style="border-left:none; border-right:none;">Last Modified</td>
				</tr>
				<tr>
					<td class="topic">1</td>
					<td class="topic"><a href="" target="_blank">Loops, Conditional Statements, Functions, Variables, Parameters, Arrays, Associative Arrays</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
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
					<td class="topic"><a href="arrays.html" target="_blank">Local Storage API, Storing and Retrieving Simple Data, Arrays, Associative Arrays, and Objects</a></td>
					<td class="topic">Go to 13:05 mark</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0B7wk24U9QNoWcUV2dWZlYmxwQmc'); ?></td>
					<td class="last"><?php date_mod('arrays.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">5</td>
					<td class="topic"><a href="" target="_blank">DOM Manipulation Using createElement, appendChild, insertBefore, removeChild, etc.</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
				</tr>
				<tr>
					<td class="topic">6</td>
					<td class="topic"><a href="animations.html" target="_blank">Creating CSS3 Transitions and Animations in CSS and triggering them with JavaScript</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod('animations.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">7</td>
					<td class="topic"><a href="" target="_blank">Manipulating CSS Class Properties Using JavaScript</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod(''); ?></td>
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
					<td class="topic"><a href="jsevents.html" target="_blank">Standard JavaScript Events Including those for Mobile Devices ( Ex. onTouchBegin, onLoad, etc.)</a></td>
					<td class="topic">Go to 8:00 mark</td>
					<td class="topic"><?php vid_link('https://drive.google.com/open?id=0B62hI9D6CJsvVnBCZmx0cWxNMTA'); ?></td>
					<td class="last"><?php date_mod('jsevents.html'); ?></td>
				</tr>
				<tr>
					<td class="topic">10</td>
					<td class="topic"><a href="media.html" target="_blank">HTML5 Tags - Video, Audio, Canvas, etc.</a></td>
					<td class="topic"></td>
					<td class="topic"><?php vid_link(); ?></td>
					<td class="last"><?php date_mod('media.html'); ?></td>
				</tr>
			</table>
		<br>
		</section>
		<footer>
				Copyright &copy; 2017 &middot; <a href="https://www.tutapps.net" target="_blank">Chris Zitting &middot; <a href="https://www.hostyour.space" target="_blank">Host Your Space</a>
		</footer>
	</body>
</html>