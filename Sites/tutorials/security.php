 <?php 
 $page='Tutorials';
 $curTutorial='security';
 include '../assets/inc/header.php'; 
 include '../assets/inc/nav.php';
 include '../assets/inc/tutorial_subnav.php';
 ?>
	<div id="main">
		<div id="content">
			<h1>Security</h1>
			<div class="contentblock">
				<h2 class="leftside">Permissions</h2>
				<p class="rightside">
				The most important thing to know about security in Unix is how permissions work.<br />
				There are three distinct levels of permissions, User, Group, and Other.<br />
				<strong>User</strong> permissions apply to the owner of the file<br />
				<strong>Group</strong> applies to the members of the same group as the owner<br />
				<strong>Other</strong> applies to everyone else<br />
				</p>
				<p class="rightside">
				Files/Directories in UNIX are given permissions in three-digit numbers
				The first number is the User permission, the second is the group permission, and the third is the Other permission level.
				</p>
				<p class="rightside">
				The types of permissions in UNIX are Read, Write and Execute. Each of these is assigned a number.<br />
				Read = 4<br />
				Write = 2<br />
				Execute = 1<br />
				</p>
				<p class="rightside">
				The sum of that number will yield the permission value for that specific type. 
				e.g. Let’s say you want the owner to have full permissions, Read + Write + Execute (4+2+1) is equal to 7. If you want everyone to have total permissions, then you would set the permissions as 777, although that is not advised.
				</p>
				<h2 class="rightside"><a href="../quizzes/quiz5.php">It's Quiz Time!</a></h2>			    
			</div>
				
 <?php include '../assets/inc/footer.php';  ?>