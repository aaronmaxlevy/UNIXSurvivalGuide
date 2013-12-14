<?php 
    $page='Quizzes';
    $curQuiz='Quiz 5';
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
        <h1>Tutorial 5: Working with Permissions</h1>
        <p>Instructions: Please select the best choice from the given choices to each question. Don't worry if you get it wrong, you can always try again. 
        If a correct! shows up, then you got it right. If you got it wrong, an incorrect! will show up.</p>
        <p>1. How do you list all access rights for all files? 
        <span id="w1">Incorrect!</span>
        <span id="r1">Correct!</span></p>
        <p>
            <input type="radio" name="r" value="1" />ls cool<br />
            <input type="radio" name="r" value="2" />ls cat<br />
            <input  type="radio" name="r" value="3" />ls -l<br />
        </p>
        <p>2. How do you change permission rights to mycool.txt? 
        <span id="w2">Incorrect!</span>
        <span id="r2">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="r1" value="1" />chmod<br />
            <input onchange="doStuff();" type="radio" name="r1" value="2" />chmod mycool.txt<br />
            <input onchange="doStuff();" type="radio" name="r1" value="3" />chmod >> mycool.txt<br />
        </p>
        <p>3. How do you kill the job running in the foreground?
        <span id="w3">Incorrect!</span>
        <span id="r3">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="r2" value="1" />^h<br />
            <input onchange="doStuff();" type="radio" name="r2" value="2" />^C<br />
            <input onchange="doStuff();" type="radio" name="r2" value="3" />c^<br />
        </p>
        <p>4. How do you suspend the job running in the forground?
        <span id="w4">Incorrect!</span>
        <span id="r4">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="r3" value="1" />Z^<br />
            <input onchange="doStuff();" type="radio" name="r3" value="2" />^Z<br />
            <input onchange="doStuff();" type="radio" name="r3" value="3" />cat<br />
        </p>
        <p>5. How do you background the suspended jobs?
        <span id="w5">Incorrect!</span>
        <span id="r5">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="r4" value="1" />bg<br />
            <input onchange="doStuff();" type="radio" name="r4" value="2" />gb<br />
            <input onchange="doStuff();" type="radio" name="r4" value="3" />sort<br />
        </p>
        <p>6. How do you list current processes?
        <span id="w6">Incorrect!</span>
        <span id="r6">Correct!</span></p>
        <p>
            <input onchange="doStuff();" type="radio" name="r5" value="1" />k<br />
            <input onchange="doStuff();" type="radio" name="r5" value="2" />sp<br />
            <input onchange="doStuff();" type="radio" name="r5" value="3" />ps<br />
        </p>
        <input type="submit" value="Submit" name="submit" />
        <input type="reset" value="Reset" />
	</form>

<?php include '../assets/inc/footer.php'; ?>
