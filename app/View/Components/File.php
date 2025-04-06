<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class File extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct(
        public string $name,
        public string $label = '',
<<<<<<< HEAD
        public string $preview = ''
=======
        public string $preview = '',
        public bool $required = false,
>>>>>>> aa6c636e1 (أول رفع لموقع wepower.host)
    ) {}

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.file');
    }
}
