<?php

namespace MailchimpTests\EcommerceStores\Orders;

use MailchimpAPI\EcommerceStores;
use MailchimpAPI\EcommerceStores\Orders;
use MailchimpAPI\EcommerceStores\Orders\Lines;
use MailchimpTests\MailChimpTestCase;

class LinesTest extends MailChimpTestCase
{
    public function testCollectionUrl()
    {
        $this->endpointUrlBuildTest(
            EcommerceStores::URL_COMPONENT . 1 . Orders::URL_COMPONENT . 1 . Lines::URL_COMPONENT,
            $this->mailchimp->ecommStores(1)->orders(1)->lines(),
            "The Lines collection endpoint should be constructed correctly"
        );
    }

    public function testInstanceUrl()
    {
        $this->endpointUrlBuildTest(
            EcommerceStores::URL_COMPONENT . 1 . Orders::URL_COMPONENT . 1 . Lines::URL_COMPONENT . 1,
            $this->mailchimp->ecommStores(1)->orders(1)->lines(1),
            "The Lines instance endpoint should be constructed correctly"
        );
    }
}
