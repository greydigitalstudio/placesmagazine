import Glide from '@glidejs/glide'

var guide_slider = new Glide('.guide__slider', {
  type: 'slider',
  perView: 3,
  bound: true,
  gap: 0,
  peek: {
    before: 0,
    after: 86
  }
}).mount()


var companies_slider = new Glide('.companies__slider', {
  type: 'slider',
  startAt: 2,
  perView: 7,
  bound: true,
  gap: 90,
  peek: {
    before: 66,
    after: 66
  }
}).mount()