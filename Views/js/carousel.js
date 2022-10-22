(function(){

        const carousel = document.querySelector('.carousel');
        const cloneFirstContent = document.querySelector('.carousel-content:first-child').cloneNode(true);
        cloneFirstContent.setAttribute('class','carousel-content carousel-4');
        carousel.appendChild(cloneFirstContent);
        const carouselContent = document.querySelectorAll('.carousel-content');

        let index = 0;
        
        function slideContent(){

            
                carousel.style.transition = 'transform .5s ease-in-out';
                carousel.style.transform = `translateX(-${index * 100}%)`;
                if(index >= carouselContent.length -1)
                {
                    index = 0;
                    setTimeout(function(){
                        carousel.style.transition = 'unset';
                        carousel.style.transform = `translateX(-${index * 00}%)`;
                    },
                    500);
                }
        
        }
        function blinkBeforeSlide(){
            carousel.style.animation = 'blink .3s infinite';           
            setTimeout(function(){
                carousel.style.animation = 'unset';
            },1500);
            index++;
            setTimeout(slideContent,2000);
        };

        blinkBeforeSlide();

        setInterval(function(){
            blinkBeforeSlide();
        },2500);
})();