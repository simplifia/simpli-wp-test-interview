<div class="wrap">
    <h1>Créer un nouveau post</h1>
    <form method="POST">
        <table class="form-table">
            <tr>
                <th><label for="post_title">Titre du post</label></th>
                <td><input type="text" name="post_title" id="post_title" required /></td>
            </tr>
            <tr>
                <th><label for="post_content">Contenu du post</label></th>
                <td>
                    <textarea name="post_content" id="post_content" rows="5" cols="50"></textarea>
                </td>
            </tr>
            <tr>
                <th><label for="post_mymeta">Meta (mymeta)</label></th>
                <td>
                    <input type="text" name="post_mymeta" id="post_mymeta" />
                </td>
            </tr>
        </table>
        <input type="submit" name="simpli_test_create_post" class="button button-primary" value="Créer le post" />
    </form>
</div>
