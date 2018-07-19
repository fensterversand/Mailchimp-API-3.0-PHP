<?php

namespace MailchimpAPI\Lists\Members;

use MailchimpAPI\Lists\Members;

/**
 * Class Goals
 * @package MailchimpAPI\Lists\Members
 */
class Goals extends Members
{
    /**
     * the url component for this endpoint
     */
    const URL_COMPONENT = '/goals/';

    /**
     * Goals constructor.
     * @param $apikey
     * @param $parent_resource
     * @param $grandparent_resource
     * @param $class_input
     * @throws \MailchimpAPI\MailchimpException
     */
    public function __construct(
        $apikey,
        $parent_resource,
        $grandparent_resource,
        $class_input
    ) {
        parent::__construct($apikey, $parent_resource, $grandparent_resource);
        if ($class_input) {
            $this->request->appendToEndpoint(self::URL_COMPONENT . $class_input);
        } else {
            $this->request->appendToEndpoint(self::URL_COMPONENT);
        }
    }
}