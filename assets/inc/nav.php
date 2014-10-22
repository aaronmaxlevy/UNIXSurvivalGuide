    	<section id="logo">
    		<a class="rollover" href="/"></a>
    	</section>
    	<nav id="mainNav">
    		<ul>
            	<li<?php echo (isset($page) && $page=='Home') ? ' class="active"' : ''; ?>>
            	<a href="/">Home</a></li>
        	</ul>
        	
        	<ul>
            	<li<?php echo (isset($page) && $page=='Tutorials') ? ' class="active"' : ''; ?>>
            	 <a href="intro.php">Tutorials</a></li>
        	</ul>
        	
        	<ul>
            	<li<?php echo (isset($page) && $page=='Quizzes') ? ' class="active"' : ''; ?>>
            	 <a href="/quizzes/quiz1.php">Quizzes</a></li>
        	</ul>
        	
        	<ul>
            	<li<?php echo (isset($page) && $page=='About') ? ' class="active"' : ''; ?>>
            	<a href="/about.php">About</a></li>
        	</ul>
        	
            <ul>
            	<li<?php echo (isset($page) && $page=='Contact') ? ' class="active"' : ''; ?>>
            	<a href="http://nova.it.rit.edu/~teamgotnothing/contact.php">Contact Us</a></li>
        	</ul> 
    	</nav>
	</div>
</header>