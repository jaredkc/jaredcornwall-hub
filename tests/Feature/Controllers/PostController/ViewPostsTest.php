<?php

use App\Models\Post;
use App\Models\User;
use Inertia\Testing\AssertableInertia;

use function Pest\Laravel\get;

it('should return correct component', function () {
    $this->actingAs($user = User::factory()->create());

    get(route('posts.index'))
        ->assertInertia(fn(AssertableInertia $inertia) => $inertia
            ->component('Posts/Index', true));
});

it('passes posts to view', function () {
    $this->actingAs($user = User::factory()->create());

    // TODO: finsing testing data returned for posts

    get(route('posts.index'))
        ->assertInertia(fn(AssertableInertia $inertia) => $inertia
            ->has('posts'));
});
