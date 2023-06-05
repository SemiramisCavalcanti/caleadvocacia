const target = document.querySelectorAll('[data-entrada]');
const animationClass = 'entrar';

function entradaScroll() {
    // console.log('está funcionando!!')
// const windowTop = window.pageYOffset + 800;
const windowTop = window.pageYOffset + ((window.innerHeight * 3) / 4);
// console.log(windowTop);
target.forEach(function(element){
    if((windowTop)> element.offsetTop){
        element.classList.add(animationClass)
    }
    // console.log(element.offsetTop);
})
}

entradaScroll();

if(target.length){
window.addEventListener('scroll', function () {
    entradaScroll();
})
}