import Glide from '@glidejs/glide'

if (document.querySelector('.guide__slider')) {
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
}

if (document.querySelector('.companies__slider')) {
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
}
if (document.querySelector('.saves__slider')) {
  var saves__slider = new Glide('.saves__slider', {
    type: 'slider',
    startAt: 0,
    perView: 4,
    bound: true,
    gap: 0,
  }).mount()
}


if (document.querySelector('.reviews__items')) {
  var reviews__items = new Glide('.reviews__items', {
    type: 'slider',
    startAt: 0,
    perView: 4,
    bound: true,
    gap: 0,
  }).mount()
}