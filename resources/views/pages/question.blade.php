@extends('pages.layout')
@section('content')
<div class="container d-flex justify-content-center mb-4">
    <div class="card p-4 question-page">
        <h1 class="text-center mt-4 mb-4">Depression Test</h1>
        <form class="">
            <div class="depression-test">
                <h5 class="">1. Little interest or pleasure in doing things.</h5>
                    <div class="radio-selector d-lg-flex justify-content-around">
                        <div class="col-md-3">
                            <label><input type="radio" name="q1" value="0" /> Not at all</label>
                        </div>
                        <div class="col-md-3 ">
                            <label><input type="radio" name="q1" value="1" /> Several days</label>
                        </div>
                        <div class="col-md-3 ">
                            <label><input type="radio" name="q1" value="2" /> More than half of days</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q1" value="3" /> Nearly every day</label>
                        </div>
                    </div>
                    <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>2. Feeling down, depressed, or hopeless.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q2" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q2" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q2" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q2" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>3. Trouble falling or staying asleep, or sleeping too much.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q3" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q3" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q3" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q3" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>4. Feeling tired or having little energy.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q4" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q4" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q4" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q4" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>5. Poor appetite or overeating.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q5" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q5" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q5" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q5" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>6. Feeling bad about yourself - or that you are a failure or have let yourself or your family down.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q6" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q6" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q6" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q6" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>7. Trouble concentrating on things, such as reading the newspaper or watching television.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q7" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q7" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q7" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q7" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>8. Moving or speaking so slowly that other people could have noticed
                    Or the opposite.</h5>
                    <div class="radio-selector d-lg-flex justify-content-between">
                        <div class="col-md-3">
                            <label><input type="radio" name="q8" value="0" /> Not at all</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q8" value="1" /> Several days</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q8" value="2" /> More than half of days</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q8" value="3" /> Nearly every day</label>
                        </div>
                    </div>
                    <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>9. Thoughts that you would be better off dead, or of hurting yourself.</h5>
                <div class="radio-selector d-lg-flex justify-content-between">
                    <div class="col-md-3">
                        <label><input type="radio" name="q9" value="0" /> Not at all</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q9" value="1" /> Several days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q9" value="2" /> More than half of days</label>
                    </div>
                    <div class="col-md-3">
                        <label><input type="radio" name="q9" value="3" /> Nearly every day</label>
                    </div>
                </div>
                <hr class="mb-2">
            </div>
            <div class="depression-test">
                <h5>10. If you checked off any problems, how difficult have these problems made it for you at work, home, or
                    with other people?</h5>
                    <div class="radio-selector d-lg-flex justify-content-between">
                        <div class="col-md-3">
                            <label><input type="radio" name="q10" value="0" /> Not at all</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q10" value="1" /> Several days</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q10" value="2" /> More than half of days</label>
                        </div>
                        <div class="col-md-3">
                            <label><input type="radio" name="q10" value="3" /> Nearly every day</label>
                        </div>
                    </div>
                    <hr class="mb-2">
            </div>


        </form>
        <h2 class="text-center text-success" id="resDisplay"></h2>
        <input class="btn btn-lg bg-primary text-light" type="button" value="Result" onclick="getResult()" />
    </div>
</div>
<div class="custom-shape-divider-top-1674123921">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
        <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
        <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
        <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
    </svg>
</div>


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

