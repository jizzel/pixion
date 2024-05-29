<?php

use App\Models\Employer;

it('belongs to an employer', function () {
//    AAA Arrange Act Assert
    $employer = Employer::factory()->create();
    $job = \App\Models\Job::factory()->create(['employer_id' => $employer->id]);
    expect($job->employer->is($employer))->toBeTrue();
});

it('can have tags', function () {
    $job = \App\Models\Job::factory()->create();

    $job->tag('Frontend');

    expect($job->tags)->toHaveCount(1);
});
