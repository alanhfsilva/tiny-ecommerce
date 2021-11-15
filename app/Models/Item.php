<?php

namespace App\Models;

class Item
{
    const PREFIX = 'item';
    
    public $product_id;
    public $product_name;
    public $product_price;
    public $product_qty;
    public $product_img_url;

    public function __construct(array $product)
    {
        $this->product_id = $product['product_id'];
        $this->product_name = $product['product_name'];
        $this->product_price = $product['product_price'];
        $this->product_qty = $product['product_qty'];
        $this->product_img_url = $product['product_img_url'];
    }
}
