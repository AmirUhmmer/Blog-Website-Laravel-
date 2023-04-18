$(document).on('keyup', '#searchAdmin', function(){
    var query =$("#searchAdmin").val();
    searchDataAdmin(query);
});


function searchDataAdmin(query){
    $.ajax({
        url:'/admin',
        method:'GET',
        data:{query:query},
        dataType:'html',
        success: function(data){
            $('#postTable tbody').empty();
            console.log(query);
            console.log(data);
        },
        error: function(){
            console.log('error');
        }
    });
}