document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    const burgerIcon = this.querySelector('.burger-icon');
    

    burgerIcon.addEventListener('click', () => {

        navbar.classList.toggle('active');
    });
});