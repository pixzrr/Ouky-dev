let more = document.querySelector('aside');

// Condition trouvée sur reddit : si la largeur de l'écran est inférieure à 1200px...
if(screen.width < 1200){

    overflow.addEventListener('click', function(){
        if(more.getAttribute('id') != 'mobile_aside'){
            more.setAttribute('id', 'mobile_aside');
        } else {
            more.setAttribute('id', '');
        }
    });

} else {

overflow.addEventListener('click', function(){
    if(more.getAttribute('id') != 'aside'){
        more.setAttribute('id', 'aside');
    } else {
        more.setAttribute('id', '');
    }

});
}