<?php
require_once('include/Dashlets/Dashlet.php');
class poer_QCDashlet extends Dashlet {

  public function __construct($id,$options=null){
    $this->title = 'Create Activities';
    parent::Dashlet($id,$options);
  }

  public function display(){

    $html = <<<EOHTML

<a href="index.php?module=Meetings&amp;action=EditView&amp;return_module=Home&amp;return_action=index"><img src="themes/Sugar5/images/CreateMeetings.gif" border="0" align="absmiddle" alt="Schedule Meeting">&nbsp;<span>Schedule Meeting</span></a>

<a href="index.php?module=Calls&amp;action=EditView&amp;return_module=Home&amp;return_action=index"><img src="themes/Sugar5/images/CreateCalls.gif?v=JDlno2Au_SRK9IKxOVhMHg" border="0" align="absmiddle" alt="Schedule Call">&nbsp;<span>Schedule Call</span></a>

<a href="index.php?module=Tasks&amp;action=EditView&amp;return_module=Home&amp;return_action=index"><img src="themes/Sugar5/images/CreateTasks.gif?v=JDlno2Au_SRK9IKxOVhMHg" border="0" align="absmiddle" alt="Create Task">&nbsp;<span>Create Task</span></a>

EOHTML;
    return parent::display() . $html;
  }
}

