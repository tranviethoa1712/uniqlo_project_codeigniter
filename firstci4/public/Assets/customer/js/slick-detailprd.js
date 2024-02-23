let slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}


// console.log(parent);

function showSlides(n) {
    let parentDots = document.querySelector("[class='product-main-image-section p-active']");
    let i;
    let slides = parentDots.getElementsByClassName("mySlides");
    let dots = parentDots.getElementsByClassName("dot");

    if(n > slides.length) {
        slideIndex = 1;
    }
    if(n < 1) {
        slideIndex = slides.length;
    }

    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    for(i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }

    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
}

let slideIndex2 = 1;
showSlides(slideIndex2);

function plusSlides2(n) {
    showSlides2(slideIndex2 += n);
}

function currentSlide2(n) {
    showSlides2(slideIndex2 = n);
}


// console.log(parent);

function showSlides2(n) {
    let parentDots = document.querySelector("[class='product-main-image-section-2 p-active']");
    let i;
    let slides = parentDots.getElementsByClassName("mySlides2");

    if(n > slides.length) {
        slideIndex = 1;
    }
    if(n < 1) {
        slideIndex = slides.length;
    }

    for(i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }

    slides[slideIndex2-1].style.display = "block";
}

let tabIndex = 1;

function tabDes(element) {
    tabIndex++;
    let name = element.getAttribute("name");
    if(parseInt(tabIndex) % 2 == 0) {
        document.getElementById(name).style.display = "block";
    } else {
        document.getElementById(name).style.display = "none";
    }
}

let dropdownQ = 1;

function DropdownQuantity(element) {
    dropdownQ++;
    let name = element.getAttribute("name");
    if(parseInt(dropdownQ) % 2 == 0) {
        document.getElementById(name).style.display = "block";
    } else {
        document.getElementById(name).style.display = "none";
    }
}

function changeQuantity(element) {
    let numberChange = element.innerHTML;
    document.getElementById("quantity").value = numberChange;
    document.getElementById("dropdown-quantity").style.display = "none";
    dropdownQ++;
}

//change model of product
tabHolderThumnail = document.querySelector('.left-container');

function tabHolderClicked(paramater) {
    let activeTabHolder = tabHolderThumnail.querySelector('.p-active');

    let paramaterName = paramater.getAttribute('name');
    console.log(paramaterName); 
    let displayTabHolder = tabHolderThumnail.querySelector(`#${paramaterName}`);

    activeTabHolder.classList.remove('p-active');
    displayTabHolder.classList.add('p-active');
}
//end change model of product