 <?php 
 $page='Tutorials';
 $curTutorial='intro';
 include '../assets/inc/header.php'; 
 include '../assets/inc/nav.php';
 include '../assets/inc/tutorial_subnav.php';
 ?>
	<div id="main">
		<div id="content">
			<h1>Intro</h1>
			
			<div class="contentblock">
				<h2 class="leftside">Launching a UNIX terminal</h2>

				<h3 class="rightside">OS X</h3>
				<p class="rightside">Spotlight Search (command+Space) for Terminal.</p>

				<img class="rightside" src="../assets/imgs/mac_terminal.png" alt="mac_terminal">
			</div>
			
			<div class="contentblock">
				<h3 class="rightside">Linux</h3>
				<p class="rightside">Search for Terminal. Depending on your distribution of Linux, it could be under utilities.</p>

				<img class="rightside" src="../assets/imgs/linux_terminal.png" alt="linux_terminal">
			</div>	
			
			<div class="contentblock">
				<h3 class="rightside">Windows</h3>
				<p class="rightside">Windows is the oddball here. It was built off of DOS, and not UNIX. Although there are programs to make Windows respond to UNIX commands (Cygwin Terminal), it otherwise won’t recognize them. In order to communicate with web servers, use programs such as PuTTY or CyberDuck.</p>

				<img class="rightside" src="../assets/imgs/windows_putty.png" alt="windows_putty">
			</div>
			
			<div class="contentblock">
				<h2 class="leftside">The Basics</h2>
				
				<h3 class="rightside">Kernel</h3>
				<h4 class="rightside">What is the Kernel?</h4>
				<p class="rightside">The kernel is the core of UNIX. It determines how much time and memory is allocated to programs. It handles all the files stored on the system and responds to user entries.</p>
				
				<h3 class="rightside">Shell</h3>
				<h4 class="rightside">What is the Shell?</h4>
				<p class="rightside">The shell interprets entered commands that the kernel can understand. This is known as a <strong>CLI</strong> or <strong>C</strong>ommand <strong>L</strong>ine <strong>I</strong>nterpreter.</p>
				
				<h4 class="rightside">Command Completion</h4>
				<p class="rightside">To make typing in commands quicker, the shell is able to complete partially typed in commands by hitting the <strong>TAB</strong> key. This only works if there is only one command with those letters. Otherwise the shell will beep at you asking for more letters.</p>
				
				<h4 class="rightside">Command History</h4>
				<p class="rightside">The shell retains the last commands that you have entered. You can navigate through the last entered commands (only the ones entered correctly) by hitting the up and down keys.</p>
			</div>
		
 <?php include '../assets/inc/footer.php'; ?>