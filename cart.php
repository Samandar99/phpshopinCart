<?php 
session_start();
error_reporting(-1);
require_once __DIR__ . '/inc/db.php';
require_once __DIR__ . '/inc/funcs.php';

if(isset($_GET['cart'])){
    switch($_GET['cart']){
       case 'add':
        $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
        $product = get_product($id);
        
        if(!$product){
            echo json_encode(['code' => 'error', 'answer' => 'Error']);
        } else {
            echo json_encode(['code' => 'ok', 'answer' => $product]);
        }
        break;
    }
}


?>