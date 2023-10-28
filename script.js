// Home Page code =======================================>
function profileDropdown(){
    document.getElementById('hidedrop').style.display = 'block'
}

function profileDropdownleft(){
    document.getElementById('hidedrop').style.display = 'none'
}

function openmobilemenu(){
    document.getElementById('mobile-menu').style.display= 'block'
}
function closemobilemenu(){
    document.getElementById('mobile-menu').style.display= 'none'
}

// Login Page code =======================================>
document.getElementById('changemode').addEventListener('click', firstchange)
function firstchange(){
document.getElementById("loginsection").style.backgroundColor = "#111827";

document.getElementById('changemode').removeEventListener('click', firstchange)
document.getElementById('changemode').addEventListener('click', secondchange)
}
function secondchange(){
    document.getElementById('loginsection').style.backgroundColor = '#fff'
    document.getElementById('changemode').removeEventListener('click', secondchange)
    document.getElementById('changemode').addEventListener('click', firstchange)


}



