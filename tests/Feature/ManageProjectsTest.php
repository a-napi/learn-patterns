<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ManageProjectsTest extends TestCase
{
    use RefreshDatabase, WithFaker;

    /** @test */
    public function guest_cannot_manage_projects()
    {
        $project = factory(\App\Project::class)->create();

        $this->post('/projects', $project->toArray())->assertRedirect('login');
        $this->get('/projects')->assertRedirect('login');
        $this->get('/projects/create')->assertRedirect('login');
        $this->get($project->path())->assertRedirect('login');
    }


    /** @test */
    public function a_user_can_create_a_project()
    {
        $this->withoutExceptionHandling();
        $user = factory(\App\User::class)->create();
        $this->actingAs($user);

        $this->get('/projects/create')->assertStatus(200);

        $attributes = [
         'title' => $this->faker->sentence,
         'description' => $this->faker->paragraph,
         'owner_id' => $user->id
        ];

        $this->post('/projects', $attributes)->assertRedirect('/projects');



        $this->get('/projects')->assertSee($attributes['title']);
    }

    /** @test */
    public function a_user_can_view_their_project()
    {
        $this->be(factory('App\User')->create());

        $this->withoutExceptionHandling();

        $project = factory('App\Project')->create(['owner_id' => auth()->id()]);

        $this->get($project->path())
        ->assertSee($project->title)
        ->assertSee($project->description);
    }

    /** @test */
    public function an_authenticated_users_cannot_view_the_projects_of_others()
    {
        $this->be(factory('App\User')->create());

        //$this->withoutExceptionHandling();

        $project = factory('App\Project')->create();

        $this->get($project->path())
            ->assertStatus(403);

    }


    /** @test */
    public function a_project_requires_a_title()
    {
        $this->actingAs(factory('App\User')->create());
        //$this->withoutExceptionHandling();
        $attributes = factory('App\Project')->raw(['title' => '']);
        $this->post('/projects', $attributes)->assertSessionHasErrors('title');
    }

    /** @test */
    public function a_project_requires_a_description()
    {
        $this->actingAs(factory('App\User')->create());
        //$this->withoutExceptionHandling();
        $attributes = factory('App\Project')->raw(['description' => '']);
        $this->post('/projects', $attributes)->assertSessionHasErrors('description');
    }

//    /** @test */
//    public function a_project_requires_an_owner()
//    {
//        $this->actingAs(factory('App\User')->create());
//        //$this->withoutExceptionHandling();
//        $attributes = factory('App\Project')->raw(['owner_id' => null]);
//        $this->post('/projects', $attributes)->assertSessionHasErrors('owner_id');
//    }
}
