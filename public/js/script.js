const sideNav = document.querySelectorAll('.sidenav');
M.Sidenav.init(sideNav);

const slider = document.querySelectorAll('.slider');
M.Slider.init(slider,{
    indicators : false,
    height : 500,
    transtion : 600,
    interval : 3000
});

const parallax = document.querySelectorAll('.parallax');
M.Parallax.init(parallax);

const materialboxed = document.querySelectorAll('.materialboxed');
M.Materialbox.init(materialboxed);

document.addEventListener('DOMContentLoaded',function(){
    let elements = document.querySelectorAll('.carousel')
    let instance  = M.Carousel.init(elements,{
        fullWidth : true,
        indicators : true
    })
})


const modal = document.querySelectorAll('.modal');
const modalInstance = M.Modal.init(modal);
modalInstance.open()


