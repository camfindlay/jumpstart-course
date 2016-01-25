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
        'Report' => 'File',
        'Department' => 'Department',
        'Role' => 'Role',
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

        $report = UploadField::create('Report')
            ->setFolderName('Reports')
            ->setDescription('Only PDF can be uploaded.');
        $report->getValidator()->setAllowedExtensions(array('pdf'));
        $fields->addFieldToTab(
            'Root.Main',
            $report,
            'Content'
        );

        $fields->addFieldToTab(
            'Root.Main',
            DropdownField::create(
                'RoleID',
                'Role',
                Role::get()->map('ID', 'Title')
            )->setEmptyString('(Select)'),
            'Content'
        );

        $fields->addFieldToTab(
            'Root.Main',
            DropdownField::create(
                'DepartmentID',
                'Department',
                Department::get()->map('ID', 'Title')
            )->setEmptyString('(Select)'),
            'Content'
        );

        return $fields;
    }

}

class StaffPage_Controller extends Page_Controller {}