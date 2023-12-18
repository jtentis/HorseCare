const container = document.getElementById('container-login');
const registerBtn = document.getElementById('register');
const loginBtn = document.getElementById('login');
const modal = document.getElementById('login-modal')
const body = document.getElementById('main-container')
const teste = document.getElementById('login-button')

//fade in animação
const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting){
            entry.target.classList.add('show');
        }
        else{
            entry.target.classList.remove('show')
        }
    });
});

const hiddenTextoPrincipal = document.querySelectorAll('.invi');
hiddenTextoPrincipal.forEach((el) => observer.observe(el));

// botao para voltar pro topo
window.addEventListener('scroll', function(){
    var scroll = document.querySelector('.para-o-topo');
    scroll.classList.toggle("active", window.scrollY > 800)
})

registerBtn.addEventListener('click', () => {
    container.classList.add("active");
});

loginBtn.addEventListener('click', () => {
    container.classList.remove("active");
});

//TODO: verificar pq blur no main-container nao funfa

function abrirModal(){
    document.querySelector('.container-login').style.opacity='1';
    document.querySelector('.header').classList.add('is-blurred')
    document.querySelector('.landing-page').classList.add('is-blurred')
    modal.addEventListener('click', (e)=>{
        if(e.target.id == 'fechar' || e.target.id == 'login-modal'){
            document.querySelector('.container-login').style.opacity='0';
            document.querySelector('.header').classList.remove('is-blurred')
            document.querySelector('.landing-page').classList.remove('is-blurred')
        }
    })
}