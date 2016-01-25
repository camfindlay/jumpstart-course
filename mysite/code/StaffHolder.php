<?php
class StaffHolder extends Page {

    private static $description = 'Staff listing';

    private static $allowed_children = array('StaffPage');

    public function getCMSFields(){
        $fields = parent::getCMSFields();

        $fields->addFieldToTab(
            'Root.Departments',
            GridField::create(
                'Department',
                'Departments',
                Department::get()->sort('Title'),
                GridFieldConfig_RecordEditor::create()
            )
        );

        $fields->addFieldToTab(
            'Root.Roles',
            GridField::create(
                'Role',
                'Roles',
                Role::get()->sort('Title'),
                GridFieldConfig_RecordEditor::create()
            )
        );

        return $fields;
    }

}

class StaffHolder_Controller extends Page_Controller { }