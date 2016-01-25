<?php
class JobPage extends Page {

    private static $description = "Lists available jobs";

}

class JobPage_Controller extends Page_Controller {

    public function AvailableJobs(){

        return Job::get()
            ->filter(array('Status' => 'Published'))
            ->exclude(array('ClosingDate:LessThan' => date('Y-m-d')))
            ->sort('ClosingDate ASC');
        }

}