document.addEventListener("DOMContentLoaded", function() {
    const fadeInElements = document.querySelectorAll(".fade-in-element");

    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add("is-visible");
            } else {
                entry.target.classList.remove("is-visible");
            }
        });
    }, { threshold: 0.1 });

    fadeInElements.forEach(element => {
        observer.observe(element);
    });

    const parallaxElement = document.querySelector('.parallax-background');

    if (parallaxElement) {
        window.addEventListener('scroll', () => {
            const scrollPosition = window.pageYOffset;
            const y = scrollPosition * -0.15; // Adjust this value to change the speed
            parallaxElement.style.transform = 'translateY(' + y + 'px)';
        });
    }
});