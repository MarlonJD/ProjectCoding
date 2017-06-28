</body>
  <!--  Scripts-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/codemirror.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/mode/htmlmixed/htmlmixed.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/mode/vbscript/vbscript.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/mode/xml/xml.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/mode/css/css.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/mode/javascript/javascript.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/addon/edit/closebrackets.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.25.2/addon/edit/closetag.min.js"></script>
  <script>
  $(document).ready(function() {
    $('select').material_select();
    $(".button-collapse").sideNav();
    $('.modal').modal();
  });

  $(document).ready(function(){

  var suggestedTags = [
    '<p>',    
    '</p>',
    '<xmp>',    
    '</xmp>'
  ];

  var selectedTags = [];

  function tagButton(text){
    return $('<span>').text(text)        
  }

  for(var i = 0; i < suggestedTags.length; i++) {
    $('#tagButtons').append(tagButton(suggestedTags[i]));
  }

  $('#tagButtons span').click(function(){
    var val = $(this).text();
    var index = selectedTags.indexOf(val);
    if(index > -1) {
      removed = selectedTags.splice(index,1); 
      $(this).removeClass('selected');
    } else {
      selectedTags.push(val);
      $(this).addClass('selected');
    }
    $('#aciklama').val(selectedTags.join(''));
    console.log(selectedTags);
  });

  $('#aciklama').keyup(function(){
    selectedTags = [];
    var textTags = $(this).val().split(',');
    for(var i = 0; i < textTags.length; i++) {
      var text = $.trim(textTags[i]);
      if(text) {
        selectedTags.push(text);
      }
    }
    console.log(selectedTags);
  });

});


  </script>
  <script>

    var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
                       mode: null},
                      {matches: /(text|application)\/(x-)?vb(a|script)/i,
                       mode: "vbscript"}]
      };

    var editor = CodeMirror.fromTextArea(KodAlani, {
        theme: 'solarized',
        mode: mixedMode,
        lineNumbers: true,
        autoCloseBrackets: true,
        autoCloseTags: true
    });

    editor.on("change", function() {
        clearTimeout(delay);
        var delay = setTimeout(updatePreview, 300);
      });
      
      function updatePreview() {
        var previewFrame = document.getElementById('preview');
        var preview =  previewFrame.contentDocument ||  previewFrame.contentWindow.document;
        preview.open();
        preview.write(editor.getValue());
        preview.close();
      }
      setTimeout(updatePreview, 300);
  (function($){
  $(function(){

    $('.button-collapse').sideNav();
    

  }); // end of document ready
})(jQuery); // end of jQuery name space
  </script>
  </body>
</html>
