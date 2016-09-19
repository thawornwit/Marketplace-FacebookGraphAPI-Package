<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;

use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class UserFunctions extends FacebookAbstract
{
    /**
     * validate token
     *
     * @param $schema
     */
    public function validateUserToken($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * extend user token
     *
     * @param $schema
     */
    public function extendUserToken($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * get user albums
     *
     * @param $schema
     */
    public function getUserAlbums($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * get users friends
     *
     * @param $schema
     */
    public function getUsersFriends($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * get users liked pages
     *
     * @param $schema
     */
    public function getUsersLikedPages($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

}