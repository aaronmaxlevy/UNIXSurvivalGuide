 <?php 
 $page='Tutorials';
 $curTutorial='redirection';
 include '../assets/inc/header.php'; 
 include '../assets/inc/nav.php';
 include '../assets/inc/tutorial_subnav.php';
 ?>
	<div id="main">
		<div id="content">
			<h1>Redirection</h1>
			
			<div class="contentblock">
				<p>
				On a most basic level, redirection is taking a stream of data, and redirecting that data to something/somewhere else. <br />
				In UNIX there are two main types of redirection. The first being output redirection, and the second being input redirection. Let’s start with output!
				</p>
			</div>
			<div class="contentblock">
				<h2 class="leftside">Output Redirection</h2>
				<p class="rightside">
				With Output Redirection, we utilize the ‘>’ operator, which looks like a sideways caret.
				Fun Fact: you can also find that symbol in our logo up above!
				</p>
				<p class="rightside">
				Let’s say that you want to list the contents of your current directory but there’s a twist! You want to be able to output that listing to….. A FILE!
				</p>
				<p class="rightside">
				So you already know that the ls command will list the contents of your current directory, but how do you store it you may ask? Easy! Let’s store the listing to a file named “testfile” using the following command.				
				</p>
				<p class="example rightside">ls > testfile</p>
			</div>	
			<div class="contentblock">	
				<h2 class="leftside">Input Redirection</h2>
				<p class="rightside">
				This one isn’t as fun, however it still has merit and is useful! <br />
				Input Redirection is for when you want to redirect the contents of a file into a program to interact with the data. <br />
				You use the other caret, “&lt;” to achieve this. <br />
				Let’s say we want to use the cat command on a file called testIR. Do so as follows:</p>
				<p class="example rightside">cat &lt; testIR</p>
				
				<h2 class="rightside"><a href="../quizzes/quiz3.php">It's Quiz Time!</a></h2>
			</div>
						    

 <?php include '../assets/inc/footer.php';  ?>