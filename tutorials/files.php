 <?php 
 $page='Tutorials';
 $curTutorial='files';
 include '../assets/inc/header.php'; 
 include '../assets/inc/nav.php';
 include '../assets/inc/tutorial_subnav.php';
 ?>
	<div id="main">
		<div id="content">
			<h1>Working with Files</h1>

			<div class="contentblock">				
				<h2 class="leftside">What is a File?</h2>
				<p class="rightside">A file is a collection of data. There are different kinds of files such as documents, programs, binary files (made up of computer language 1s and 0s) or directories (theses are labelled as folders on GUI OSs)</p>
			</div>

			<div class="contentblock">
				<h2 class="leftside">Copying Files</h2>
				<p class="rightside">cp filename1 filename2 is the command to make a copy of filename1 in the current directory and names it filename2.</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside">Create a backup of your mammals.txt file by copying it to a file called mammals.bak</p>
				<p class="rightside example">cp mammals.txt mammals.bak</p>
			</div>			
			
			<div class="contentblock">
				<h2 class="leftside">Moving Files</h2>
				<p class="rightside">
				You may move (and rename) files using the <strong>mv</strong> command in the same fashion as the cp command.
				</p>
			</div>	
			
			<div class="contentblock">
				<h2 class="leftside">Removing Files and Directories</h2>
				<p class="rightside">
				You may remove files by using the <strong>rm</strong> command. If you are deleting a directory, then use the <strong>rm -R</strong> command instead as it deletes recursively.
				</p>
			</div>	
			
			<div class="contentblock">
				<h2 class="leftside">Displaying File Contents</h2>
				<p class="rightside">
				Everyone loves cats right? Well in that case I suppose it is a good thing that the command to display a file in UNIX is <strong>cat</strong>!
				</p>
			</div>	
			
			<div class="contentblock">
				<h2 class="leftside">Searching File Contents</h2>
				<p class="rightside">
				In UNIX, to search a file's contents we use the <strong>grep</strong> command as follows. Let's say we want to search the file kittens.txt for the word "meow." You would enter the following: 
				</p>
				<p class="rightside example">grep meow kittens.txt</p>
				<h2 class="rightside"><a href="../quizzes/quiz2.php">It's Quiz Time!</a></h2>
			</div>	
			
			<div class="contentblock">
				<h2 class="leftside">Wildcards</h2>
				<p class="rightside">
				Wildcards in UNIX are pretty straightforward! 
				The first wildcard character is the asterisk, or <strong>*</strong> chararcter.
				This character can represent any number of unknown characters
				</p>
				<p class="rightside">
				Wildcards in UNIX are pretty straightforward! 
				The first wildcard character is the asterisk, or <strong>*</strong> character.
				This character can represent any number of unknown characters
				</p>
				<p class="rightside">
				The third wildcard operators are <strong>[</strong> and <strong>]</strong>. 
				These are used to specify specific characters that can exist, rather than a total wild card. 
				e.g. <strong>[abc]</strong> can be either letter a, b, or c.
				</p>
				<h2 class="rightside"><a href="../quizzes/quiz4.php">It's Quiz Time!</a></h2>
			</div>
 <?php include '../assets/inc/footer.php'; 
 ?>