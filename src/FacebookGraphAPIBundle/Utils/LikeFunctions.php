<?php
/**
 * @author Dmitry Shumytskyi <d.shumytskyi@gmail.com>
 */

namespace FacebookGraphAPIBundle\Utils;


use FacebookGraphAPIBundle\Utils\Abstracts\FacebookAbstract;

class LikeFunctions extends FacebookAbstract
{
    /**
     * get list of likes
     *
     * @param $schema
     */
    public function getLikes($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * add a new like
     *
     * @param $schema
     */
    public function addLike($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

    /**
     * delete a like the user has added
     *
     * @param $schema
     */
    public function deleteLike($schema)
    {
        $this->setResponse(
            $this->sendRequest($schema, $this->prepareQuery($schema)),
            $schema
        );
    }

}