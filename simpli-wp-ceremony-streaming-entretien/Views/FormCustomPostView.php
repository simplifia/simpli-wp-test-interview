<div class="wrap">
    <h1>Mon formulaire pour créer un post et ses metadata</h1>
    <form action="" method="POST" style="width: 400px;">
        <div class="form-field">
            <label for="post-name">Post Name</label>
            <input id="post-name" name="post_name" type="text">
        </div>
        <div class="form-field">
            <label for="post-content">Post Content</label>
            <input id="post-content" name="post_content" type="text">
        </div>
        <div class="form-field">
            <label for="post-name">Metadata : mymeta</label>
            <input id="post-name" name="post_meta" type="text">
        </div>

        <?php submit_button('Submit') ?>
    </form>
</div>