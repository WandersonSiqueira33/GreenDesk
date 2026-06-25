<?php

namespace App\Enums;

enum UserRole: int
{
    case ADMIN = 0;
    case SUPPORT = 1;
    case CLIENT = 2;
}