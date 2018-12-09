<?php include 'includes/config.php'?>
<?php get_header()?>

<?php
if(isset($_GET['id']))
{
    $id = (int)$_GET['id'];
}else{
    header('Location:goods_list.php');
}

$sql = 'SELECT * FROM tb_commo WHERE id = '. $id;
  
$conn = db_connect();
$result = mysqli_query($conn, $sql) or die(myerror(__FILE__,__LINE__,mysqli_error($iConn)));

if(mysqli_num_rows($result) > 0)
{
    while($row = mysqli_fetch_assoc($result))
    {
        $goodsName = stripslashes($row['name']);
        $goodsInfo = stripslashes($row['info']);
        $goodsAddtime = stripslashes($row['addtime']);
        $goodsModel = stripslashes($row['model']);
        $goodsBrand = stripslashes($row['brand']);
        $goodsStocks = stripslashes($row['stocks']);
        $goodsPrice = stripslashes($row['m_price']);
      	$goodsPics = stripslashes($row['pics']);
    }    
}else{
    echo '<a>Does not exist</a>';
}

?>
<main class="mt-5 pt-4">
  <div class="container dark-grey-text mt-5">
    <div class="row wow fadeIn">
      <div class="col-md-6 mb-4">
        <img src="<?=$config->theme_virtual?>img/<?=$goodsPics?>" class="img-fluid" alt="">
      </div>
      
      <div class="col-md-6 mb-4">
        <div class="p-4">
          <div class="mb-3">
            <a href="">
              <span class="badge red mr-1"><?=$goodsBrand?></span>
            </a>
            <br \>
            <a href="">
              <span class="badge purple mr-1"><font size="5"><?=$goodsName?></font></span>
            </a>

              
            
          </div>
			<hr />
          <p class="lead">
            <!--<span class="mr-1">
              <del>$200</del>
            </span>-->
            
            <span><font size="6" color="red">$<?=$goodsPrice?></font></span>
            <a>& FREE Shipping.</a>
          </p>

          <p class="lead font-weight-bold">Description</p>

          <p><?=$goodsInfo?></p>

          <form class="d-flex justify-content-left">
            <input type="number" value="1" aria-label="Search" class="form-control" style="width: 100px">
            	&nbsp;
              <button class="btn btn-primary btn-md my-0 p" type="submit">Add to cart
                <i class="fa fa-shopping-cart ml-1"></i>
              </button>
          </form>

        </div>
      </div>
    </div>
  </div>
</main>
  <center><a href="goods_list.php"><button type="button" class="btn btn-outline-secondary">Back</button></a></center>

<?php
@mysqli_free_result($result);
@mysqli_close($conn);
?>
<?php get_footer()?>