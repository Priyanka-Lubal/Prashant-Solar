/**
 * Created by acer on 3/8/2017.
 */
// Validating Empty Field
var area;
var solarsystem;
var saved;
var energy;
function save() {
    area = document.getElementById('name').value;
    if(area >= 100)
    {
        solarsystem = Math.floor(area/100);
        saved = solarsystem*120;
        energy = saved*12;
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

function display_in_calculator() {
    document.getElementById('rooftop').innerHTML = area;
    document.getElementById('energy').innerHTML = energy;
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

$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 50) {
            $('#back-to-top').fadeIn();
        } else {
            $('#back-to-top').fadeOut();
        }
    });
    // scroll body to 0px on click
    $('#back-to-top').click(function () {
        $('#back-to-top').tooltip('hide');
        $('body,html').animate({
            scrollTop: 0
        }, 800);
        return false;
    });

    $('#back-to-top').tooltip('show');

});