'use strict';

(function () {
  // Snow Theme
  // --------------------------------------------------------------------
  const snowEditor = new Quill('#events-create-main', {
    bounds: '#events-create-main',
    modules: {
      formula: true,
      toolbar: '#events-create-main-toolbar'
    },
    theme: 'snow'
  });


  snowEditor.on('text-change', function (delta, oldDelta, source) {
    console.log(snowEditor.container.querySelector('.ql-editor').innerHTML);
    document.getElementById('hidden_content').innerHTML = snowEditor.container.querySelector('.ql-editor').innerHTML;
  });


  $(".select2").select2();



  var dynamicSlider = document.getElementById("slider-guests"),
  sliderInputMin = document.getElementById("min_guests"),
  sliderInputMax = document.getElementById("max_guests");

noUiSlider.create(dynamicSlider, {
  start: [+sliderInputMin.value, +sliderInputMax.value],
  connect: true,
  range: {
    min: 0,
    max: 150
  }
});

dynamicSlider.noUiSlider.on("update", function(values, handle) {
  var value = values[handle];
  if (handle) {
    sliderInputMax.value = Math.round(value);
  } else {
    sliderInputMin.value = Math.round(value);
  }
});

sliderInputMin.addEventListener("change", function() {
  dynamicSlider.noUiSlider.set([this.value, null]);
});

sliderInputMax.addEventListener("change", function() {
  dynamicSlider.noUiSlider.set([null, this.value]);
});

})();