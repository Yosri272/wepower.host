<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Artisan;

class PassportStorageSupportController extends Controller
{
    public function index()
    {
        try {
            shell_exec('php ../artisan passport:install');

            return back()->with('success', 'Passport installed successfully.');
        } catch (\Throwable $th) {

<<<<<<< HEAD
            return back()->with('error', 'Passport not installed beacause'.$th->getMessage());
=======
            return back()->with('error', 'Passport not installed because '.$th->getMessage());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    public function seederRun()
    {
        try {
            Artisan::call('migrate:fresh --seed --force');

            return back()->with('success', 'Successfully restored is necessary data.');
        } catch (\Throwable $th) {
<<<<<<< HEAD
            return back()->with('error', 'Seeder not runed beacause '.$th->getMessage());
=======
            return back()->with('error', 'Seeder not run because '.$th->getMessage());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }

    public function storageInstall()
    {
        try {
            Artisan::call('storage:link');

            return back()->with('success', 'Storage linked is successfully.');
        } catch (\Throwable $th) {
<<<<<<< HEAD
            return back()->with('error', 'Storage not linked beacause '.$th->getMessage());
=======
            return back()->with('error', 'Storage not linked because '.$th->getMessage());
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
        }
    }
}
