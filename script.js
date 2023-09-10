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

const hiddenTextoPrincipal = document.querySelectorAll('.hidden');
hiddenTextoPrincipal.forEach((el) => observer.observe(el));