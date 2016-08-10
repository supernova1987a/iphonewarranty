<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>This page will display the list of all customers.</h6>
        </div>
</div>
    <div class="container"><?php
    echo '<h2>'.$customer_item['cName'].'</h2>';
    echo $customer_item['cPhone'];?>
</div>
            