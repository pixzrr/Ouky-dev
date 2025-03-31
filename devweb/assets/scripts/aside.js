let more = document.querySelector('aside');
let cards = document.querySelectorAll('main section article div img');
console.log(cards);

// Condition trouvée sur reddit : si la largeur de l'écran est inférieure à 1200px...
if(screen.width < 1200){

    view_less.addEventListener('click', function(){
        more.setAttribute('id', '');
    });

    for (let i = 0 ; i < cards.length ; i++){
    cards[i].addEventListener('click', function(){
        if(more.getAttribute('id') != 'mobile_aside'){
            more.setAttribute('id', 'mobile_aside');
        } else {
            more.setAttribute('id', '');
        }
    });
}

} else {

    for (let i = 0 ; i < cards.length ; i++){
cards[i].addEventListener('click', function(){
    if(more.getAttribute('id') != 'aside'){
        more.setAttribute('id', 'aside');
    } else {
        more.setAttribute('id', '');
    }

});
    }
}