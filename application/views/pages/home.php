<h2>Sudiyat's Family</h2>
<div class="row">
    <div class="col-lg-12">
        <ul>
        <?php foreach ($employees as $employee) { ?>
            <li><?php echo $employee['lastName'] . ', ' . $employee['firstName'] ?></li>
        <?php } ?>            
        </ul>
    </div>
</div>