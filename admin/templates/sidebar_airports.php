<?php if(!defined('IN_PHPVMS') && IN_PHPVMS !== true) { die(); } ?>
<h3>Tasks</h3>
<ul class="filetree treeview-famfamfam">
	<li><span class="file">
		<a id="dialog" class="jqModal" href="<?php echo SITE_URL?>/admin/action.php/operations/addairport">Add a new Airport</a>
	</span>	</li>

	<li><span class="file">
		<a href="<?php echo SITE_URL?>/admin/action.php/import/exportairports">Export airports</a>
	</span></li>
    
    	<li><span class="file">
		<a href="<?php echo SITE_URL?>/admin/index.php/import/importairports">Import airports</a>
	</span></li>
	
</ul>
<h3>Help</h3>
<p>Add the airports that your VA operates from here. 
	Entering the latitude and longitude will allow it to be placed on Google Maps. 
	You will also need to enter airports before you create schedules with them.</p>
