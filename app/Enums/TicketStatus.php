<?php

namespace App\Enums;

enum TicketStatus: int 
{
    case NEW = 0;
    case ASSIGNED = 1;
    case IN_PROGRESS = 2;
    case RESOLVED = 3;
    case CLOSED = 4;
}