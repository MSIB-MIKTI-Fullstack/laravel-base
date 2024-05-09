<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    /**
     * Create a new component instance.
     */
<<<<<<< HEAD
    public function __construct(
        public string $textColor
    ) {
=======
    public function __construct()
    {
>>>>>>> origin/rafa
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
<<<<<<< HEAD
        $nama_perusahaan = "MIKTI";

        return view('components.admin-layout', [
            'nama_perusahaan' => $nama_perusahaan
        ]);
=======
        return view('components.admin-layout');
>>>>>>> origin/rafa
    }
}
