<?php 

function get_articles(){
  $conn=mysqli_connect("localhost","dbuser","123","Like") ;  
   // $articles=array();
    $Query="SELECT * FROM Article";
    $Data=  mysqli_query($conn, $Query);
   
   while( $fields=  mysqli_fetch_assoc($Data))
   {
      $articles[] =array(
          'ArticleId'=>$fields['ArticleId'],
          'ArticleTitle'=>$fields['ArticleTitle'],
          'ArticleLike'=>$fields['ArticleLike']
      );
     //echo '<pre>', print_r($articles),'</pre>';
  
   }
       return $articles;
}

?>