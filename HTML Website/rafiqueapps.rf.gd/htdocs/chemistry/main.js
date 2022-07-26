var option = document.getElementById("options")
var moboption = document.getElementById("options-mob")
var stylepage = document.getElementById("pagestyle")
const buttondark = document.getElementById("dark")
const buttondark2 = document.getElementById("dark2")
var homelink = document.getElementById("home")
var homelink2 = document.getElementById("home2")

option.style.display = 'none';
moboption.style.display = 'none';
stylepage.setAttribute("href", "style.css ")

function optionrequest() {
    if (option.style.display == 'none') {
        option.style.display = 'block';
    } else {
        option.style.display = 'none';
    }
}

function optionrequestmob() {
    if (moboption.style.display == 'none') {
        moboption.style.display = 'block';
    } else {
        moboption.style.display = 'none';
    }
}

function hideoption() {
    option.style.display = 'none';
    moboption.style.display = 'none';
}

function dark() {
    if (stylepage.getAttribute("href") == "style.css ") {
        stylepage.setAttribute("href", "style-light.css ")
        buttondark.textContent = "Dark Mode"
        buttondark2.textContent = "Dark Mode"
        homelink.style.color = "#00008B";
        homelink2.style.color = "#00008B";
    } else {
        stylepage.setAttribute("href", "style.css ")
        buttondark.textContent = "Light Mode"
        buttondark2.textContent = "Light Mode"
        homelink.style.color = "#a6f2ff";
        homelink2.style.color = "#a6f2ff";
    }
}