<?php
class StaffHolder extends Page {

    private static $description = 'Staff listing';

    private static $allowed_children = array('StaffPage');

}

class StaffHolder_Controller extends Page_Controller { }