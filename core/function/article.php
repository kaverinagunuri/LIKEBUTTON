<?php 
$conn=mysqli_connect("localhost","dbuser","123","Like") ;
function get_articles(){
    
   // $articles=array();
    $Query="SELECT * FROM Article WHERE ArticleId=1";
    $Data=  mysqli_query($conn, $Query);
    $fields=  mysqli_fetch_assoc($Data);
   while($fields)
   {
       echo $fields['ArticleTitle'],'<br/>';
   }
}

?>