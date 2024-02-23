//declare variable
const tabHeader = document.querySelector('.contents-cards__tablist'),
tabContent = document.querySelector('.contents-cards__tabs-holder');

 
//changeTabContent
function tabClicked (element) {
    //querySelector return element đầu tiên match được    
    let activedElement = tabHeader.querySelector('.active');
    let activeTab = tabContent.querySelector('.active');
    //getAttribute return value of attribute
    let elementName = element.getAttribute('name');
    let displayTab = tabContent.querySelector(`#${elementName}`);
    //classList return  classnames of 1 element
    activedElement.classList.remove('active');
    activeTab.classList.remove('active');
    element.classList.add('active');
    displayTab.classList.add('active')
}

//end changeTabContent
//declare variable
const tabHeader2 = document.querySelector('.contents-cards__tablist-2'),
tabContent2 = document.querySelector('.contents-cards__tabs-holder-2');

 
//changeTabContent
function tabClickedBottom (element) {
    //querySelector return element đầu tiên match được    
    let activedElement = tabHeader2.querySelector('.active');
    let activeTab = tabContent2.querySelector('.active');
    //getAttribute return value of attribute
    let elementName = element.getAttribute('name');
    let displayTab = tabContent2.querySelector(`#${elementName}`);
    //classList return  classnames of 1 element
    activedElement.classList.remove('active');
    activeTab.classList.remove('active');
    element.classList.add('active');
    displayTab.classList.add('active')
}

//end changeTabContent
const toggleBtn = document.querySelector('.toggle_btn');
const toggleBtnIcon = document.querySelector('.toggle_btn i');
const dropdownMenu = document.querySelector('.dropdown_menu');

function toggleMenu(){
    dropdownMenu.classList.toggle('open');
    const isOpen = dropdownMenu.classList.contains('open');

    toggleBtnIcon.classList = isOpen
    ? 'fa-solid fa-xmark'
    : 'fa-solid fa-bars'
}