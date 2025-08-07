<?php

namespace App\Enums;

enum DomainType: string
{
    case JOOMLA3 = 'joomla3';
    case JOOMLA4 = 'joomla4';
    case JOOMLA5 = 'joomla5';
    case WORDPRESS = 'wordpress';
    case LARAVEL = 'laravel';
    case BOTBLE = 'botble';
    case LANDING = 'landing';
    case CUSTOM = 'custom';
}
