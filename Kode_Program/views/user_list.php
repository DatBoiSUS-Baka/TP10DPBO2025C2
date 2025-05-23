<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">User List</h2>
<a href="index.php?entity=user&action=add" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">Add User</a>
<table class="w-full border">
    <tr class="border p-2">
        <th class="border p-2">Nama</th>
        <th class="border p-2">Anime</th>
        <th class="border p-2">Status</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach($userList as $users): ?>
    <tr>
        <td class="border p-2"><?php echo $user['username']; ?></td>
        <td class="border p-2"><?php echo $user['nama_anime']; ?></td>
        <td class="border p-2"><?php echo $user['status']; ?></td>
        <td class="border p-2">
            <a href="index.php?entity=user&action=edit&id=<?php echo $user['id'] ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=user&action=delete&id=<?php echo $user['id'] ?>" class="text-red-500" onclick="return confirm('Are you sure?')">Edit</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<?php
require_once 'views/template/footer.php';
?>