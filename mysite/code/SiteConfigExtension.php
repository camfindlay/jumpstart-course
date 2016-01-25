<?php
class SiteConfigExtension extends DataExtension {

    private static $db = array(
        'Facebook' => 'Varchar(255)',
        'Twitter' => 'Varchar(255)',
        'Phone' => 'Varchar(15)',
        'Email' => 'Varchar(255)',
    );

    public function updateCMSFields(FieldList $fields) {

        $fields->addFieldToTab(
            'Root.SocialMedia',
            TextField::create('Facebook', 'Facebook page link')
        );

        $fields->addFieldToTab(
            'Root.SocialMedia',
            TextField::create('Twitter', 'Twitter username')
                ->setDescription('e.g. @twittername')
        );

        $fields->addFieldToTab(
            'Root.Contact',
            PhoneNumberField::create('Phone')
        );

        $fields->addFieldToTab(
            'Root.Contact',
            EmailField::create('Email')
        );

    }

}