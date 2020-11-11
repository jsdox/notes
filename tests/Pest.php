<?php

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

// Uses the given test case in the "Feature" folder recursively
// uses(TestCase::class)->in('Feature');

// Uses the given trait in the "Unit" folder recursively
// uses(RefreshDatabase::class)->in('Unit');

// You can use line number 7 and 10 or 14

uses(TestCase::class, RefreshDatabase::class)->in(__DIR__);