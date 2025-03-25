let toggle = document.querySelector('nav');
let main = document.querySelector('main');

if(main.getAttribute('id') == 'wideview'){
    toggle.setAttribute('id', 'burger');
    main.setAttribute('id', 'burger_main');
}

boutton.addEventListener('click', function(){
    if(toggle.getAttribute('id') != 'burger'){
        toggle.setAttribute('id', 'burger');
        main.setAttribute('id', 'burger_main');
    } else {
        toggle.setAttribute('id', '');
        main.setAttribute('id', '');
    }
});