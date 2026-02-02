document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('show');
            }
        });
    }, {
        threshold: 0.2
    });

    let index = 0;
const testimonials = document.querySelectorAll('.testimonial');

setInterval(() => {
    testimonials[index].classList.remove('active');
    index = (index + 1) % testimonials.length;
    testimonials[index].classList.add('active');
}, 4000);


    document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));
});
