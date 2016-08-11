
<div class="jumbotron">
        <div class="container">
            <h1><?php echo $title; ?></h1>
            <h6>Technician Names by Store.</h6>            
        </div>
</div>
<div class="container">
   
    <table class="table table-striped">
        <thead><th>Technician name</th><th>Store Address</th><th>More info</th></thead>
        <?php foreach ($technicians_by_store as $techicians): ?>
        <tr>
            <td><?php echo $techicians->tname; ?></td>
            <td><?php echo $techicians->sadd; ?></td>
            <td>Just for fun</td>
            </tr>      
        <?php endforeach; ?>
    </table>
</div>
