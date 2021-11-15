<?php

namespace App\Repositories;

use App\Models\Item;
use Illuminate\Contracts\Session\Session;

class ItemRepository 
{
    public function get(string $product_id): ?Item
    {
        return session($this->getProductId($product_id), null);
    }

    public function all(): array
    {
        return session(Item::PREFIX, []);
    }
    
    public function add(Item $item): void
    {
        if(empty(session($this->getProductId($item->product_id), null))) {
            $this->create($item);
        } else {
            $this->update($item);
        }
    }

    public function delete(string $product_id)
    {
        if(!empty(session($this->getProductId($product_id), null))) {
            session()->forget($this->getProductId($product_id));
            return true;
        }

        return false;
    }

    private function update(Item $item): void
    {
        $item->product_qty = (float) session($this->getProductId($item->product_id), 0)->product_qty + (float) $item->product_qty;
        $this->store($item);
    }

    
    private function create(Item $item): void
    {
        $this->store($item);
    }

    private function store(Item $item): void
    {
        session([$this->getProductId($item->product_id) => $item]);
        session()->save();
    }

    private function getProductId(string $product_id): string
    {
        return sprintf("%s.%s", Item::PREFIX, $product_id);
    }
}