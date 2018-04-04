<h3>Credits</h3>
<br />
<center>
<?php
if(PilotGroups::group_has_perm(Auth::$usergroups, MODERATE_PIREPS))
{
?>
<a href="<?php echo SITE_URL?>/admin/index.php/Credits">Credits Main</a><br />
<a href="<?php echo SITE_URL?>/admin/index.php/Credits/create">Create New Credit</a><br />
<?php
}
?>
</center>
<br />