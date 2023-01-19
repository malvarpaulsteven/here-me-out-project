@extends('pages.layout')
@section('content')

<form>

        <h3>1. Little interest or pleasure in doing things</h3>
        <p>
            <label><input type="radio" name="q1" value="0" /> Not at all</label>
            <label><input type="radio" name="q1" value="1" /> Several days</label>
            <label><input type="radio" name="q1" value="2" /> More than half of days</label>
            <label><input type="radio" name="q1" value="3" /> Nearly every day</label>
        </p>

        <h3>2. Feeling down, depressed, or hopeless</h3>
        <p>
            <label><input type="radio" name="q2" value="0" /> Not at all</label>
            <label><input type="radio" name="q2" value="1" /> Several days</label>
            <label><input type="radio" name="q2" value="2" /> More than half of days</label>
            <label><input type="radio" name="q2" value="3" /> Nearly every day</label>
        </p>

        <h3>3. Trouble falling or staying asleep, or sleeping too much</h3>
        <p>
            <label><input type="radio" name="q3" value="0" /> Not at all</label>
            <label><input type="radio" name="q3" value="1" /> Several days</label>
            <label><input type="radio" name="q3" value="2" /> More than half of days</label>
            <label><input type="radio" name="q3" value="3" /> Nearly every day</label>
        </p>

        <h3>4. Feeling tired or having little energy</h3>
        <p>
            <label><input type="radio" name="q4" value="0" /> Not at all</label>
            <label><input type="radio" name="q4" value="1" /> Several days</label>
            <label><input type="radio" name="q4" value="2" /> More than half of days</label>
            <label><input type="radio" name="q4" value="3" /> Nearly every day</label>
        </p>

        <h3>5. Poor appetite or overeating</h3>
        <p>
            <label><input type="radio" name="q5" value="0" /> Not at all</label>
            <label><input type="radio" name="q5" value="1" /> Several days</label>
            <label><input type="radio" name="q5" value="2" /> More than half of days</label>
            <label><input type="radio" name="q5" value="3" /> Nearly every day</label>
        </p>

        <h3>6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down</h3>
        <p>
            <label><input type="radio" name="q6" value="0" /> Not at all</label>
            <label><input type="radio" name="q6" value="1" /> Several days</label>
            <label><input type="radio" name="q6" value="2" /> More than half of days</label>
            <label><input type="radio" name="q6" value="3" /> Nearly every day</label>
        </p>

        <h3>7. Trouble concentrating on things, such as reading the newspaper or watching television</h3>
        <p>
            <label><input type="radio" name="q7" value="0" /> Not at all</label>
            <label><input type="radio" name="q7" value="1" /> Several days</label>
            <label><input type="radio" name="q7" value="2" /> More than half of days</label>
            <label><input type="radio" name="q7" value="3" /> Nearly every day</label>
        </p>

        <h3>8. Moving or speaking so slowly that other people could have noticed
            Or the opposite - being so fidgety or restless that you have been moving around a lot more than usual</h3>
        <p>
            <label><input type="radio" name="q8" value="0" /> Not at all</label>
            <label><input type="radio" name="q8" value="1" /> Several days</label>
            <label><input type="radio" name="q8" value="2" /> More than half of days</label>
            <label><input type="radio" name="q8" value="3" /> Nearly every day</label>
        </p>

        <h3>9. Thoughts that you would be better off dead, or of hurting yourself</h3>
        <p>
            <label><input type="radio" name="q9" value="0" /> Not at all</label>
            <label><input type="radio" name="q9" value="1" /> Several days</label>
            <label><input type="radio" name="q9" value="2" /> More than half of days</label>
            <label><input type="radio" name="q9" value="3" /> Nearly every day</label>
        </p>

        <h3>10. If you checked off any problems, how difficult have these problems made it for you at work, home, or
            with other people?</h3>
        <p>
            <label><input type="radio" name="q10" value="0" /> Not at all</label>
            <label><input type="radio" name="q10" value="1" /> Several days</label>
            <label><input type="radio" name="q10" value="2" /> More than half of days</label>
            <label><input type="radio" name="q10" value="3" /> Nearly every day</label>
        </p>

        <input type="button" value="calculate" onclick="getResult()" />

    </form>
    <h1 id="resDisplay"></h1>

    <script>
        function getResult() {
    var q1 = document.getElementsByName('q1');
    var q2 = document.getElementsByName('q2');
    var q3 = document.getElementsByName('q3');
    var q4 = document.getElementsByName('q4');
    var q5 = document.getElementsByName('q5');
    var q6 = document.getElementsByName('q6');
    var q7 = document.getElementsByName('q7');
    var q8 = document.getElementsByName('q8');
    var q9 = document.getElementsByName('q9');
    var q10 = document.getElementsByName('q10');

    var total = 0;

    q1.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q2.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q3.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q4.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q5.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q6.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q7.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q8.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q9.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });
    q10.forEach((evnt) => {
        if (evnt.checked) {
            total = total + parseInt(evnt.value);
            return;
        }
    });

    if (total <=4) {
        result = "Minimal Depression";
    }
    else if (total >=5 && total <=9) {
        result = "Mild Depression";
    }
    else if (total >=10 && total <=14) {
        result = "Moderate Depression";
    }
    else if (total >=15 && total <=19) {
        result = "Moderately Severe Depression";
    }
    else if (total >=20 && total <=30) {
        result = "Severe Depression";
    }

    alert("Your depression test score shows you have" + " " + result);

    let resultDisplay = document.getElementById('resDisplay');

    resultDisplay.innerHTML = result;

}
    </script>

@endsection

