let toggle = document.querySelector('nav');
let main = document.querySelector('main');
let footer = document.querySelector('footer');

// Condition trouvée sur reddit : si la largeur de l'écran est inférieure à 1200px...
if(screen.width < 1200){

    let rechercher = document.querySelector('nav');


    boutton.addEventListener('click', function(){
        if(toggle.getAttribute('id') != 'mobile_burger'){
            toggle.setAttribute('id', 'mobile_burger');
            main.setAttribute('id', 'mobile_burger_main');
        } else {
            toggle.setAttribute('id', '');
            main.setAttribute('id', '');
        }
    });

} else {

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
}