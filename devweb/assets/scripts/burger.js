let toggle = document.querySelector('nav');
let main = document.querySelector('main');
let footer = document.querySelector('footer');

if(main.getAttribute('id') == 'wideview'){
    toggle.setAttribute('id', 'burger');
    main.setAttribute('id', 'burger_main');
    footer.setAttribute('id', 'burger_footer');
}

boutton.addEventListener('click', function(){
    if(toggle.getAttribute('id') != 'burger'){
        toggle.setAttribute('id', 'burger');
        main.setAttribute('id', 'burger_main');
        footer.setAttribute('id', 'burger_footer');
    } else {
        toggle.setAttribute('id', '');
        main.setAttribute('id', '');
        footer.setAttribute('id', '');
    }
});