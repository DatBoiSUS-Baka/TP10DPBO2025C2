<?php
require_once 'views/template/header.php';
?>

<h2 class="text-xl mb-4">Anime List</h2>
<a href="index.php?entity=anime&action=add" class="bg-green-500 text-white px-4 py-2 rounded mb-4 inline-block">Add Anime</a>
<table class="w-full border">
    <tr class="bg-gray-200">
        <th class="border p-2">Name</th>
        <th class="border p-2">Genre</th>
        <th class="border p-2">Actions</th>
    </tr>
    <?php foreach($animeList as $anime): ?>
    <tr>
        <td class="border p-2"><?php echo $anime['nama_anime'] ?></td>
        <td class="border p-2"><?php echo $anime['genre_anime'] ?></td>
        <td class="border p-2">
            <a href="index.php?entity=anime&action=edit&id=<?php echo $anime['id']; ?>" class="text-blue-500">Edit</a>
            <a href="index.php?entity=anime&action=delete&id=<?php echo $anime['id']; ?>" class="text-red-500 ml-2" onclick="return confirm('Are you sure?');">Delete</a>
        </td>
        
    </tr>
    
    <?php endforeach; ?>
</table>

<?php
require_once 'view/template/footer.php';
?>