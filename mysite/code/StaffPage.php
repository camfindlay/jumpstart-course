<?php
class StaffPage extends Page {

    private static $description = "A staff member";

    private static $can_be_root = false;

    private static $db = array(
        'Phone' => 'Varchar(11)',
        'Email' => 'Varchar(255)',
    );

    private static $has_one = array(
        'Photo' => 'Image',
    );

    public function getCMSFields(){

        $fields = parent::getCMSFields();

        $fields->addFieldToTab(
            'Root.Main',
            PhoneNumberField::create('Phone'),
            'Content'
        );

        $fields->addFieldToTab(
            'Root.Main',
            EmailField::create('Email'),
            'Content'
        );

        $fields->addFieldToTab(
            'Root.Main',
            UploadField::create('Photo'),
            'Content'
        );

        return $fields;
    }

}

class StaffPage_Controller extends Page_Controller {}