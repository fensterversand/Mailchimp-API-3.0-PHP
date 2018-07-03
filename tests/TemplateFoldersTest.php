<?php

namespace MailchimpTests;

use MailchimpAPI\TemplateFolders;

class TemplateFoldersTest extends MailChimpTestCase
{
    public function testTemplateFoldersCollectionUrl()
    {
        $this->endpointUrlBuildTest(
            TemplateFolders::URL_COMPONENT,
            $this->mailchimp->templateFolders(),
            "The Template Folders collection endpoint should be constructed correctly"
        );
    }

    public function testTemplateFoldersInstanceUrl()
    {
        $this->endpointUrlBuildTest(
            TemplateFolders::URL_COMPONENT . 1,
            $this->mailchimp->templateFolders(1),
            "The Template Folders instance endpoint should be constructed correctly"
        );
    }
}
