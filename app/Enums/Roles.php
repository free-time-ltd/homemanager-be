<?php

namespace App\Enums;

enum Roles: string
{
    case ADMIN = 'admin';
    case MANAGER = 'manager';
    case TENANT = 'tenant';
    case GUEST = 'guest';
}
