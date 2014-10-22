<?php 
    $page='Quizzes';
    $curQuiz='Quiz 1';
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
        <form name="tutorial1" id="t1" method="get" action="#" onsubmit="return validate();">
        <h1>Tutorial 1: Working with directories</h1>
        <p>Instructions: Please select the best choice from the given choices to each question. Don't worry if you get it wrong, you can always try again. 
        If a correct! shows up, then you got it right. If you got it wrong, an incorrect! will show up.</p>
        <p>1. How do you make a directory called myanimals? 
        <span id="w1">Incorrect!</span>
        <span id="r1">Correct!</span></p>
        <p>
            <input type="radio" name="dir" value="1" />..myanimals<br />
            <input type="radio" name="dir" value="2" />./myanimals<br />
            <input  type="radio" name="dir" value="3" />mkdir myanimals<br />
        </p>
        <p>2. How do you list the content of the directories? 
        <span id="w2">Incorrect!</span>
        <span id="r2">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="dir1" value="1" />../myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir1" value="2" />LS<br />
            <input onchange="doStuff();" type="radio" name="dir1" value="3" />pwd<br />
        </p>
        <p>3. How do you change directories to myanimals?
        <span id="w3">Incorrect!</span>
        <span id="r3">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="dir2" value="1" />../myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir2" value="2" />cd myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir2" value="3" />pwd<br />
        </p>
        <p>4. Go to current directory myanimals?
        <span id="w4">Incorrect!</span>
        <span id="r4">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="dir3" value="1" />../myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir3" value="2" />.myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir3" value="3" />mkdir myanimals<br />
        </p>
        <p>5. How do you go to parent directory called myanimals?
        <span id="w5">Incorrect!</span>
        <span id="r5">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="dir4" value="1" />../myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir4" value="2" />./myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir4" value="3" />mkdir myanimals<br />
        </p>
        <p>6. How do you go to home directory called myanimals?
        <span id="w6">Incorrect!</span>
        <span id="r6">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="dir5" value="1" />../myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir5" value="2" />./myanimals<br />
            <input onchange="doStuff();" type="radio" name="dir5" value="3" />~myanimals<br />
        </p>
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Reset" />
		</form>
<?php include('../assets/inc/footer.php'); ?>
