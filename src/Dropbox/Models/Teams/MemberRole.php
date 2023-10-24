<?php

namespace Kunnu\Dropbox\Models\Teams;

use Kunnu\Dropbox\Models\BaseModel;

class MemberRole extends BaseModel
{
    /**
     * Create a new MemberRole instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

}
