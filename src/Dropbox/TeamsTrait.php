<?php

namespace Kunnu\Dropbox;

use Kunnu\Dropbox\Models\Teams\MemberInfo;

/**
 * Dropbox
 */
trait TeamsTrait
{

    /**
     * Get team Member Info
     *
     * @link https://www.dropbox.com/developers/documentation/http/teams#team-members-get_info
     *
     * @param string $team_member_id
     *
     * @return \Kunnu\Dropbox\Models\Teams\MemberInfo
     * @throws \Kunnu\Dropbox\Exceptions\DropboxClientException
     */
    public function getTeamMemberInfo($team_member_id)
    {
        $response = $this->postToAPI('/team/members/get_info_v2', ["members"=> [
            ['.tag' => 'team_member_id', 'team_member_id' => $team_member_id]

        ]]);
        $body = $response->getDecodedBody();

        return new MemberInfo($body);
    }


    /**
     * Lists members of a team
     * @link https://www.dropbox.com/developers/documentation/http/teams#team-members-list
     *
     * @return \Kunnu\Dropbox\Models\Teams\MemberInfo
     * @throws \Kunnu\Dropbox\Exceptions\DropboxClientException
     */
    public function getTeamMembers()
    {
        $response = $this->postToAPI('/team/members/list_v2',[]);
        $body = $response->getDecodedBody();

        return new MemberInfo($body);
    }


}


