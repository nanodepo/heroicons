<?php

namespace Brnwls\HeroIcons\Views\Components;

use Illuminate\View\Component;

class ArrowSmRightSolid extends Component
{
    public function render()
    {
        return <<<'blade'
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes }} viewBox="0 0 20 20" fill="currentColor">
  <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
</svg>
blade;
    }
}