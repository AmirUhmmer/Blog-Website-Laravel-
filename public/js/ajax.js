
function showFullStory(){
    
    var urlParams = new URLSearchParams(window.location.search);
    var postId = urlParams.get('post_id');

    $.ajax({
        type: 'GET',
        url: 'php/view_full_story.php',
        dataType: 'html',
        data: {postId:postId},
        success: function (data) {
            $("#postFull").append(data);
        },
        error: function () {
            alert("error");
        },
        
    })
}

function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
    }

function toggleDark(){
    
    // const darkToggle = document.querySelector('.toggle-dark');
    // document.documentElement.classList.toggle('dark');

  const htmlElement = document.documentElement;
  htmlElement.classList.toggle('dark');

  if (htmlElement.classList.contains('dark')) {
    localStorage.setItem('darkMode', 'on');
    $('#moon').hide();
    $('#sun').show();
    $('#moonMobile').hide();
    $('#sunMobile').show();
  } else {
    localStorage.setItem('darkMode', 'off');
    $('#moon').show();
    $('#sun').hide();
    $('#moonMobile').show();
    $('#sunMobile').hide();
  }

}

  document.addEventListener("DOMContentLoaded", function(event) {
    const htmlElement = document.documentElement;
    const darkMode = localStorage.getItem('darkMode');
    if (darkMode === 'on') {
      htmlElement.classList.add('dark');
      $('#moon').hide();
      $('#sun').show();
      $('#moonMobile').hide();
      $('#sunMobile').show();
    }
    else {
        $('#moon').show();
        $('#sun').hide();
        $('#moonMobile').show();
        $('#sunMobile').hide();
    }
    
  });

  function indexLoader(){
    // Show the loader
    $('#indexCardLoader').show();
    $('#indexCaptionLoader').show();
    $('#indexCaptionLoader1').show();
    $('#headerLoader').show();
  
    // Hide the content
    $('#indexCardContent').hide();
    $('#indexCaptionContent').hide();
    $('#indexCaptionContent1').hide();
    $('#headerContent').hide();

    //loading event
    window.addEventListener('load', () => {
       // Hide the loader
       $('#indexCardLoader').hide();
       $('#indexCaptionLoader').hide();
       $('#indexCaptionLoader1').hide();
       $('#headerLoader').hide();
 
       // Show the content
       $('#indexCardContent').show();
       $('#indexCaptionContent').show();
       $('#indexCaptionContent1').show();
       $('#headerContent').show();
    });
  }

