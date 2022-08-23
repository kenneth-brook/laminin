<?php

$adhesives_sql = "SELECT p.id, p.product_name, p.product_sub_title, p.product_description, p.product_data_sheet, p.safety_data_sheet, d1.filename_disk AS f1, d2.filename_disk AS f2  FROM products AS p JOIN directus_files as d1 ON d1.id = p.product_data_sheet JOIN directus_files as d2 ON d2.id = p.safety_data_sheet WHERE product_category = 0 AND active = 1";

$adhesives_result = mysqli_query($connection,$adhesives_sql);

while ($adhesives_rows = mysqli_fetch_assoc($adhesives_result)) {
    $id = $adhesives_rows['id'];
    $name = $adhesives_rows['product_name'];
    $subT = $adhesives_rows['product_sub_title'];
    $desc = $adhesives_rows['product_description'];

    $prodDat = $adhesives_rows['f1'];
    $safeDat = $adhesives_rows['f2'];
    

    


        echo "<li>
        <div class='card'>
            <h3 class='card-header cushycms'>".$name."</h3>
            <div class='card-body cushycms'>
                <h5 class='card-title'>".$subT."</h5>
                <p>".$desc."</p>
            </div>
            <form action='' method='post'>
                <input type='number' name='quantity' value='1' min='1' placeholder='Quantity' required>
                <input type='hidden' name='id' value='". $id . "'>
                <input type='hidden' name='name' value='". $name . "'>
                <input type='submit' value='Add To Cart'>
            </form>
<div class='card-footer cushycms'>
    <ul class='card-buttons'>
        <li><a href='directus/public/uploads/laminin/originals/". $prodDat . "' class='card-button'
                target='_blank'>Product Data Sheet</a></li>
        <li><a href='directus/public/uploads/laminin/originals/". $safeDat . "' class='card-button'
                target='_blank'>Safety Data Sheet</a></li>
    </ul>
</div>
</div>
</li>";
}

?>