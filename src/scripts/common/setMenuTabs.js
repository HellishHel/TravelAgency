window.addEventListener('load', function() {
    const nav = this.document.querySelector('header #navigation');
    let urlArray = window.location.href.split('/');
    let currentPage = urlArray[urlArray.length - 1];

    let tabs = nav.querySelectorAll('a');

    tabs.forEach(tab => {
        tab.classList.remove('active');
    });

    for (let i = 0; i < tabs.length; i++) {
        if (tabs[i].getAttribute('href').indexOf(currentPage) !== -1) {
            tabs[i].classList.add('active');

            break;
        }
    }
});