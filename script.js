//fade in animação
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        }
        // else{
        //     entry.target.classList.remove('show')
        // }
    });
});

const hiddenTextoPrincipal = document.querySelectorAll('.invi');
hiddenTextoPrincipal.forEach((el) => observer.observe(el));

// botao para voltar pro topo
window.addEventListener('scroll', function(){
    var scroll = document.querySelector('.para-o-topo');
    scroll.classList.toggle("active", window.scrollY > 800)
})

function changeStyle(){
    var element = document.getElementById("dialog");
    element.style.opacity = "0.5";
}