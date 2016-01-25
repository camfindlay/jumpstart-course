<?php
class MemberExtension extends DataExtension {
    private static $db = array(
        'Facebook' => 'Varchar(255)',
        'Twitter' => 'Varchar(255)',
        'Phone' => 'Varchar(15)',
    );
    private static $has_one = array(
        'Photo' => 'Image',
        'Department' => 'Department',
        'Role' => 'Role',
    );
    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab(
            'Root.StaffInformation',
            TextField::create('Facebook', 'Facebook page link')
        );
        $fields->addFieldToTab(
            'Root.StaffInformation',
            TextField::create('Twitter', 'Twitter username')
                ->setDescription('e.g. @twittername')
        );
        $fields->addFieldToTab(
            'Root.StaffInformation',
            PhoneNumberField::create('Phone')
        );
        $fields->addFieldToTab(
            'Root.StaffInformation',
            UploadField::create('Photo')
        );
        $fields->addFieldToTab(
            'Root.StaffInformation',
            DropdownField::create(
                'RoleID',
                'Role',
                Role::get()->map('ID', 'Title')
            )->setEmptyString('(Select)')
        );
        $fields->addFieldToTab(
            'Root.StaffInformation',
            DropdownField::create(
                'DepartmentID',
                'Department',
                Department::get()->map('ID', 'Title')
            )->setEmptyString('(Select)')
        );
    }
}