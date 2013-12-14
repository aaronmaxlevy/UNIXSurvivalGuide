<?php 
    $page='Home';
    include('assets/inc/header.php'); 
    include('assets/inc/nav.php');
?>
    <div id="main">
		<div id="content">
			<h1>What is Unix?</h1>
			<div class="contentblock">
				<img id="leftside" style="width:200px; padding:0" src="assets/imgs/intro.png" alt="">
				
				<p class="rightside">Unix is an Operating System designed for multitasking with multiple users. 
				It currently has many branches based off of the operating system, the best known are Mac OS X, Linux and Solaris.</p>	
			</div>
			
			<div class="contentblock">
				<h2 class="leftside">Why do I care?</h2>
				<p class="rightside">How is an OS created in 1979 still relevant today? There are many modern OSs that use UNIX as a groundwork for their 
				Operating System. You might recognize Mac OS X, Linux or Solaris. They may use GUIs (Graphical User Interfaces) with 
				interactive icons, but UNIX commands still work under their hoods using terminal. More importantly, web servers don’t 
				have GUIs and web developers need to know UNIX commands to work with them.</p>
			</div>
			
			<div class="contentblock">
				<h2 class="leftside">History</h2>
				<p class="rightside">Unix was created in 1969 by AT&amp;T Bell Labs. The project formed out of an attempt to make a larger and more 
				complex system called Multics. When the project was abandoned, the last of the researchers redid their work on 
				a far smaller scale. Although originally called Unics, it was redubbed Unix when it incorporated support for 
				multiple users at the same time.</p>
			</div>
			
			<div class="contentblock">
				<h2 class="leftside">Site Links</h2>
				<h3 class="rightside">Tutorials</h3>
				<p class="rightside">Want to learn Unix? Here you go.</p>
				<h3 class="rightside">Quizzes</h3>
				<p class="rightside">Test your Unix commanding ability.</p>
				<h3 class="rightside">About</h3>
				<p class="rightside">Learn about our team.</p>
				<h3 class="rightside">Contact Us</h3>
				<p class="rightside">Wish to thank us for a job well done? Here you go. Bug reports can also go here. Please refer complaints to your local congressman.</p>
			</div>
<?php
	include('assets/inc/footer.php');
?>