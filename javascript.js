window.onscroll = function() { 
    updateProgressBar(); 
    toggleHeader();
};

function updateProgressBar() {
    const progressBar = document.getElementById('progress-bar');
    const totalHeight = document.body.scrollHeight - window.innerHeight;
    const scrollPosition = window.scrollY;
    const progressPercentage = (scrollPosition / totalHeight) * 100;
    progressBar.style.width = progressPercentage + "%";
}

function toggleMenu() {
    const menu = document.getElementById('menu');
    menu.classList.toggle('hidden');
}

document.getElementById('form').addEventListener('submit', function(event) {
    event.preventDefault();
    const query = document.getElementById('query').value.toLowerCase();
    const images = document.querySelectorAll('.image-container');

    images.forEach(function(image) {
        const name = image.getAttribute('data-name').toLowerCase();
        if (name.includes(query)) {
            image.style.display = 'flex';
        } else {
            image.style.display = 'none';
        }
    });
});

function toggleHeader() {
    const header = document.querySelector('.header');
    if (window.pageYOffset > 0) {
        header.style.opacity = '0';
    } else {
        header.style.opacity = '1';
    }
}