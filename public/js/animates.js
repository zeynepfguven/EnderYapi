document.addEventListener('DOMContentLoaded', function () {
    const links = document.querySelectorAll('.link');

    links.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();

            
            links.forEach(l => l.classList.remove('bg-[#44526c]', 'text-white'));

          
            this.classList.add('bg-[#44526c]', 'text-white');
        });
    });
});

document.addEventListener('DOMContentLoaded', () => {
    const carousel = document.getElementById('carousel');
    const prevButton = document.getElementById('prevButton');
    const nextButton = document.getElementById('nextButton');

    let offset = 0; 
    const cardWidth = 698.667 + 16; 
    const visibleCards = 3; 
    const totalCards = carousel.children.length; 

    nextButton.addEventListener('click', () => {
        if (offset < (totalCards - visibleCards) * cardWidth) {
            offset += cardWidth;
            carousel.style.transform = `translateX(-${offset}px)`;
        }
    });

    prevButton.addEventListener('click', () => {
        if (offset > 0) {
            offset -= cardWidth;
            carousel.style.transform = `translateX(-${offset}px)`;
        }
    });
});


document.addEventListener('DOMContentLoaded', () => {

const links = document.querySelectorAll('.link');

links.forEach(link => {
    link.addEventListener('click', function(event) {
        event.preventDefault();

        links.forEach(link => link.classList.remove('active'));

        this.classList.add('active');
    });
});
});


document.addEventListener('DOMContentLoaded', function() {
    const items = document.querySelectorAll('ul li a');

    items.forEach(item => {
        item.addEventListener('click', function() {
            items.forEach(i => i.classList.remove('active'));
            this.classList.add('active');
        });
    });
});
