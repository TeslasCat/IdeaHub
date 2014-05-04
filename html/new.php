<?php
	define('TITLE', 'New project');
	require('../files/header.php');
?>

        <form method="post" >
        	<div class='field'>
        		<label for="name">Project name</label>
        		<input type="text" id="name" name="name" placeholder="Example project"/>
        	</div>
        	<hr />
        	<div class='field'>
        		<label for="description" class='optional'>Description</label>
        		<textarea type="text" id="description" name="description" placeholder="Project description"></textarea>
        	</div>
        	<div class='field'>
        		<label for="tags">Tags</label>
        		<div type="text" id="tags" name="tags" data-tags-input-name="tag" data-edit-on-delete="false" placeholder="Tags"></div>
        	</div>
        	<hr />
        	<div class='field field-actions'>
        		<label></label>
        		<a href='#' class='button'>Post Idea</a>
        	</div>
		</form>

<?php require('../files/footer.php'); ?>