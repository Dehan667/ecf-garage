document.addEventListener('DOMContentLoaded', function() {
    highlightCurrentPage()
});

function highlightCurrentPage() {
    var currentPath = window.location.pathname;
    var navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function(link) {
        var linkPath = link.getAttribute('href');
        if (currentPath === linkPath) {
            link.classList.add('active');
        }
    });
}