<?php

use Illuminate\Support\Facades\Route;
use YorCreative\Scrubber\Repositories\RegexRepository;
use YorCreative\Scrubber\Scrubber;

Route::get('/log', function () {
    Log::info(__('Scrub sensitive information'), [
        'context' => __('accidental'),
        'leak_of' => [
            'jwt' => Scrubber::processMessage(app(RegexRepository::class)->getRegexCollection()->get('json_web_token')->getTestableString())
        ]
    ]);
});
