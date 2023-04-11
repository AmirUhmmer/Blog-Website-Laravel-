function showEditPost(button){

    $('#editPost').show()
    $('#profileCaptionContent').hide()
    $('#userTable').hide()
    $('#goTop').hide()
    $('#pages').hide()

   // Get the data attributes from the button element
   var title = button.dataset.titleedit;
   var content = button.dataset.contentedit;
   var picture = button.dataset.pictureedit;
   var id = button.dataset.idedit;
   var category = button.dataset.categoryedit;
   
   document.getElementById('titleToEdit').value = title
   document.getElementById('contentToEdit').value = content
   document.getElementById('idEdit').value = id
   document.getElementById('categoryToEdit').value = category

   //pic preview
   document.getElementById("previewPicEdit").src = picture;
   document.getElementById("origPic").value = picture;
}

function cancelButtonEdit(){
    $('#pages').show()
    $('#editPost').hide()
    $('#profileCaptionContent').show()
    $('#userTable').show()
    $('#goTop').show()
    document.getElementById("pictureToEdit").value = "";
    
}