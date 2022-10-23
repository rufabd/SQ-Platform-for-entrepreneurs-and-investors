<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class postTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    /* @test */
    public function test_a_project_post_can_be_created()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST', 'project/posts/create', [
            'founder_id' => 3,
            'hiring_tag_id' => 2,
            'industry_tag_id' => 5,
            'title' => 'Looking for Software Developer',
            'organization_description'=>'some description',
            'post_description' => 'another description',
            'country' => 'Estonia',
            'city' => 'Tartu',
            'organization' => 'University of Tartu',
            'organization_year' => 1692,
            'project_stage' => 'MVP ready',
            'hours_per_week' => 40,
            'type_week' => 'full_time',
            'investment' => 2450000
        ]);
        // dd($response);
        // dd($response->assertStatus(200));
        $data = json_decode($response->getContent(), true);
        if($data['status'] == 'success') {
            // dd($data['status']);
            // dd($data['post']);
            $this->assertTrue(true);
            $response->assertStatus(200);
        } else {
            $this->assertTrue(false);
        }
    }
}