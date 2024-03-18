const productContainers = [...document.querySelectorAll('.mini-caro')];
const nxtBtn = [...document.querySelectorAll('.caro-nxt')];
const preBtn = [...document.querySelectorAll('.caro-prev')];

productContainers.forEach((item,i) => {
    let containerDimensions = item.getBoundingClientRect();
    let containerWidth = containerDimensions.width;

    nxtBtn[i].addEventListener('click', () => {
        item.scrollLeft += containerWidth/6;
    })

    preBtn[i].addEventListener('click', () => {
        item.scrollLeft -= containerWidth/6;
    })
})