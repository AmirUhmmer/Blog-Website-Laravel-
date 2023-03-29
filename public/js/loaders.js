function fullStoryLoader(){
    // Show the loader
    $('#postFullHeaderLoader').show();
    $('#postFullLoader').show();
  
    // Hide the content
    $('#postFullHeaderContent').hide();
    $('#postFullContent').hide();

  
    // Wait for the DOM to be ready
    $(document).ready(() => {
      setTimeout(function(){
        // Hide the loader
        $('#postFullHeaderLoader').hide();
        $('#postFullLoader').hide();
  
        // Show the content
        $('#postFullHeaderContent').show();
        $('#postFullContent').show();
      }, 1000);
    });
  }

  function postsLoader(){
    // Show the loader
    $('#postHeaderLoader').show();
    $('#postSnippetsLoader').show();
    $('#postCaptionloader').show();
  
    // Hide the content
    $('#postHeaderContent').hide();
    $('#postSnippetsContent').hide();
    $('#postCaptionContent').hide();

  
    // Wait for the DOM to be ready
    $(document).ready(() => {
      setTimeout(function(){
        // Hide the loader
        $('#postHeaderLoader').hide();
        $('#postSnippetsLoader').hide();
        $('#postCaptionloader').hide();
  
        // Show the content
        $('#postHeaderContent').show();
        $('#postSnippetsContent').show();
        $('#postCaptionContent').show();

      }, 1000);
    });
  }