import Glide from '@glidejs/glide'

if (document.querySelector('.general__page-slider-images-js')) {
  var guide_slider = new Glide('.general__page-slider-images-js', {
    type: 'slider',
    perView: 1,
    bound: true,
    gap: 0,
  }).mount()
}
console.log(123123123123);

