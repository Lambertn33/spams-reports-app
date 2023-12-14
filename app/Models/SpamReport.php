<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SpamReport extends Model
{
    use HasFactory;

    const SOURCE = 'REPORT';

    const REPORT_TYPES = ['SPAM', 'VIOLATES_POLICIES', 'INFRINGES_PROPERTY'];

    const REPORT_STATES = ['OPEN', 'CLOSED'];

    const OPEN = self::REPORT_STATES[0];

    const CLOSED = self::REPORT_STATES[1];

    const REPORT_REFERENCE_TYPES = ['POST', 'ARTICLE', 'REPLY'];

    protected $fillable = [
        'id', 'source', 'sourceIdentityId', 'referenceId', 'state', 'reportType', 'message', 'referenceResourceId', 'referenceResourceType', 'isBlocked'
    ];

    protected $casts = [
        'id' => 'string',
        'referenceId' => 'string',
        'referenceResourceId' => 'string',
        'sourceIdentityId' => 'string'
    ];
}
