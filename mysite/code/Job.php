<?php
class Job extends DataObject {

    private static $db = array(
        'Reference' => 'Varchar(5)',
        'Position' => 'Varchar(255)',
        'ClosingDate' => 'Date',
        'Content' => 'Text',
        'Status' => 'Enum("Draft, Published, Closed","Draft")',
    );

    private static $summary_fields = array(
        'Reference' => 'Reference #',
        'Position' => 'Job Position',
        'Status' => 'Status',
    );

    public function canView($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canEdit($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canDelete($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }

    public function canCreate($member = null) {
        return Permission::check('CMS_ACCESS_CMSMain');
    }
}