<?php /* Template Name: Ahmed */
$postTitleError='';
if(isset($_POST['submitted'])&& isset($_POST['post_nonce_field'])&& wp_verify_nonce($_POST['post_nonce_field'],'post_nonce')){
	if(trim($_POST['postTitle']==='')){
		$postTitleError='please enter a title.';
		$hasError=true;
	}else{
		$postTitle=trim($_POST['postTitle']);
	}
	
	$post_information =array(
	'post_title'=>esc_attr(strip_tags($_POST['postTitle'])),
	'post_content'=>esc_attr(strip_tags($_POST['postContent'])),
	'post_type'=>'post',
	'post_status'=>'pending'
		
	);
	$post_id=wp_insert_post($post_information);
	if($post_id)
	{
		add_post_meta($post_id,'mymeta',$_POST['metaData'],true);
		exit;
	}
}
?>

<?php get_header(); ?>


	<!-- #primary BEGIN -->
	<div id="primary">

		<form action="" id="primaryPostForm" method="POST">

			<fieldset>
<h3>Mon formulaire pour créer un post et ses metadata</h3>
				<label for="postTitle"><?php _e('Post\'s name:', 'framework') ?></label>

				<input type="text" name="postTitle" id="postTitle" value="<?php if(isset($_POST['postTitle'])) echo $_POST['postTitle'];?>" class="required" />

			</fieldset>

			<?php if($postTitleError != '') { ?>
				<span class="error"><?php echo $postTitleError; ?></span>
				<div class="clearfix"></div>
			<?php } ?>

			<fieldset>
						
				<label for="postContent"><?php _e('Post\'s content:', 'framework') ?></label>

				<input type="text" name="postContent" id="postContent" value="<?php if(isset($_POST['postContent'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['postContent']); } else { echo $_POST['postContent']; } } ?>">

			</fieldset>
			<fieldset>
						
				<label for="metaData"><?php _e('Metadata :mymeta', 'framework') ?></label>

				<input type="text" name="metaData" id="metaData" value="<?php if(isset($_POST['metaData'])) { if(function_exists('stripslashes')) { echo stripslashes($_POST['metaData']); } else { echo $_POST['metaData']; } } ?>">

			</fieldset>

			<fieldset>
				
				<?php wp_nonce_field('post_nonce', 'post_nonce_field'); ?>

				<input type="hidden" name="submitted" id="submitted" value="true" />
				<button type="submit"><?php _e('Submit', 'framework') ?></button>

			</fieldset>

		</form>

	</div><!-- #primary END -->


<?php get_footer(); ?>
