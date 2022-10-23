<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;

class LeaveCommentToPostTest extends TestCase
{
    use WithoutMiddleware;
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_comment_can_be_left_to_the_post()
    {
        $this->withoutExceptionHandling();
        $response = $this->call('POST', 'comments', [
            'user_id' => 21,
            'project_post_id' => 1,
            'body' => 'This is new comment added'
        ]);
        // dd($response);
        // dd($response->assertStatus(200));
        $data = json_decode($response->getContent(), true);
        if($data['status'] == 'success') {
            // dd($data['comment']);
            $this->assertTrue(true);
            $response->assertStatus(200);
            $response->assertSee($data['body']);
        } else {
            $this->assertTrue(false);
        }                                 
    }
}