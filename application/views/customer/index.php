<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>This page will display the list of all customers.</h6>
            
        </div></div>
<div class="container">
        <?php foreach ($customer as $customer_item): ?>

        <h3><?php echo $customer_item['cName']; ?></h3>
        <div class="main">
                <?php echo $customer_item['cPhone']; ?>
        </div>
        <p><a href="<?php echo site_url('customer/'.$customer_item['cID']); ?>">View customer</a></p>
        <?php endforeach; ?>
</div>

