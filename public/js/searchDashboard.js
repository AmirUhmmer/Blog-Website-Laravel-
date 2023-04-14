$(document).ready(function() {
    var query ='';
    searchDataAdmin(query);
});

$(document).on('keyup', '#searchAdmin', function(){
    var query =$("#searchAdmin").val();
    searchDataAdmin(query);
});


function searchDataAdmin(query){
    $.ajax({
        url:'/searchAdmin',
        method:'GET',
        data:{query:query},
        dataType:'json',
        success: function(data){
            $('#postTable tbody').empty();
            console.log(query);
            alert(query);
            // if(data.searchResult != null){
            //     $('#searchResultList').html(data.searchResult);
            // }
            // else if(data.searchResultTitle != null){
            //     $('#searchResultList').html(data.searchResultTitle);
            // }
            // else if(data.searchResultCategory != null){
            //     $('#searchResultList').html(data.searchResultCategory);
            // }
            // else if(data.searchResultAuthor != null){
            //     $('#searchResultList').html(data.searchResultAuthor);
            // }
        }
        
    });
}