<?php

namespace Vluzrmos\SlackApi\Contracts;

interface SlackUser
{
    public function getPresence($user);
    public function info($user);
    public function lists($cursor = "", $limit = 20, $presence = true);
    public function all();
    public function setActive();
    public function setPresence($presence);
}
