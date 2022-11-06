<table class="table table-stripped table-condensed">
    <tr>
        <th>Id</th><th>Title</th><th>Content</th>
        <?php foreach($objave as $post): ?>
            <tr>
                <td><?= $post["id"] ?></td>
                <td><?= $post["title"] ?></td>
                <td><?= $post["content"] ?></td>
            </tr>
        <?php endforeach; ?>
    </tr>
</table>