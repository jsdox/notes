<?php

// uses(Tests\TestCase::class);


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

test('assert empty', function() {
    $array = [];
    $this->assertEmpty($array);
    $this->assertStringContainsString('Star', 'Star Wars');
});

test('expect true to be true', function () {
    // assertion
    $this->assertTrue(true);
  
    // expectation
    expect(true)->toBe(true);
  });

  it('chain', function () {
      $id = 14;
      $name = 'Jatinder';
    expect($id)->toBe(14)->and($name)->toBe('Jatinder');
  });
/*group test*/
  it('has home', function () {
    $this->assertTrue(true);
})->group('integration');

it('has home2', function () {
    $this->assertTrue(true);
})->group('integration');