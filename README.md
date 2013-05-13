SugarCRM_CreateActivitiesDashlet
================================

Create a SugarCRM Dashlet with links to Schedule Meeting, Schedule Call and Create Task.

Useful for CE systems or anyone using the "classic" theme as a means to get to these create screens in a single click.

Installation Instructions
-------------------------
1. Download as a zip or tar.gz from GitHub.
2. drop it into your SugarCRM root directory and extract it.
3. Verify that the directory hierarchy is /custom/modules/Home/Dashlets/poer_QCDashlet/
4. Log in to SugarCRM as an administrator. Visit Admin -> Repair -> Rebuild Sugar Dashlets
5. Users will now find the dashlet available in the Add Dashlets dialog under the "Tools" tab

To-Do List
----------

* Language Support in meta information and poer_QCDashlet::title param
* Language Support in the links/images
* SugarCRM-style icon/image lookups instead of hard-coded img src attributes
* ACL checks
* use a Smarty tpl instead of display logic
* include Module Loader manifest and build (zip file)
