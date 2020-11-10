<?php

uses(Tests\TestCase::class);


beforeEach(function () {
    echo 'beforeEach';
    $this->hey = 'artisan';
});

it('has welcome page 0', function () {
    $response = $this->get('/');

    $response->assertStatus(200);
});


it('has welcome page 1')->get('/')->assertStatus(200);

it('has welcome page 2')->get('/')->assertStatus(200);

test('asserts true is true', function () {
    $this->assertTrue(true);

    expect(true)->toBeTrue();
    echo get_class($this); 
    echo $this->hey;
});