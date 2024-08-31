<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class Topaz extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path d="M4.99182 12H19.0047M12 2L5.00002 12L12 22L19 12L12 2ZM12 2.00977L9.50002 11.9953L12 21.991L14.4995 11.9956L12 2.00977Z" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<path d="M13.8885 10.8663L12.2881 5.36067C12.2043 5.07232 11.7957 5.07232 11.7119 5.36067L10.1115 10.8663C10.0557 11.0583 10.1997 11.2501 10.3996 11.2501H13.6004C13.8003 11.2501 13.9442 11.0583 13.8885 10.8663Z" />
<path d="M13.8887 13.0997L12.2883 18.6054C12.2045 18.8937 11.796 18.8937 11.7122 18.6054L10.1118 13.0997C10.056 12.9078 10.2 12.716 10.3999 12.716H13.6006C13.8005 12.716 13.9445 12.9078 13.8887 13.0997Z" />
<path d="M4.75417 10.7827L10.3703 2.53123C10.5626 2.24882 11.0019 2.4559 10.9064 2.78389L8.50396 11.0354C8.46667 11.1634 8.3493 11.2515 8.21591 11.2515L5.00217 11.2515C4.76126 11.2515 4.61861 10.9819 4.75417 10.7827Z" />
<path d="M4.75443 13.1834L10.3706 21.4348C10.5628 21.7172 11.0021 21.5102 10.9067 21.1822L8.50422 12.9307C8.46694 12.8026 8.34957 12.7145 8.21618 12.7145L5.00244 12.7146C4.76152 12.7146 4.61888 12.9842 4.75443 13.1834Z" />
<path d="M19.2453 10.7834L13.6291 2.53194C13.4369 2.24953 12.9976 2.45661 13.0931 2.7846L15.4955 11.0361C15.5328 11.1642 15.6502 11.2522 15.7835 11.2522L18.9973 11.2522C19.2382 11.2522 19.3809 10.9826 19.2453 10.7834Z" />
<path d="M19.2456 13.1826L13.6294 21.4341C13.4372 21.7165 12.9978 21.5094 13.0933 21.1815L15.4958 12.93C15.5331 12.8019 15.6504 12.7138 15.7838 12.7138L18.9976 12.7138C19.2385 12.7139 19.3811 12.9835 19.2456 13.1826Z" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<path d="M11.5926 8.99349L10.1923 4.1763C10.1364 3.98407 9.8641 3.98407 9.80822 4.1763L8.40797 8.99349C8.37077 9.12146 8.46676 9.24932 8.60002 9.24932H11.4005C11.5338 9.24932 11.6298 9.12146 11.5926 8.99349Z" />
<path d="M11.6302 11.0083L10.2299 15.8255C10.174 16.0177 9.9017 16.0177 9.84582 15.8255L8.44557 11.0083C8.40837 10.8804 8.50436 10.7525 8.63762 10.7525H11.4381C11.5714 10.7525 11.6674 10.8804 11.6302 11.0083Z" />
<path d="M3.64743 8.93616L8.55831 1.72093C8.68645 1.53266 8.97934 1.67071 8.91567 1.88937L6.81495 9.10461C6.79009 9.18999 6.71184 9.2487 6.62292 9.2487L3.81277 9.24869C3.65216 9.24869 3.55706 9.06893 3.64743 8.93616Z" />
<path d="M3.68503 11.0657L8.59591 18.2809C8.72405 18.4691 9.01693 18.3311 8.95327 18.1124L6.85254 10.8972C6.82769 10.8118 6.74944 10.7531 6.66052 10.7531L3.85036 10.7531C3.68976 10.7531 3.59466 10.9329 3.68503 11.0657Z" />
<path d="M16.3526 8.93856L11.4417 1.72333C11.3136 1.53506 11.0207 1.67311 11.0844 1.89177L13.1851 9.10701C13.2099 9.19239 13.2882 9.2511 13.3771 9.2511L16.1873 9.25109C16.3479 9.25109 16.443 9.07133 16.3526 8.93856Z" />
<path d="M16.3902 11.0633L11.4793 18.2785C11.3512 18.4667 11.0583 18.3287 11.122 18.11L13.2227 10.8948C13.2475 10.8094 13.3258 10.7507 13.4147 10.7507L16.2249 10.7507C16.3855 10.7507 16.4806 10.9305 16.3902 11.0633Z" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<path d="M2.98603 7.25H5.44557C5.49138 7.25 5.53133 7.21887 5.54253 7.17445L7.05651 1.16903C7.08401 1.05991 6.93824 0.995559 6.87614 1.08941L2.90263 7.09482C2.85865 7.1613 2.90632 7.25 2.98603 7.25Z" />
<path d="M2.98603 8.7H5.44557C5.49138 8.7 5.53133 8.73114 5.54253 8.77556L7.05651 14.781C7.08401 14.8901 6.93824 14.9544 6.87614 14.8606L2.90263 8.85518C2.85865 8.78871 2.90632 8.7 2.98603 8.7Z" />
<path d="M13.1174 7.25H10.6299C10.5832 7.25 10.5427 7.21761 10.5324 7.17201L9.17557 1.15689C9.15093 1.04762 9.29706 0.986651 9.35738 1.08103L13.2016 7.09615C13.2442 7.16272 13.1964 7.25 13.1174 7.25Z" />
<path d="M13.1174 8.7H10.6299C10.5832 8.7 10.5427 8.7324 10.5324 8.778L9.17557 14.7931C9.15093 14.9024 9.29706 14.9634 9.35738 14.869L13.2016 8.85386C13.2442 8.78729 13.1964 8.7 13.1174 8.7Z" />
<path d="M8.01585 13.2352L7.02725 8.82186C7.01326 8.75937 7.06079 8.7 7.12484 8.7H8.97846C9.0414 8.7 9.0887 8.75747 9.07659 8.81924L8.21157 13.2326C8.19075 13.3388 8.03951 13.3409 8.01585 13.2352Z" />
<path d="M8.01585 2.76477L7.02725 7.17815C7.01326 7.24064 7.06079 7.3 7.12484 7.3H8.97846C9.0414 7.3 9.0887 7.24254 9.07659 7.18077L8.21157 2.76739C8.19075 2.66117 8.03951 2.65914 8.01585 2.76477Z" />
blade;
    }
}
