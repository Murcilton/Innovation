document.addEventListener('DOMContentLoaded', () => {
// Исходное состояние для анимации входа
    gsap.set(".laptop", { opacity: 0, y: 50 });
    gsap.set(".the-laptop", { scale: 0.95 });
    gsap.set(".text-track", { opacity: 0 });
    gsap.set(".laptop-line", { opacity: 0, y: 30 });
// Анимация входа
    const tl = gsap.timeline();
    tl.to(".laptop", {
        opacity: 1,
        y: 0,
        duration: 0.8
    })
        .to(".the-laptop", {
            scale: 1,
            duration: 0.6
        }, "-=0.3")
        .to(".laptop-line", {
            opacity: 1,
            y: 0,
            duration: 0.5
        }, "-=0.2")
        .to(".text-track", {
            opacity: 1,
            duration: 0.4,
            stagger: 0.1
        }, "-=0.2");
});
