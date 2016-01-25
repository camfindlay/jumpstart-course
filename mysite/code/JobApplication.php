<?php
class JobApplication extends DataObject {

    private static $db = array(
        'Name' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(255)',
        'Application' => 'Text',
        'Status' => 'Enum("Applied, Short list, Unsuccessful, Hired","Applied")',
    );

    private static $has_one = array(
        'Job' => 'Job',
    );

    private static $summary_fields = array(
        'Job.Reference' => 'Job Reference #',
        'Name' => 'Full name',
        'Email' => 'Email',
        'Phone' => 'Phone',
        'Status' => 'Status',
    );

    public function canView($member = null) {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canEdit($member = null) {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canDelete($member = null) {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

    public function canCreate($member = null) {
        return Permission::check('CMS_ACCESS_JobAdmin');
    }

}