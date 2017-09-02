<?php

namespace Tests\Feature;

use Cidery\Chemical;
use Cidery\ChemicalInventory;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ChemicalTest extends TestCase
{

	use RefreshDatabase;
	/** @test */
	public function should_be_able_to_create_and_view_chemicals()
	{
	    $chemical = factory(Chemical::class)->create();

	    $response = $this->get('/chemical/'.$chemical->id);
	    $response->assertStatus(200);
        $response->assertSee($chemical->name);
	}

	/** @test */
	public function chemicals_can_have_inventory()
	{
	    $chemical = factory(Chemical::class)->create()->each(function ($inventory) {
        	$inventory->inventory()->save(factory(ChemicalInventory::class)->make());
    	});
	}
}
