<?php
/**TODO: when using php 8.1 we could leverage native enums*/
namespace App\Enum;

use MyCLabs\Enum\Enum;

class SortOptionsUser extends Enum
{
    const NICK = 'nick';
}