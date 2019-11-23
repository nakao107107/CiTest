<?php
namespace Tests\Unit\Repositories;
use App\Repositories\ItemRepository;
use Tests\TestCase;

class ItemTest extends TestCase
{
    private $repository;


    public function test_insertTest(){
        $this->repository = app(ItemRepository::class);
        $name = $this->repository->createItem("aaa");
        $this->assertTrue($name == "aaa");
    }

    public function down(): void
    {
        //Artisan::call('migrate:refresh');
        //parent::tearDown();
    }
}
