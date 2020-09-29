  
function main (){
    $('.menubar').click(function(){
        $('nav').toggle();
    });
}

$ (document).ready(main);

if(contador = 1){
    $('.menubar').animate({
        left: '0'
    });
    contador = 0;
} else {
    contador = 1;
    $('.menubar').animate({
        left: "-100%"
    });
}