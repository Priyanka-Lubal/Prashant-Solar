/**
 * Created by acer on 3/8/2017.
 */
var area = 0;
var solarsystem = 0;
var s2 = 0;
var saved = 0;
var energy = 0;
var total_load;
var cost_battery = 25000;
var cost_inverter = 15000;
var cost_bos = 15000;
var cost_panel = 0;
var project_cost = 0;
var yearly_saved = 0;

function save() {
    area = document.getElementById('name').value;
    if(area >= 100)
    {
        solarsystem = Math.floor(area/100);
        s2 = solarsystem + 1;
        saved = solarsystem*120;
        energy = saved*12;
        yearly_saved = saved * 14 * 12;
        localStorage.setItem("myArea", area);
        localStorage.setItem("mys2", s2);
        localStorage.setItem("myEnergy", energy);
        localStorage.setItem("myCapacity", solarsystem);
        localStorage.setItem("myUnits", saved);
        localStorage.setItem("mySavings", yearly_saved);
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
    total_load=0;
    for (i = 0; i <= 20; i++) {
        total_load = total_load + (Number($('#qty_' + i).val()) * Number($('#watt_' + i).val()));

    }
    cost_panel = 32 * total_load;
	if (total_load<=1000)
    {
        cost_bos = 15000;

        cost_battery = 25000;

        cost_inverter = 15000;
	}
	else if(total_load>1000)
    {
        cost_battery = Math.ceil(total_load/2000) * 25000;

        cost_inverter = Math.ceil(total_load/2000) * 15000;

        cost_bos = 15 * total_load;
    }



    localStorage.setItem("myLoad", total_load);
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
    document.getElementById('units').innerHTML = localStorage.getItem("myUnits");
    document.getElementById('load').innerHTML = localStorage.getItem("myLoad");
    document.getElementById('panel').innerHTML = localStorage.getItem("myPanel");
    document.getElementById('battery').innerHTML = localStorage.getItem("myBattery");
    document.getElementById('inverter').innerHTML = localStorage.getItem("myInverter");
    document.getElementById('bos').innerHTML = localStorage.getItem("myBos");
    document.getElementById('savings').innerHTML = localStorage.getItem("mySavings");
    document.getElementById('s2').innerHTML = localStorage.getItem("mys2");
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

 function validation() {
    if(total_load==0)
    {
        alert("Total load is 0!");
    }
    else
    {
        window.location.href = "result.php"
    }
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

document.getElementById("name")
    .addEventListener("keyup", function(event) {
        event.preventDefault();
        if (event.keyCode == 13) {
            document.getElementById("result").click();
        }
    });