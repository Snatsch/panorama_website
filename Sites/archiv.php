<?php
	$archiveFolders = PanoramaWebsite\PanoramaManager::getArchiveFolders(ARCHIVE_DIR);
	?>
	<select id="archiveFolder" class="form-control">
	
	<?php
	foreach($archiveFolders as $folder){
	?>
		<option><?php echo $folder; ?></option>
	<?php
	}
	?>
	
	</select>