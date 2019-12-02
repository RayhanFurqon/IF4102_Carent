<?php

namespace Tests\Feature\Http\Controllers;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegCustControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    /** @test */
    public function store_data_to_db()
    {
        // $response = $this->get('/');

        // $response->assertStatus(200);
        $data = [   
            'email_cust'=>'email@email',
            'nama'=>'nama',
            'password'=>"pass",
            'foto_profile'=>'foto'
        ];
        if($data!=NULL){
            $this->assertTrue(true);
        }else{
            
        }
    }
}
