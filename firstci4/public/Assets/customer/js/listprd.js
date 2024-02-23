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

let dropdownMenuCount = 1;


function clickLiDropdown() { 
    dropdownMenuCount++;
    console.log(dropdownMenuCount);
}
function DropdownMenu(element) {
    dropdownMenuCount++;
    let name = element.getAttribute("name");

    if(parseInt(dropdownMenuCount) % 2 == 0) {
        let checkOpen = document.getElementById(name).style.display;

        document.getElementById(name).style.display = "block";
        element.setAttribute("class", "menu-list__item active");
        element.style = "font-weight: 600";
    } else {
        document.getElementById(name).style.display = "none";
        element.setAttribute("class", "menu-list__item");
        element.style = "font-weight: normal";
    }
}


function DropdownMenuSpe(element) {
    dropdownMenu++;
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

