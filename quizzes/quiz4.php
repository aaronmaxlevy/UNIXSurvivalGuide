<?php 
    $page='Quizzes';
    $curQuiz='Quiz 4';
    include('../assets/inc/header.php'); 
    include('../assets/inc/nav.php');
    include('../assets/inc/quizzes_subnav.php');
?>

<script type="text/javascript">
        function validate() {
            //question number, value if correct 0 if not
            var answers = new Array(new Array(1,0),new Array(1,0),new Array(1,3),
                                new Array(2,0),new Array(2,2),new Array(2,0),
                                new Array(3,0),new Array(3,2),new Array(3,0),
                                new Array(4,0),new Array(4,2),new Array(4,0),
                                new Array(5,1),new Array(5,0),new Array(5,0),
                                new Array(6,0),new Array(6,0),new Array(6,3)
                                );
            var val = false;
            //radio buttons...has either button been checked?
            for (i=0; i < document.forms[0].elements.length; i++) 
            {
                if (document.forms[0].elements[i].checked) {
                    //console.log(document.forms[0].elements[i].value+" "+answers[i][1] + " " +(document.forms[0].elements[i].value == answers[i][1]));
                    if (document.forms[0].elements[i].value == answers[i][1]) {
                         document.getElementById("w"+answers[i][0]).style.display="none";
                         document.getElementById("r"+answers[i][0]).style.display="inline";

                    } else {
                        document.getElementById("r"+answers[i][0]).style.display="none";
                         document.getElementById("w"+answers[i][0]).style.display="inline";                    
                        }
                }
            }
    
            return val;
        }
    </script>

	<div id="main">

		<div id="content">
         <form name="tutorial4" id="t1" method="get" action="#"
            onsubmit="return validate();">
        <h1>Tutorial 4: Working with wildcards</h1>
        <p>Instructions: Please select the best choice from the given choices to each question. Don't worry if you get it wrong, you can always try again. 
        If a correct! shows up, then you got it right. If you got it wrong, an incorrect! will show up.</p>
        <p>1. What is a wildcard? 
        <span id="w1">Incorrect!</span>
        <span id="r1">Correct!</span></p>
        <p>
            <input type="radio" name="w" value="1" />That one unpredictable guy<br />
            <input type="radio" name="w" value="2" />a team that makes the playoffs in baseball<br />
            <input  type="radio" name="w" value="3" />it can have any value<br />
        </p>
        <p>2. How do you list all files with txt at the end? 
        <span id="w2">Incorrect!</span>
        <span id="r2">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="w1" value="1" />txt *ls<br />
            <input onchange="doStuff();" type="radio" name="w1" value="2" />ls *txt<br />
            <input onchange="doStuff();" type="radio" name="w1" value="3" />ls txt*<br />
        </p>
        <p>3. How do you find one missing letter using a wildcard for txt listing all files?
        <span id="w3">Incorrect!</span>
        <span id="r3">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="w2" value="1" />ls ?<br />
            <input onchange="doStuff();" type="radio" name="w2" value="2" />ls ?xt<br />
            <input onchange="doStuff();" type="radio" name="w2" value="3" />? ls<br />
        </p>
        <p>4. How do you find out more about the wc command?
        <span id="w4">Incorrect!</span>
        <span id="r4">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="w3" value="1" />?man<br />
            <input onchange="doStuff();" type="radio" name="w3" value="2" />man wc<br />
            <input onchange="doStuff();" type="radio" name="w3" value="3" />man cat<br />
        </p>
        <p>5. How do you give a brief description of cat?
        <span id="w5">Incorrect!</span>
        <span id="r5">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="w4" value="1" />whatis cat<br />
            <input onchange="doStuff();" type="radio" name="w4" value="2" />cat whatis<br />
            <input onchange="doStuff();" type="radio" name="w4" value="3" />whatis<br />
        </p>
        <p>6. How do you find out a command when you don't know its name specifically.'?
        <span id="w6">Incorrect!</span>
        <span id="r6">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="w5" value="1" />who goes<br />
            <input onchange="doStuff();" type="radio" name="w5" value="2" />what<br />
            <input onchange="doStuff();" type="radio" name="w5" value="3" />apropos keyword<br />
        </p>
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Reset" />
	</form>

<?php include '../assets/inc/footer.php'; ?>
