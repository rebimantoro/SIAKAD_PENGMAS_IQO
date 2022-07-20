// dapatkan semua chil pada element id borderedTabContent lalu masukan ke array
var tabPane = document.querySelectorAll('.tab-pane');

function nextTab(id) {
    // remove active class pada element tabPane dan navItem sesuai id
    var navItem = tabPane[id].getAttribute('aria-labelledby')
    
    document.getElementById(navItem).classList.remove('active');
    tabPane[id].classList.remove('active');
    tabPane[id].classList.remove('show');
    id += 1;
    // tambahkan active class pada element tabPane dan navItem sesuai id
    document.getElementById(tabPane[id].getAttribute('aria-labelledby')).classList.add('active');
    tabPane[id].classList.add('active');
    tabPane[id].classList.add('show');
    // scroll top with animation
    window.scrollTo({ top: 0, behavior: 'smooth' });
}

function prevTab(id) {
    // remove active class pada element tabPane dan navItem sesuai id
    var navItem = tabPane[id].getAttribute('aria-labelledby')
    
    document.getElementById(navItem).classList.remove('active');
    tabPane[id].classList.remove('active');
    tabPane[id].classList.remove('show');
    id -= 1;
    // tambahkan active class pada element tabPane dan navItem sesuai id
    document.getElementById(tabPane[id].getAttribute('aria-labelledby')).classList.add('active');
    tabPane[id].classList.add('active');
    tabPane[id].classList.add('show');
    navItem[id].classList.add('active');
    window.scrollTo({ top: 0, behavior: 'smooth' });
}