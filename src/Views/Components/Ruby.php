<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class Ruby extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path d="M3.01641 18.1406H20.9867M3.00977 12.6406H8.5L12 8.64056L15.5 12.6406H20.9852M12 8.65072V2.6558M6.50508 22.6285L8.5 18.1338V12.6328M15.5 12.6261V18.1343L17.4973 22.6339M12 2.64056L3 12.6406V18.1406L6.5 22.6406H17.5L21 18.1406V12.6406L12 2.64056Z" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<path d="M9.30173 12.8629L11.8495 9.95211C11.9292 9.86107 12.0708 9.86108 12.1505 9.95213L14.7001 12.8656C14.732 12.9021 14.7496 12.9489 14.7496 12.9973V17.1913C14.7496 17.3017 14.66 17.3913 14.5496 17.3913L9.45215 17.3892C9.34172 17.3891 9.25223 17.2996 9.25223 17.1892V12.9946C9.25223 12.9462 9.26982 12.8994 9.30173 12.8629Z" />
<path d="M12.75 2.67019V8.28335C12.75 8.33189 12.7677 8.37878 12.7997 8.41526L15.7827 11.815C15.8207 11.8583 15.8755 11.8831 15.9331 11.8831H20.889C21.0611 11.8831 21.1529 11.6801 21.0391 11.5509L13.1001 2.53799C12.9783 2.39966 12.75 2.48584 12.75 2.67019Z" />
<path d="M11.2542 2.67019V8.28335C11.2542 8.33189 11.2366 8.37878 11.2045 8.41526L8.22151 11.815C8.18353 11.8583 8.12875 11.8831 8.07117 11.8831H3.11526C2.94312 11.8831 2.8514 11.6801 2.96518 11.5509L10.9041 2.53799C11.026 2.39966 11.2542 2.48584 11.2542 2.67019Z" />
<path d="M16.2514 13.593V17.1913C16.2514 17.3018 16.341 17.3913 16.4514 17.3913H20.9022C21.0127 17.3913 21.1022 17.3018 21.1022 17.1913V13.593C21.1022 13.4825 21.0127 13.393 20.9022 13.393H16.4514C16.341 13.393 16.2514 13.4825 16.2514 13.593Z" />
<path d="M7.75043 13.593V17.1913C7.75043 17.3018 7.66089 17.3913 7.55043 17.3913H3.10379C2.99333 17.3913 2.90379 17.3018 2.90379 17.1913V13.593C2.90379 13.4825 2.99333 13.393 3.10379 13.393H7.55043C7.66089 13.393 7.75043 13.4825 7.75043 13.593Z" />
<path d="M7.12435 23.098L8.93317 19.0108C8.9652 18.9384 9.03688 18.8917 9.11602 18.8917L14.8858 18.8906C14.965 18.8906 15.0367 18.9373 15.0688 19.0098L16.8759 23.0981C16.9343 23.2303 16.8375 23.379 16.693 23.379H7.30724C7.16265 23.379 7.06583 23.2303 7.12435 23.098Z" />
<path d="M20.9566 18.8912H16.9642C16.8194 18.8912 16.7226 19.0402 16.7814 19.1724L18.2346 22.4393C18.296 22.5774 18.4825 22.6001 18.5753 22.4807L21.1145 19.2139C21.2166 19.0825 21.123 18.8912 20.9566 18.8912Z" />
<path d="M3.04314 18.8906H7.03557C7.18033 18.8906 7.27714 19.0396 7.21831 19.1719L5.76512 22.4388C5.7037 22.5768 5.51722 22.5995 5.42447 22.4802L2.88523 19.2134C2.78312 19.082 2.87674 18.8906 3.04314 18.8906Z" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<path d="M7.80127 10.8841L9.84951 8.54401C9.9292 8.45297 10.0708 8.45298 10.1505 8.54403L12.2003 10.8863C12.2322 10.9228 12.2498 10.9696 12.2498 11.018V14.3419C12.2498 14.4524 12.1602 14.5419 12.0498 14.5419H7.95177C7.84131 14.5419 7.75177 14.4524 7.75177 14.3419V11.0158C7.75177 10.9674 7.76936 10.9205 7.80127 10.8841Z" />
<path d="M10.7473 2.30105V6.87786C10.7473 6.9264 10.765 6.97329 10.797 7.00977L13.2646 9.82209C13.3026 9.86537 13.3574 9.89018 13.4149 9.89018H17.456C17.6281 9.89018 17.7198 9.68716 17.6061 9.55799L11.0974 2.16885C10.9755 2.03052 10.7473 2.1167 10.7473 2.30105Z" />
<path d="M9.25271 2.30105V6.87786C9.25271 6.9264 9.23506 6.97329 9.20304 7.00977L6.73541 9.82209C6.69744 9.86537 6.64266 9.89018 6.58508 9.89018H2.54403C2.37189 9.89018 2.28017 9.68716 2.39395 9.55799L8.90263 2.16885C9.02448 2.03052 9.25271 2.1167 9.25271 2.30105Z" />
<path d="M13.7509 11.581V14.3433C13.7509 14.4538 13.8404 14.5433 13.9509 14.5433H17.526C17.6365 14.5433 17.726 14.4538 17.726 14.3433V11.581C17.726 11.4705 17.6365 11.381 17.526 11.381H13.9509C13.8404 11.381 13.7509 11.4705 13.7509 11.581Z" />
<path d="M6.24572 11.5677V14.3419C6.24572 14.4524 6.15618 14.5419 6.04572 14.5419H2.42455C2.31409 14.5419 2.22455 14.4524 2.22455 14.3419V11.5677C2.22455 11.4573 2.31409 11.3677 2.42455 11.3677H6.04572C6.15618 11.3677 6.24572 11.4573 6.24572 11.5677Z" />
<path d="M6.29062 18.8586L7.49175 16.1664C7.52391 16.0944 7.59546 16.0479 7.67439 16.0479H12.3375C12.4168 16.0479 12.4887 16.0948 12.5206 16.1675L13.6985 18.8476C13.7565 18.9797 13.66 19.1279 13.5157 19.1281L6.4736 19.14C6.3286 19.1403 6.23154 18.991 6.29062 18.8586Z" />
<path d="M17.3503 16.0479H14.3954C14.2506 16.0479 14.1538 16.1969 14.2126 16.3292L15.2882 18.7471C15.3496 18.8852 15.5361 18.9079 15.6288 18.7886L17.5082 16.3707C17.6104 16.2393 17.5167 16.0479 17.3503 16.0479Z" />
<path d="M2.64303 16.0479H5.598C5.74276 16.0479 5.83957 16.1969 5.78073 16.3292L4.70516 18.7471C4.64374 18.8852 4.45726 18.9079 4.36452 18.7886L2.48512 16.3707C2.383 16.2393 2.47663 16.0479 2.64303 16.0479Z" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<path d="M6.39792 8.88005L7.84927 7.22037C7.92901 7.12919 8.07085 7.12925 8.1505 7.22051L9.60065 8.88193C9.63245 8.91836 9.64997 8.96509 9.64997 9.01345V11.411C9.64997 11.5215 9.56043 11.611 9.44997 11.611H6.54847C6.43802 11.611 6.34847 11.5215 6.34847 11.411L6.34847 9.0117C6.34847 8.96328 6.36604 8.9165 6.39792 8.88005Z" />
<path d="M8.75088 2.09371L8.75088 5.55665C8.75088 5.60522 8.76856 5.65214 8.80061 5.68863L10.6735 7.82089C10.7115 7.86412 10.7663 7.8889 10.8238 7.8889H13.8817C14.0538 7.8889 14.1455 7.68584 14.0317 7.55667L9.10093 1.96148C8.97906 1.82319 8.75088 1.90939 8.75088 2.09371Z" />
<path d="M7.25538 2.09927L7.25538 5.5622C7.25538 5.61078 7.2377 5.65769 7.20564 5.69419L5.33271 7.82645C5.29474 7.86968 5.23998 7.89446 5.18245 7.89446H2.12459C1.95243 7.89446 1.86071 7.69139 1.97454 7.56223L6.90533 1.96704C7.02719 1.82875 7.25538 1.91494 7.25538 2.09927Z" />
<path d="M5.22013 15.1524L6.08015 13.2276C6.11233 13.1556 6.18386 13.1092 6.26275 13.1092H9.73166C9.81062 13.1092 9.88219 13.1557 9.91434 13.2278L10.7696 15.1466C10.8286 15.2788 10.7319 15.4279 10.5872 15.4281L5.40295 15.434C5.25795 15.4341 5.16097 15.2848 5.22013 15.1524Z" />
<path d="M11.1497 12.2808V9.58763C11.1497 9.47717 11.2393 9.38763 11.3497 9.38763H13.9536C14.0633 9.38763 14.1525 9.47598 14.1536 9.58567L14.1878 13.0835C14.1882 13.1237 14.1765 13.1631 14.1541 13.1966L12.786 15.2443C12.6985 15.3752 12.501 15.3584 12.4369 15.2145L11.167 12.3621C11.1556 12.3365 11.1497 12.3088 11.1497 12.2808Z" />
<path d="M4.84892 12.2854V9.59228C4.84892 9.48182 4.75938 9.39228 4.64892 9.39228H2.0451C1.9354 9.39228 1.84618 9.48063 1.84511 9.59032L1.81086 13.0882C1.81047 13.1284 1.82221 13.1678 1.84455 13.2012L3.21271 15.249C3.30019 15.3799 3.49767 15.3631 3.56172 15.2192L4.83163 12.3668C4.84303 12.3412 4.84892 12.3135 4.84892 12.2854Z" />
blade;
    }
}
