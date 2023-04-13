$(document).on('keyup', '#search', function(){
    document.querySelector('#searchResult').classList.remove('hidden');
    document.querySelector('#searchResult').classList.add('block');
    var query =$(this).val();
    searchData(query);
});

$(document).on('focus', '#search', function(){
    document.querySelector('#searchResult').classList.remove('hidden');
    document.querySelector('#searchResult').classList.add('block');
});

$(document).on('blur', '#search', function(){
    $(document).on('mouseleave', '#searchResultList', function(){
        document.querySelector('#searchResult').classList.add('hidden');
        document.querySelector('#searchResult').classList.remove('block');    
    });
});



function searchData(query){
    $.ajax({
        url:'/search',
        method:'GET',
        data:{query:query},
        dataType:'json',
        success: function(data){
            if(data.searchResult != null){
                $('#searchResultList').html(data.searchResult);
            }
            else if(data.searchResultTitle != null){
                $('#searchResultList').html(data.searchResultTitle);
            }
            else if(data.searchResultCategory != null){
                $('#searchResultList').html(data.searchResultCategory);
            }
            else if(data.searchResultAuthor != null){
                $('#searchResultList').html(data.searchResultAuthor);
            }
        }
    });
}