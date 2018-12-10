<?php include 'includes/config.php'?>
<?php get_header()?>

<?php

$rowThree = 0;
$rowThreeBack = 1;
$sql = "select * from tb_commo";
//we extract the data here
$conn = db_connect();
$result = mysqli_query($conn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));
//echo $result;
if(mysqli_num_rows($result) > 0)
{   
    
    while($row = mysqli_fetch_assoc($result)){
      if($rowThree % 3 == 0)
      {
        echo '<div class="card-deck">';
      }      
      echo '<div class="card mb-4">';
      echo '<div class="view overlay">';
      echo '<img class="card-img-top" src="' . $config->theme_virtual . 'img/'. $row[pics] .'" height="380" width="214" alt="Card image cap">';   
      echo '<a href="#!">';
      echo '<div class="mask rgba-white-slight"></div>';
      echo '</a>';
      echo '</div>';
      echo '<div class="card-body">';
      echo '<h4 class="card-title"><div style="width:400px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis">' . $row['name'] . '</div></h4>';
      echo '<p class="card-text"><div style="width:500px; white-space:nowrap;overflow:hidden;text-overflow:ellipsis">'. $row['info'] .'</div></p>';
      echo '<a href="goods_view.php?id=' . $row['id'] . '"><button type="button" class="btn btn-primary">Read more</button></a>';
      echo '</div>';
      echo '</div>';
      if($rowThreeBack % 3 == 0)
      {
        echo '</div>'; 
      }
      $rowThree ++;
      $rowThreeBack ++;
    }
}else{//inform there are no records
    echo '<h3 class="post-title">Nothing</h3>';
} 
echo '</div>';
//release web server resources
@mysqli_free_result($result);
//close connection to mysql
@mysqli_close($conn);
?>
<?php get_footer()?>
