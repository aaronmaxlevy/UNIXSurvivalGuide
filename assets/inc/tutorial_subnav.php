<div  id="secondary">
	<nav id="subnav">
		<ul>
            <li<?php echo (isset($curTutorial) && $curTutorial=='intro') ? ' class="active"' : ''; ?>>
            <a href="<?php echo $path;?>intro.php" >Intro</a></li>
            	 
            <li<?php echo (isset($curTutorial) && $curTutorial=='directories') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>directories.php" >Directories</a></li>
        	
        	<li<?php echo (isset($curTutorial) && $curTutorial=='files') ? ' class="active"' : ''; ?>>
        	 <a href="<?php echo $path;?>files.php" >Working with Files</a></li>
      	
        	<li<?php echo (isset($curTutorial) && $curTutorial=='redirection') ? ' class="active"' : ''; ?>>
        	 <a href="<?php echo $path;?>redirection.php" >Redirection</a></li>		
        	 
        	<li<?php echo (isset($curTutorial) && $curTutorial=='security') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>security.php" >Security</a></li>
        	 
        	<li<?php echo (isset($curTutorial) && $curTutorial=='processes') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>processes.php" >Processes</a></li>
		</ul>
	</nav>
</div>