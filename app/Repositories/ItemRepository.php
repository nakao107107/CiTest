<?php
namespace App\Repositories;
use App\Models\Item;

class ItemRepository
{
    private $item;

    public function __construct(
        Item      $item
    ){
        $this->item       = $item;
    }


    public function createItem(string $name)
    {
        $model = $this->item::create(['name' => $name])->toArray();
        return $model["name"];
    }
}
