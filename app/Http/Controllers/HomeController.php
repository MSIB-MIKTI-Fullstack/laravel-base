<?php

namespace App\Http\Controllers;

use App\Service\MailService;
use Illuminate\Http\Request;

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
        echo "Ini adalah beranda admin";
    }
}
