
<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>Quantity by Store.</h6>            
        </div>
</div>
<div class="container">
   
    <table class="table table-striped">
        <thead><th>Technician name</th><th>Store Address</th><th>More info</th></thead>
        <?php foreach ($quantity_by_store as $quantities): ?>
        <tr>
            <td><?php echo $quantities->sname; ?></td>
            <td><?php echo $quantities->squantity; ?></td>
            <td>Just for fun</td>
            </tr>      
        <?php endforeach; ?>
    </table>
</div>
