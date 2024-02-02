const highlights = document.querySelectorAll('.product__highlights');
const titles = document.querySelectorAll('.woocommerce-loop-product__title');

// function to get the tallest element
function getTallest(elements) {
    let tallest = 0;
    elements.forEach(element => {
        element.style.height = 'unset';
        let height = element.offsetHeight;
        if(height > tallest) {
            tallest = height;
        }
    });
    return tallest;
}

// function to set heights to the tallest
function setHeights(elements) {
    if(elements) {
        const height = getTallest(elements);
        elements.forEach(element => {
            element.style.height = height + 'px';
            element.style.display = 'block';
        });
    }
}

// If we have highlights and titles match heights
if(highlights && titles) {
    setHeights(titles);
    setHeights(highlights);

    window.addEventListener('resize', () => {
        setHeights(titles);
        setHeights(highlights);
    }, true);
}