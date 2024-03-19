<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Service\MailService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(protected MailService $mailService)
    {
    }

    public function testservice(MailService $mailService)
    {
        $this->mailService->send();
    }

    public function try()
    {
        $text = 'teks dari controller function try()';
        echo $text;
    }
    public function view()
    {
        $text = 'teks dari controller function view()';
        return view('view', compact('text'));
    }
    public function admin()
    {
        $text = 'teks dari controller function admin()';
        echo $text;
    }
}