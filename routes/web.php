<?php

use Illuminate\Support\Facades\Route;
use YorCreative\Scrubber\Repositories\RegexRepository;
use YorCreative\Scrubber\Scrubber;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/log', function () {
    Log::info('scrubber regex', [
        'context' => 'accidental',
        'leak_of' => [
            'jwt' => Scrubber::processMessage(app(RegexRepository::class)->getRegexCollection()->get('json_web_token')->getTestableString())
        ]
    ]);
});
