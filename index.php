<?php 
include 'core/init.php';
?>
<!DOC TYPE=html>
<head>
    <title>
        Articles
    </title>
    <link rel="stylesheet" href="style.css"/>
    <script type="text/javascript" src="js/jquery-2.2.2.min.js"></script>
    <script type="text/javascript" src="js/like.js"></script>
   
    
</head>
<body>
   <?php 
   $articles=get_articles();
 
   //echo count($articles);
   if(count($articles)==0)
   {
       echo "sorry,No articles found";
   }
   else{
       echo '<ul>';
       foreach ($articles as $article) {
           echo '<li> <p>'.$article['ArticleTitle'],'</p> <p> <a class="like" href="" onclick="like_add(',$article['ArticleId'],')">LIKE</a><span id="article_',$article['ArticleId'],'_likes">'.$article['ArticleLike'].' Like this </span> </p></li>';
           
       }
       echo '</ul>';
   }
   ?>
     
</body>
</html>