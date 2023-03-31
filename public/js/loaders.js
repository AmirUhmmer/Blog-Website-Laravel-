function fullStoryLoader(){
    // Show the loader
    $('#postFullHeaderLoader').show();
    $('#postFullLoader').show();
  
    // Hide the content
    $('#postFullHeaderContent').hide();
    $('#postFullContent').hide();

  
    // Wait for the DOM to be ready
    window.addEventListener('load', () => {
        // Hide the loader
        $('#postFullHeaderLoader').hide();
        $('#postFullLoader').hide();
  
        // Show the content
        $('#postFullHeaderContent').show();
        $('#postFullContent').show();
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
    window.addEventListener('load', () => {
        // Hide the loader
        $('#postHeaderLoader').hide();
        $('#postSnippetsLoader').hide();
        $('#postCaptionloader').hide();
  
        // Show the content
        $('#postHeaderContent').show();
        $('#postSnippetsContent').show();
        $('#postCaptionContent').show();

    });
  }

  function profileLoader(){
    // Show the loader
    $('#profileHeaderLoader').show();
    $('#profileCaptionLoader').show();
    $('#userTableLoader').show();
  
    // Hide the content
    $('#profileHeaderContent').hide();
    $('#profileCaptionContent').hide();
    $('#userTable').hide();

  
    // Wait for the DOM to be ready
    window.addEventListener('load', () => {
        // Hide the loader
        $('#profileHeaderLoader').hide();
        $('#profileCaptionLoader').hide();
        $('#userTableLoader').hide();
  
        // Show the content
        $('#profileHeaderContent').show();
        $('#profileCaptionContent').show();
        $('#userTable').show()
    });
  }