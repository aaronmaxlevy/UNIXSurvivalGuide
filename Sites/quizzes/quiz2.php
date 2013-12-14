<?php 
    $page='Quizzes';
    $curQuiz='Quiz 2';
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
 <form name="tutorial2" id="t1" method="get" action="#"
            onsubmit="return validate();">
        <h1>Tutorial 2: Working with files</h1>
        <p>Instructions: Please select the best choice from the given choices to each question. Don't worry if you get it wrong, you can always try again. 
        If a correct! shows up, then you got it right. If you got it wrong, an incorrect! will show up.</p>
        <p>1. How do you copy a file called myanimals.txt? 
        <span id="w1">Incorrect!</span>
        <span id="r1">Correct!</span></p>
        <p>
            <input type="radio" name="f" value="1" />..myanimals.txt<br />
            <input type="radio" name="f" value="2" />cd myanimals.txt<br />
            <input  type="radio" name="f" value="3" />cp myanimals.txt<br />
        </p>
        <p>2. How do you move the file myanimals.txt to myBackup/? 
        <span id="w2">Incorrect!</span>
        <span id="r2">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="f1" value="1" />mv ../myanimals.txt /myBackup<br />
            <input onchange="doStuff();" type="radio" name="f1" value="2" />mv myanimals.txt myBackup/<br />
            <input onchange="doStuff();" type="radio" name="f1" value="3" />pwd myanimals.txt myBackup/<br />
        </p>
        <p>3. How do you remove a file named myanimals.txt?
        <span id="w3">Incorrect!</span>
        <span id="r3">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="f2" value="1" />rm /myanimals.txt<br />
            <input onchange="doStuff();" type="radio" name="f2" value="2" />rm myanimals.txt<br />
            <input onchange="doStuff();" type="radio" name="f2" value="3" />rmdir myanimals.txt<br />
        </p>
        <p>4. How do you display the content of myanimals.txt?
        <span id="w4">Incorrect!</span>
        <span id="r4">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="f3" value="1" />cats myanimals.txt<br />
            <input onchange="doStuff();" type="radio" name="f3" value="2" />cat myanimals.txt<br />
            <input onchange="doStuff();" type="radio" name="f3" value="3" />mkdir myanimals<br />
        </p>
        <p>5. How do you search for animals in animals.txt?
        <span id="w5">Incorrect!</span>
        <span id="r5">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="f4" value="1" />grep animals myanimals.txt<br />
            <input onchange="doStuff();" type="radio" name="f4" value="2" />grep myanimals.txt animals<br />
            <input onchange="doStuff();" type="radio" name="f4" value="3" />animals myanimals.txt grep<br />
        </p>
        <p>6. How do you find out the word count of myanimals.txt?
        <span id="w6">Incorrect!</span>
        <span id="r6">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="f5" value="1" />wc<br />
            <input onchange="doStuff();" type="radio" name="f5" value="2" />myanimals.txt wc<br />
            <input onchange="doStuff();" type="radio" name="f5" value="3" />wc myanimals.txt<br />
        </p>
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Reset" />
	</form>
    <?php include '../assets/inc/footer.php'; ?>
