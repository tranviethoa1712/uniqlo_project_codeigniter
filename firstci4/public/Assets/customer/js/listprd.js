let dropdownQ = 1;
function DropdownArrange(element) {
    dropdownQ++;
    let name = element.getAttribute("name");
    if(parseInt(dropdownQ) % 2 == 0) {
        document.getElementById(name).style.display = "block";
    } else {
        document.getElementById(name).style.display = "none";
    }
}

function DropdownMenu(element) {
    let name = element.getAttribute("name");
    var displayStyleElement = document.getElementById(name); // 
    // Nếu dropdown đang mở
    if(element.getAttribute("class") == 'menu-list__item active') {
        displayStyleElement.style.display = "none";
        element.setAttribute("class", "menu-list__item");
        element.style = "font-weight: normal";
    } else {
        displayStyleElement.style.display = "block";
        element.setAttribute("class", "menu-list__item active");
        element.style = "font-weight: 600";
    }
}

function DropdownMenuSpe(element) {
    let name = element.getAttribute("name");

    if(parseInt(dropdownMenu) % 2 == 0) {
        document.getElementById(name).style.display = "flex";
        element.setAttribute("class", "menu-list__item active");
        element.style = "font-weight: 600";
    } else {
        document.getElementById(name).style.display = "none";
        element.setAttribute("class", "menu-list__item");
        element.style = "font-weight: normal";
    }
}

