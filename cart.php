<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="main.css">
    </head>
    <body>
<div class="container">
    <div class="row">

    <?php
    require 'db.php';
    $query = 'SELECT * FROM products
                ORDER BY id ASC' ;
    $result = mysqli_query($conn, $query);

    if($result){
        if(mysqli_num_rows($result)>0){
            while($product = mysqli_fetch_assoc($result)){
            //    print_r($product)
    ?>

    <div class="col-sm-4 col-md-3" >
        <form action="index.php?action=add&id=<?php echo $product['id']; ?>"  method='post'>
        <div class="products">
            <img src="<?php echo $product['image'];?>" class="img-responsive"></img>
            <h4 class="text-info"><?php echo $product['name'];?> </h4>
            <h4><?php echo $product['price'];?></h4>
            <input type="text" name="quantity" class="form-control" value="1">
            <input type="hidden" name="name" value="<?php echo $product['name'];?>">
            <input type="hidden" name="price" value="<?php echo $product['price'];?>">
            <input type="submit" name="add_to_cart" class="btn btn-info" value="add to cart">
        
        </div>
        </form>
    </div>


<?php
        }
    }
}
?>
</div>
</div>

        
        <script src="" async defer></script>
    
    
    </body>
</html>
