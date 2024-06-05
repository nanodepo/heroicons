<?php

namespace NanoDepo\Heroicons\Views\Components;

use NanoDepo\Heroicons\Iconable;

class Diamond extends Iconable
{
    public function outline(): string
    {
        return <<<'blade'
<path d="M2.33942 8.25H22.3058M15.3359 8.23672L19.3179 3.26055M9.31637 8.23594L5.33278 3.26094M2.32574 8.25L12.3257 20.75L22.3257 8.25L19.3257 3.25H5.32574L2.32574 8.25ZM9.32574 8.25L12.3257 20.734L15.3257 8.25L12.3257 3.27626L9.32574 8.25Z" />
blade;
    }

    public function solid(): string
    {
        return <<<'blade'
<path d="M9.08405 9.56547H15.5621C15.6937 9.56547 15.7895 9.69038 15.7552 9.81746L12.5162 21.8482C12.4631 22.0455 12.1831 22.0455 12.13 21.8481L8.89093 9.81746C8.85672 9.69038 8.95245 9.56547 9.08405 9.56547Z" />
<path d="M22.888 9.56547H17.5213C17.4308 9.56547 17.3515 9.62628 17.3281 9.71373L14.6663 19.6541C14.6104 19.8628 14.8793 19.9995 15.015 19.8315L23.0436 9.89113C23.1493 9.76033 23.0562 9.56547 22.888 9.56547Z" />
<path d="M1.751 9.56547H7.11773C7.20827 9.56547 7.28751 9.62628 7.31093 9.71373L9.97275 19.6541C10.0286 19.8628 9.75973 19.9995 9.62397 19.8315L1.59541 9.89113C1.48977 9.76033 1.58286 9.56547 1.751 9.56547Z" />
<path d="M3.92138 3.53134C3.99836 3.398 4.19081 3.398 4.26779 3.53134L6.70652 7.75533C6.7835 7.88866 6.68727 8.05533 6.53331 8.05533H1.65586C1.5019 8.05533 1.40568 7.88866 1.48266 7.75533L3.92138 3.53134Z" />
<path d="M12.1499 3.54204C12.2269 3.4087 12.4193 3.4087 12.4963 3.54204L14.935 7.76603C15.012 7.89936 14.9158 8.06603 14.7618 8.06603H9.88436C9.7304 8.06603 9.63418 7.89936 9.71116 7.76603L12.1499 3.54204Z" />
<path d="M20.3837 3.54204C20.4607 3.4087 20.6531 3.4087 20.7301 3.54204L23.1688 7.76603C23.2458 7.89936 23.1496 8.06603 22.9956 8.06603H18.1182C17.9642 8.06603 17.868 7.89936 17.945 7.76603L20.3837 3.54204Z" />
<path d="M8.39126 7.03058C8.31428 7.16392 8.12183 7.16392 8.04485 7.03058L5.60613 2.80659C5.52915 2.67326 5.62538 2.50659 5.77934 2.50659L10.6568 2.50659C10.8107 2.50659 10.907 2.67326 10.83 2.80659L8.39126 7.03058Z" />
<path d="M16.616 7.03058C16.539 7.16392 16.3465 7.16392 16.2696 7.03058L13.8308 2.80659C13.7539 2.67326 13.8501 2.50659 14.0041 2.50659L18.8815 2.50659C19.0355 2.50659 19.1317 2.67326 19.0547 2.80659L16.616 7.03058Z" />
blade;
    }

