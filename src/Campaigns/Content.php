<?php

namespace MailchimpAPI\Campaigns;

use MailchimpAPI\Campaigns;

/**
 * Class Content
 * @package MailchimpAPI\Campaigns
 */
class Content extends Campaigns
{
    /**
     * Content constructor.
     * @param $apikey
     * @param $parent_input
     * @throws \MailchimpAPI\MailchimpException
     */
    public function __construct($apikey, $parent_input)
    {
        parent::__construct($apikey, $parent_input);
        $this->request->appendToEndpoint('/content/');
    }
}