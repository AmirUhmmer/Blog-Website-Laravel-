function showEditPost(button){
    $('#editPost').show()
    $('#caption1').hide()
    $('#userTable').hide()
    $('#goTop').hide()

    var id = element.getAttribute('data-idEdit');
    var title = element.getAttribute('data-titleEdit');
    var content = element.getAttribute('data-contentEdit');
    var picture = element.getAttribute('data-pictureEdit');

    // Populate the form fields with the values
    document.getElementById('idToEdit').value = id;
    document.getElementById('titleToEdit').value = title;
    document.getElementById('contentToEdit').value = content;
    document.getElementById('previewPicEdit').src = picture;
}

function cancelButtonEdit(){
    $('#editPost').hide()
    $('#caption1').show()
    $('#userTable').show()
    $('#goTop').show()

    
}

    var formEdit = document.getElementById('editPostForm')
    formEdit.addEventListener('submit', function(event) {
        event.preventDefault()
        
        let formData = new FormData(formEdit);

        $.ajax({
            url : 'php/edit_post_contr.php',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(res){
                Swal.fire({
                    icon: 'success',
                    title: 'Your work has been saved',
                }).then((result) => {
                    if(result.isConfirmed){
                        window.location.reload();
                    }
                    document.getElementById('titleToEdit').value = ''
                    document.getElementById('contentToEdit').value = ''
                    document.getElementById('pictureToEdit').value = ''
                })
            },
            error: function(){
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Something went wrong!',
                  })
            },
            beforeSend: function(xhr){
                
            },
            complete: function(){
               
           }
        })

    })