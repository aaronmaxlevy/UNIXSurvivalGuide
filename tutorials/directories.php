 <?php 
    $page='Tutorials';
    $curTutorial='directories';
    include('../assets/inc/header.php'); 
    include('../assets/inc/nav.php');
    include('../assets/inc/tutorial_subnav.php');
?>
	<div id="main">
		<div id="content">
			<h1>Working with Directories</h1>

			<div class="contentblock">
				<h2 class="leftside">What are Directories?</h2>
				<p class="rightside">Directories are what you probably recognize as folders in Windows, OSX or Linux.</p>
			</div>

			<div class="contentblock">
				<h2 class="leftside">Structure</h2>
				<p class="rightside">The file structure is are like the roots of a tree, called a hierarchical structure. The origin of the root system is called root and is notated by a / (slash).</p>
                <p class="rightside">Sub-directories are the directories that branch off of the directory.</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside">Here is the full directory for Rattlesnake: </p>
				<p class="rightside example">/Reptiles/Snakes/Rattlesnake</p>
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Now find the directory for Mountain Lion</p>
				
				<img class="rightside" src="../assets/imgs/diagram1.png" alt="structure diagram">
			</div>			
							
			<div class="contentblock">
				<h2 class="leftside">Make a Directory</h2>
				<p class="rightside"><strong>mkdir</strong> is the command for <strong>m</strong>a<strong>k</strong>e<strong>dir</strong>ectory</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside example">mkdir myanimals</p>
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Now create a new directory called unixtutorials</p>
			</div>

				<!--<div style="float:right; width:460px; vertical-align: middle; clear:left;">
					<br>
					<img style="vertical-align:middle;" src="../assets/imgs/windows_putty.png" width="400" alt="windows putty">
				</div> -->
			
			<div class="contentblock">
				<h2 class="leftside">Viewing Files and Directories</h2>
				<p class="rightside"><strong>ls</strong> is the command for <strong>l</strong>i<strong>s</strong>t contents</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="example rightside"> ls myanimals </p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">enter ls to see your directories. unixtutorials should be one of them.</p>
			</div>

			<div class="contentblock">
				<h2 class="leftside">Changing Directories</h2>
				<h3 class="rightside">Changing to a Different Directory</h3>
				<p class="rightside"><strong>cd</strong> is the command for <strong>c</strong>hange <strong>d</strong>irectory</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside example">cd myanimals</p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Which one of there will will take you to the youranimals directory?</p>
					<ul class="rightside">
						<li>cd .youranimals</li>
						<li>cd youranimals</li>
						<li>.cd youranimals</li>
					</ul>
				
				<h3 class="rightside">Current Directory </h3>
				<p class="rightside">. (Period) means the current directory. Don’t think this is useful? We’ll see (it saves typing time)</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside example">. myanimals </p>
				<p class="rightside"> This command stays in the my animals directory.	</p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Which one of these will go to current directory youranimals?</p>
					<ul class="rightside">
						<li>cd .youranimals</li>
						<li>cd youranimals</li>
						<li>.cd youranimals</li>
					</ul>
				
				<h3 class="rightside">Parent Directory </h3>
				<p class="rightside">.. (2 Periods) means the parent directory</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="rightside example">..myanimals</p>
				<p class="rightside">This command goes up a level to unixtutorials directory.</p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Lets go to your parent directory. You’ve been down in a animal folder for a while and want to get out. Go to youranimals!</p>
					<ul class="rightside">
						<li>cd .youranimals</li>
						<li>.youranimals</li>
						<li>..youranimals</li>
					</ul>
	
				<h3 class="rightside">~ The home directory</h3>
				<p class="rightside">~ (tilda) means the home directory</p>
				
				<h4 class="rightside">Example:</h4>
				<p class="example rightside">~ myanimals</p>
				<p class="rightside">This command goes up a level to unixtutorials directory.	</p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Lets get to your home directory! Go to your home directory youranimals.</p>
					<ul class="rightside">
						<li>cd .youranimals</li>
						<li>~youranimals</li>
						<li>..youranimals</li>
					</ul>
			</div>
			<div class="contentblock">
				<h2 class="leftside">Pathnames</h2>
				<h3 class="rightside">What are Pathnames?</h3>
				<p class="rightside">Pathnames let you see where you are in a directory. This is really helpful if you get lost.</p>
				
				<h3 class="rightside">The Command</h3>
				<p class="rightside"><strong>pwd</strong> is the command for <strong>p</strong>rint <strong>w</strong>orking <strong>d</strong>irectory</p>
				
				<h4 class="rightside">Exercise:</h4>
				<p class="rightside">Let’s find out where you are! Which answer lets us do that?</p>
					<ul class="rightside">
						<li>cd</li>
						<li>~nom nom</li>
						<li>pwd</li>
					</ul>
			</div>
			
			<div class="contentblock">
				<h2 class="leftside">Summary</h2>
				<p class="rightside">Just Cause we all love tables</p>
				<table class="rightside sum">
				    <tr>
				        <th>Command</th>
				        <th>Purpose</th>
				    </tr>
				    <tr>
				        <td class="sum color cells">ls</td >
				        <td class="sum color cells">list files and directories</td >
				    </tr>
				    <tr>
				        <td class="sum cells">ls -a</td >
				        <td class="sum cells">list all files and directories</td >
				    </tr>
				     <tr>
				        <td class="sum color cells">mkdir</td >
				        <td class="sum color cells">make a directory</td >
				    </tr>
				     <tr>
				        <td class="sum cells">cd directory</td >
				        <td class="sum cells">list all files and directories</td >
				    </tr>
				     <tr>
				        <td class="sum color cells">cd</td >
				        <td class="sum color cells">change to home-directory</td >
				    </tr>
				     <tr>
				        <td class="sum cells">cd ~</td >
				        <td class="sum cells">change to home-directory</td >
				    </tr>
				     <tr>
				        <td class="sum color cells">cd ..</td >
				        <td class="sum color cells">change to parent-directory</td >
				    </tr>
				     <tr>
				        <td class="sum cells">pwd</td >
				        <td class="sum cells">display the path of the current directory</td >
				    </tr>
				</table>
				
				<h2 class="rightside"><a href="../quizzes/quiz1.php">It's Quiz Time!</a></h2>
			</div>
			
<?php include '../assets/inc/footer.php'; ?>