<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>This page will display the list of all customers.</h6>
        </div>
</div>
    <div class="container">
        <div class="list-group">
            <a href="#" class="list-group-item active">
                <?php echo '<h4 class="list-group-item-heading">'.$customer_item['cName'].'</h4>';?>
            </a>
            <a href="#" class="list-group-item"><?php echo $customer_item['cPhone'];?></a> 
            <a href="#" class="list-group-item"><?php echo $customer_item['email'];?></a> 
            <a href="#" class="list-group-item"><?php echo $customer_item['cID'];?></a> 
        </div>
</div>
            