<?php

namespace Kunnu\Dropbox\Models\Teams;

use Kunnu\Dropbox\Models\BaseModel;

class MemberProfile extends BaseModel
{
    /**
     * Create a new MemberProfile instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);
    }

}
