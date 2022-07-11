<?php
/**TODO: when using php 8.1 we could leverage native enums*/
namespace App\Enum;

use MyCLabs\Enum\Enum;

class UserType extends Enum
{
    const ROLE_USER = 'ROLE_USER';
    const ROLE_ADMIN = 'ROLE_ADMIN';
}