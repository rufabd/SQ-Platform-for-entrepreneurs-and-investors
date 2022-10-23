<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

use function PHPUnit\Framework\assertEquals;

class SearchPostTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_search_project_post_by_title()
    {
        $searchResponse = $this->call('GET', '/founder/project-posts?search=soft');
        $data = json_decode($searchResponse->getContent(), true);
        if($data['status'] == 'success') {
            // dd($data['title']);
            // dd($data['status']);
            $this->assertTrue(true);
            // $searchResponse->assertSee($data['title']);
        } else {
            // dd($data['status']);
            $this->assertTrue(false);
            // $searchResponse->assertDontSee($data['title']);
        }
        
    }
}