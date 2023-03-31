// var form = document.getElementById('addPostForm')
//     form.addEventListener('submit', function(event) {
//         event.preventDefault()
        
//         let formData = new FormData(form);

//         $.ajax({
//             url : 'php/add_post_contr.php',
//             type: 'POST',
//             data: formData,
//             contentType: false,
//             processData: false,
//             success: function(res){
//                 Swal.fire({
//                     icon: 'success',
//                     title: 'Your work has been saved',
//                 }).then((result) => {
//                     if(result.isConfirmed){
//                         window.location.reload();
//                     }
//                     document.getElementById('titleToAdd').value = ''
//                     document.getElementById('contentToAdd').value = ''
//                     document.getElementById('picture').value = ''
//                 })
//             },
//             error: function(){
//                 Swal.fire({
//                     icon: 'error',
//                     title: 'Oops...',
//                     text: 'Something went wrong!',
//                   })
//             },
//         })

//     })

function showAddPost(){
    $('#addPostInput').show()
    $('#profileCaptionContent').hide()
    $('#userTable').hide()
    $('#goTop').hide()
    $('#pages').hide()
}

function cancelButton(){
    $('#pages').show()
    $('#addPostInput').hide()
    $('#profileCaptionContent').show()
    $('#userTable').show()
    $('#goTop').show()
    document.getElementById("picture").value = "";
    document.getElementById("previewPicAdd").src = "storage/pictures/insert_image.png";
}