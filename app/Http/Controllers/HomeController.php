<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\MailService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class HomeController extends Controller
{
    public function __construct(
        protected MailService $mail
    ) {
    }

    public function coba()
    {
        echo "Halaman coba";
    }

    public function testing(MailService $mail)
    {
        $teks = "Ini teks dari controller";

        // return view('beranda', ['teks' => $teks]);
        return view('beranda', compact('teks'));
    }


    public function beranda()
    {
        $users = Cache::remember('users', 60, function () {
            return User::all();
        });


        return view('beranda', compact('users'));
    }

    public function readFile($filename)
    {
        return response()->file("design-system/assets/images/{$filename}");
    }
}
