document.addEventListener('DOMContentLoaded', function () {
    const stickyHeader = document.querySelector('.sticky-header');
    const topBar = document.querySelector('.top-bar');
    let topBarHeight = topBar ? topBar.offsetHeight : 0;

    if (stickyHeader) {
        const observer = new IntersectionObserver(
            ([entry]) => {

            },
            {
                rootMargin: `-${topBarHeight}px 0px 0px 0px`,
                threshold: [0, 1]
            }
        );
    }

    window.addEventListener('scroll', function() {
        const currentScroll = this.window.scrollY;

        if (currentScroll > topBarHeight && !isScrolled) {
            stickyHeader.classList.add('scrolled');
        } else if (currentScroll <= topBarHeight && isScrolled) {
            stickyHeader.classList.remove('scrolled');
        }
    });


});