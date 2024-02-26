<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Select extends Component
{
    public array $options;
    public string $defaultOption;

    public function __construct($defaultOption, $options)
    {
        $this->defaultOption = $defaultOption;
        $this->options = $options;
    }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('components.select');
    }
}
