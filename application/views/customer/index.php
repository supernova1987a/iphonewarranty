<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>This page will display the list of all customers.</h6>            
        </div>
</div>
<div class="container">
    <table class="table table-striped">
        <thead><th>Customer Name</th><th>Phone Number</th><th>More info</th></thead>
        <?php foreach ($customer as $customer_item): ?>
        <tr>
            <td><?php echo $customer_item['cName']; ?></td>
            <td><?php echo $customer_item['cPhone']; ?></td>
            <td><a href="<?php echo site_url('customer/'.$customer_item['cID']); ?>">View customer</a></td>
        </tr>      
        <?php endforeach; ?>
    </table>
</div>

