 <?php 
 $page='Tutorials';
 $curTutorial='processes';
 include '../assets/inc/header.php'; 
 include '../assets/inc/nav.php';
 include '../assets/inc/tutorial_subnav.php';
 ?>
	<div id="main">
		<div id="content">
			<h1>Processes</h1>
			
			<div class="contentblock">
				<h2 class="leftside">What is a Process?</h2>
				<p class="rightside">
				A process is a program that the OS has launched and is working through the code. They are provided with a PID or process identifier.
				</p>
				<p class="rightside">
				Should you want to list all processes currently running on your machine, simple use the <strong>ps -A</strong> command!
				</p>
				<p class="rightside">
				Should you want to terminate a process, you would use the <strong>kill</strong> command.
				</p>
				<h4 class="rightside">Example</h4>
				<p class="rightside">
				Let's say that you want to kill a process with the PID <strong>250</strong>.<br />
				In order to do so, simply enter the following command:<br /></p>
				<p class="example rightside">kill 250</p>
			</div>
 <?php include '../assets/inc/footer.php';  ?>