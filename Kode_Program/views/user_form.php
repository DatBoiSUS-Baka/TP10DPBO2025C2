<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4"><?php echo isset($user) ? 'Edit User' : 'Add User'; ?></h2>
<form action="index.php?entity=user&action=<?php echo isset($user) ? 'update&id=' . $user['id'] : 'save'; ?>" method="POST">
    <div>
        <lable class="block">Username:</lable>
        <input type="text" name="username" value="<?php echo isset($user) ? $user['username'] : ''; ?>" class="border p-2-full" required>
    </div>
    <div>
        <lable class="block">Anime:</lable>
        <select name="anime_id" class="border p-2 w-full" required>
            <?php foreach($animes as $anime): ?>
            <option value="<?php echo $anime['id']; ?>" <?php echo isset($user) && $user['anime_id'] == $anime['id'] ? 'selected' : ''; ?>><?= $anime['nama_anime']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
    <div>
        <lable class="block">Status:</lable>
        <select name="status" class="border p-2 w-full" required>
            <?php foreach($lists as $list): ?>
            <option value="<?php echo $list['id']; ?>" <?php echo isset($user) && $user['anime_id'] == $anime['id'] ? 'selected' : ''; ?>><?= $anime['nama_anime']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</form>