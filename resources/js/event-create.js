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

})();