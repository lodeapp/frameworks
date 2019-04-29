<?php

namespace Tests;

use Exception;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Console\Kernel;

trait CreatesApplication
{
    /**
     * Creates the application.
     *
     * @return \Illuminate\Foundation\Application
     */
    public function createApplication()
    {
        $app = require __DIR__.'/../bootstrap/app.php';

        $app->make(Kernel::class)->bootstrap();

        Hash::setRounds(4);

        // $app->singleton(
        //     \Illuminate\Contracts\Debug\ExceptionHandler,
        //     Handler
        // );

        return $app;
    }
}

// class Handler implements \Illuminate\Contracts\Debug\ExceptionHandler
// {
//     public function report(Exception $e)
//     {
//         //
//     }

//     public function render($request, Exception $e)
//     {
//         throw $e;
//     }

//     public function renderForConsole($output, Exception $e)
//     {
//         throw $e;
//     }
// }
