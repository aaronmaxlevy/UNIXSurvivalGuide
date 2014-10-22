<div id="secondary">
	<nav id="subnav">
		<ul>
        	<li<?php echo (isset($curQuiz) && $curQuiz=='Quiz 1') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>../quizzes/quiz1.php" title="">Quiz 1</a></li>
        	
        	<li<?php echo (isset($curQuiz) && $curQuiz=='Quiz 2') ? ' class="active"' : ''; ?>>
        	 <a href="<?php echo $path;?>quiz2.php" title="">Quiz 2</a></li>
      	
        	<li<?php echo (isset($curQuiz) && $curQuiz=='Quiz 3') ? ' class="active"' : ''; ?>>
        	 <a href="<?php echo $path;?>quiz3.php" title="">Quiz 3</a></li>		
        	 
        	<li<?php echo (isset($curQuiz) && $curQuiz=='Quiz 4') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>quiz4.php" title="">Quiz 4</a></li>
        	 
        	<li<?php echo (isset($curQuiz) && $curQuiz=='Quiz 5') ? ' class="active"' : ''; ?>>
        	<a href="<?php echo $path;?>quiz5.php" title="">Quiz 5</a></li>
        </ul>
	</nav>
</div>