/**
 * Created by acer on 3/8/2017.
 */
// Validating Empty Field
function showinput() {
    document.getElementById('display').innerHTML =
        document.getElementById('name').value;
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
}


//Function to Hide Popup
function div_hide(){
    document.getElementById('abc').style.display = "none";
}

function hide() {
    document.getElementById('xyz').style.display = "none";
 }

function save() {
    var num;
    num = document.getElementById('name').value;
}