<?php

use Core\App;
use Carbon\Carbon;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);

$errors = []; 
$images = [];

if(!Validator::string(($_POST['name']))) {
    array_push($errors, "Products name is required!");
}


if(!Validator::string(($_POST['price']),1,1000)) {
    array_push($errors, "Products price is required!");
}

if(!is_numeric($_POST['price'])){
    array_push($errors, "Price field not allow characters!");
}

if(!Validator::string(($_POST['description']),1,1000)) {
    array_push($errors, "Products description is required!");
}

// dd($_POST);
if(empty($errors)) {
    $product_image = $db->query('SELECT image1,image2,image3 FROM products WHERE id = :id',[
        'id' => $_POST['p_id']
    ])->findOrFail();

    $img1 = $product_image['image1'];
    $img2 = $product_image['image2'];
    $img3 = $product_image['image3'];

        if($_FILES['image1']['name'] != '' || $_FILES['image2']['name'] != '' || $_FILES['image3']['name'] != ''){
            $count = 0;
            foreach($_FILES as $img_ary) {
                if($img_ary['name'] != '') {
                    $images[$count] = upload($img_ary, 'product_images/');
                 } 
                $count += 1;
            }
            [$image1 ,$image2 , $image3] = $images;    
        }
    
    $db->query('UPDATE products SET name = :name, description = :description, category_id = :category_id, price = :price, is_stock = :is_stock, image1 = :image1, image2 = :image2, image3 = :image3, updated_at = :updated_at, shop_id = :shop_id WHERE id = :id ',[
                    'id' => $_POST['p_id'],
                    'name' => $_POST['name'],
                    'description' => $_POST['description'],
                    'price' => intval($_POST['price']),
                    'category_id' => intval($_POST['category_id']),
                    'is_stock' => $_POST['is_stock'],
                    'image1' => $image1? $image1 : $img1,
                    'image2' => $image2? $image2 : $img2,
                    'image3' => $image3? $image3 : $img3,
                    'updated_at' => Carbon::now()->format('Y-m-d-H:i:s'),
                    'shop_id' => intval($_POST['shop_id']),
                ]);

    with('success', 'Products successfully updated.');
    redirectTo('admin/products');
} else {
    $categories = $db->query('SELECT categories.id as id, categories.name as name, shops.name as shop_name 
                                FROM categories LEFT JOIN shops ON shops.id = categories.shop_id ')->get();

    $product = $db->query("SELECT * FROM products WHERE id = :id",[
    'id' => $_POST['p_id']
    ])->findOrFail();

    $shops = $db->query("SELECT id,name FROM shops")->get();

    view('backend/products/edit.view.php',['errors' => $errors,'shops' => $shops, 'product' => $product, 'categories' => $categories]);
}