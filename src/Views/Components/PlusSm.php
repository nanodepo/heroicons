<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class PlusSm extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
  <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
</svg>
blade;
    }
}