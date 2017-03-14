/**
 * Created by acer on 3/8/2017.
 */
// Validating Empty Field
var area;
var solarsystem;
var saved;
function save() {
    area = document.getElementById('name').value;
    if(area >= 100)
    {
        solarsystem = Math.floor(area/100);
        saved = solarsystem*120;
    }
    else
    {
        solarsystem = 0;
        saved = 0;
    }
}

function showinput() {
    document.getElementById('display').innerHTML = area;
    document.getElementById('unit').innerHTML = saved;
    document.getElementById('solar').innerHTML = solarsystem;
}

function submit() {
    document.getElementById('abc').style.display = "none";
    document.getElementById('xyz').style.display = "block";
    showinput();
}

function check_empty() {
    if (document.getElementById('name').value == "") {
        alert("Fill All Fields !");
    } else {
        submit();
    }
}
//Function To Display Popup
function popup() {
    document.getElementById('abc').style.display = "block";
    hide();
}


//Function to Hide Popup
function div_hide(){
    document.getElementById('abc').style.display = "none";
}

function hide() {
    document.getElementById('xyz').style.display = "none";
 }