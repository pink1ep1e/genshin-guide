let offfset = 0; 
const sliderLine = document.querySelector('#slider');
const sliderLineNextPath = document.querySelector('#slider-next-path-banner');

document.querySelector('.slider-next').addEventListener('click', function(){
    offfset = offfset + 1225;
    if (offfset > 1225) {
        offfset = 0;
    }
    sliderLine.style.left = -offfset + 'px'
    sliderLineNextPath.style.left = -offfset + 'px'
});


let btns = document.querySelectorAll('.slider-next-path');

for (let i = 0; i < btns.length; i++) {
    btns[i].addEventListener("click", function() {    
        document.querySelectorAll('.items').forEach(function(el) {
            el.style.display = 'none';
        }); 

        document.querySelector(`.${this.dataset.menuName}`).style.display = 'flex';
    });
}

