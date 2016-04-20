function like_add(ArticleId){
   $.post('ajax/like_add.php',{Article_Id:ArticleId},function(data){
       if(data == 'success'){
           like_get(ArticleId);
       }else{
           alert(data);
       }
   }); 
}

function like_get(ArticleId){
    $.post('ajax/like_get.php',{Article_Id:ArticleId},function(data){
        alert("hai");
       $('#article_'+ArticleId+'_likes').text(data);
    });
    
}