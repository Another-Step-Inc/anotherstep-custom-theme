document.addEventListener('DOMContentLoaded', function(e){
    if (document.querySelector('.pointer-trail')) {
        function itCursor() {
            const myCursor = document.querySelector('.pointer-trail');
            if (myCursor) {
                if (document.body) {
                    const innerCursor = document.querySelector('.cursor-inner');
                    const outerCursor = document.querySelector('.cursor-outer');
                    let mouseY, mouseX;
                    let isHovering = false;

                    let outerCursorX = 0;
                    let outerCursorY = 0;
                    const speed = 0.6;

                    window.onmousemove = function(event) {
                        const deltaX = event.clientX - outerCursorX;
                        const deltaY = event.clientY - outerCursorY;

                        outerCursorX += deltaX * speed;
                        outerCursorY += deltaY * speed;

                        if (!isHovering) {
                            outerCursor.style.transform = `translate(${outerCursorX}px, ${outerCursorY}px)`;
                        }
                        innerCursor.style.transform = `translate(${event.clientX}px, ${event.clientY}px)`;
                        mouseY = event.clientY;
                        mouseX = event.clientX;
                    };

                    function handleMouseEnter(event) {
                        const target = event.target;
                        if (target.matches('button, a, .cursor-pointer')) {
                            innerCursor.classList.add('cursor-hover');
                            outerCursor.classList.add('cursor-hover');
                        }                        
                    }

                    function handleMouseLeave(event) {
                        const target = event.target;
                        const isLinkOrButton = target.matches('a, button');
                        const closestCursorPointer = target.closest('.cursor-pointer');

                        if (target.matches('button, a, .cursor-pointer')) {
                            innerCursor.classList.remove('cursor-hover');
                            outerCursor.classList.remove('cursor-hover');
                            outerCursor.style.transform = `translate(${mouseX}px, ${mouseY}px)`;
                        }                        
                    }




                    document.body.addEventListener('mouseenter', handleMouseEnter, true);
                    document.body.addEventListener('mouseleave', handleMouseLeave, true);

                    innerCursor.style.visibility = 'visible';
                    outerCursor.style.visibility = 'visible';
                }
            }
        }
        itCursor();
    }
});