    public function mini(): string
    {
        return <<<'blade'
<path d="M7.91734 8.08244H12.7356C12.8672 8.08244 12.963 8.20736 12.9287 8.33444L10.5196 17.2827C10.4665 17.48 10.1865 17.48 10.1334 17.2827L7.72421 8.33444C7.69 8.20736 7.78573 8.08244 7.91734 8.08244Z" />
<path d="M1.58916 8.08244H5.96411C6.05465 8.08244 6.1339 8.14327 6.15731 8.23073L8.32723 16.3375C8.3831 16.5462 8.11415 16.6829 7.97841 16.5148L1.43354 8.40808C1.32794 8.27727 1.42104 8.08244 1.58916 8.08244Z" />
<path d="M19.0622 8.08244H14.6873C14.5967 8.08244 14.5175 8.14327 14.4941 8.23073L12.3241 16.3375C12.2683 16.5462 12.5372 16.6829 12.673 16.5148L19.2178 8.40808C19.3234 8.27727 19.2303 8.08244 19.0622 8.08244Z" />
<path d="M10.1525 3.19672C10.2295 3.06339 10.4219 3.06339 10.4989 3.19672L12.2863 6.29256C12.3633 6.42589 12.2671 6.59256 12.1131 6.59256H8.53834C8.38438 6.59256 8.28815 6.42589 8.36513 6.29256L10.1525 3.19672Z" />
<path d="M13.9628 5.61751C13.8858 5.75085 13.6934 5.75085 13.6164 5.61751L11.829 2.52168C11.752 2.38835 11.8483 2.22168 12.0022 2.22168L15.577 2.22168C15.7309 2.22168 15.8272 2.38835 15.7502 2.52168L13.9628 5.61751Z" />
<path d="M6.66625 5.64563C6.74323 5.77897 6.93568 5.77897 7.01266 5.64563L8.80004 2.5498C8.87702 2.41647 8.78079 2.2498 8.62683 2.2498L5.05207 2.2498C4.89811 2.2498 4.80189 2.41647 4.87887 2.5498L6.66625 5.64563Z" />
<path d="M17.0887 3.19672C17.1656 3.06339 17.3581 3.06339 17.4351 3.19672L19.2224 6.29256C19.2994 6.42589 19.2032 6.59256 19.0492 6.59256H15.4745C15.3205 6.59256 15.2243 6.42589 15.3013 6.29256L17.0887 3.19672Z" />
<path d="M3.53533 3.20332C3.45835 3.06998 3.2659 3.06998 3.18892 3.20332L1.40154 6.29915C1.32456 6.43248 1.42079 6.59915 1.57475 6.59915H5.14951C5.30347 6.59915 5.39969 6.43248 5.32271 6.29915L3.53533 3.20332Z" />
blade;
    }

    public function micro(): string
    {
        return <<<'blade'
<path d="M6.45127 6.62053H10.2015C10.3331 6.62053 10.4288 6.74544 10.3946 6.87252L8.51951 13.8372C8.46638 14.0346 8.18639 14.0346 8.13326 13.8372L6.25814 6.87252C6.22393 6.74544 6.31966 6.62053 6.45127 6.62053Z" />
<path d="M1.58384 6.62053H4.48832C4.57881 6.62053 4.65803 6.68128 4.68149 6.76868L6.33373 12.9243C6.39098 13.1376 6.11121 13.2726 5.97982 13.0951L1.42309 6.93952C1.32538 6.80752 1.41961 6.62053 1.58384 6.62053Z" />
<path d="M15.0753 6.62053H12.1708C12.0803 6.62053 12.0011 6.68128 11.9776 6.76868L10.3254 12.9243C10.2682 13.1376 10.5479 13.2726 10.6793 13.0951L15.236 6.93952C15.3338 6.80752 15.2395 6.62053 15.0753 6.62053Z" />
<path d="M8.15111 2.93201C8.2274 2.79528 8.42411 2.79528 8.50041 2.93201L9.55714 4.8258C9.63153 4.95911 9.53515 5.12325 9.38249 5.12325H7.26902C7.11636 5.12325 7.01998 4.95911 7.09437 4.8258L8.15111 2.93201Z" />
<path d="M2.43155 2.93201C2.50785 2.79528 2.70456 2.79528 2.78085 2.93201L3.83759 4.8258C3.91197 4.95911 3.8156 5.12325 3.66294 5.12325H1.54947C1.39681 5.12325 1.30043 4.95911 1.37482 4.8258L2.43155 2.93201Z" />
<path d="M14.2244 2.94033C14.1481 2.8036 13.9514 2.8036 13.8751 2.94033L12.8184 4.83412C12.744 4.96743 12.8403 5.13157 12.993 5.13157H15.1065C15.2591 5.13157 15.3555 4.96743 15.2811 4.83412L14.2244 2.94033Z" />
<path d="M5.63685 4.36217C5.56056 4.4989 5.36385 4.4989 5.28755 4.36217L4.23082 2.46838C4.15643 2.33507 4.25281 2.17093 4.40547 2.17093L6.51893 2.17093C6.6716 2.17093 6.76797 2.33507 6.69358 2.46838L5.63685 4.36217Z" />
<path d="M11.0191 4.37049C11.0954 4.50722 11.2921 4.50722 11.3684 4.37049L12.4251 2.4767C12.4995 2.34339 12.4031 2.17925 12.2505 2.17925L10.137 2.17925C9.98435 2.17925 9.88797 2.34339 9.96236 2.4767L11.0191 4.37049Z" />
blade;
    }
}
