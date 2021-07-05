<?php

use Illuminate\Support\Facades\Route;
use Noardcode\SpeechToText\SpeechToText;
use Noardcode\SpeechToText\Transcripts\WordTimeOffsets;

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

Route::get('/', function () {

 
    // Using different types of transcripts (e.g. include word time offsets (startTime and endTime))
    resolve(SpeechToText::class)->setTranscript(new WordTimeOffsets())
        ->run(storage_path('1.ogg'));

});
