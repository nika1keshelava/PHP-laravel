let fname, lname, gender, country;

function node (x){
    return document.getElementById(x);
}


function processPhase1(){
    fname = node("firstname").value;
    lname = node("lastname").value;
    if (fname.length > 2 && lname.length >2){
        node("phase1").style.display = "none";
        node("phase2").style.display = "block";
        node("progressbar").value = 33;
        node("status").innerHTML = "phase 2 of 3"
    }else{
        alert("please fill in the fields");
    }
}


function processPhase2(){
    gender = node("gender").value;
    if(gender.length > 0){
        node("phase2").style.display = "none";
        node("phase3").style.display = "block";
        node("progressbar").value = 66;
        node("status").innerHTML = "phase 3 of 3"
    }else{
        alert("please choose your gender");
    }
}

function processPhase3(){
    country = node("country").value;
    if(country.length>0){
        node("phase3").style.display = "none";
        node("show_all_data").style.display = "block";
        node("display_fname").innerHTML = fname;
        node("display_lname").innerHTML = lname;
        node("display_gender").innerHTML = gender;
        node("display_country").innerHTML = country;
        node("progressbar").value = 100;
        node("status").innerHTML = "phase 3 of 3"
    }else{
        alert("please choose your country");
    }
}

function  submitForm(){
    node("multiphase").method = "post";
    node("multiphase").action = "my_parser.php";
    node("multiphase").submit();
}

