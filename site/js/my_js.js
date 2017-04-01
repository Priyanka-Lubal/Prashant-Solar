/**
 * Created by acer on 3/8/2017.
 */
// Validating Empty Field
var area;
var solarsystem;
var saved;
var energy;
var total_load;
var cost_battery;
var cost_inverter;
var cost_bos;
var cost_panel;
function save() {
    area = document.getElementById('name').value;
    if(area >= 100)
    {
        solarsystem = Math.floor(area/100);
        saved = solarsystem*120;
        energy = saved*12;
        localStorage.setItem("myArea", area);
        localStorage.setItem("myEnergy", energy);
        localStorage.setItem("myCapacity", solarsystem);
    }
    else
    {
        solarsystem = 0;
        saved = 0;
        energy = 0;
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

function calc_load() {
    total_load = 0;
    for (i = 0; i <= 20; i++) {

        total_load = total_load + (Number($('#qty_' + i).val()) * Number($('#watt_' + i).val()));

    }
    if(total_load>1000) {
        cost_panel = 32 * total_load;

        cost_battery = 2 * (Math.floor(total_load / 1000)) * 12500;

        cost_inverter = (Math.floor(total_load / 1000)) * 15000;

        cost_bos = (Math.floor(total_load / 1000)) * 15000;

    }
    else
    {
        cost_panel = 32 * total_load;

        cost_battery = 0;

        cost_inverter = 0;

        cost_bos = 0;

    }
    localStorage.setItem("myPanel", cost_panel);
    localStorage.setItem("myBattery", cost_battery);
    localStorage.setItem("myInverter", cost_inverter);
    localStorage.setItem("myBos", cost_bos);

    $('#total_load').val(total_load);
}

function display_in_calculator() {
    document.getElementById('rooftop').innerHTML = localStorage.getItem("myArea");
    document.getElementById('capacity').innerHTML = localStorage.getItem("myCapacity");
    document.getElementById('energy').innerHTML = localStorage.getItem("myEnergy");
    document.getElementById('panel').innerHTML = localStorage.getItem("myPanel");
    document.getElementById('battery').innerHTML = localStorage.getItem("myBattery");
    document.getElementById('inverter').innerHTML = localStorage.getItem("myInverter");
    document.getElementById('bos').innerHTML = localStorage.getItem("myBos");
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

function green_quotient() {
    document.getElementById('pqr').style.display = "block";
}

$("#submit").click(function() {
    $('html, body').animate({
        scrollTop: $("#result").offset().top
    }, 2000);
});

$("#name").keyup(function(event){
    if(event.keyCode == 13){
        $("#submit1").click();
    }
});