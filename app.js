const menu = document.querySelector('#mobile-menu')
const menulinks = document.querySelector('.navbar__menu')

menu.addEventListener('click', function() {
    menu.classList.toggle('is-active');
    menulinks.classList.toggle('active');
} )

document.getElementById('scrollToServices').addEventListener('click', function() {
    document.getElementById('services').scrollIntoView({
        behavior: 'smooth'
    });
});

fetch('send_mail.php', {
    method: 'POST',
    body: formData
})

