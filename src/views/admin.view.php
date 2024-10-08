    <?php include 'partials/header.view.php'; ?>

    <main class="py-4">
    <div class="container mx-auto p-4">
    <div class="overflow-x-auto">
            <h2 class="text-2xl underline">Admin books</h2>
            <div class="flex justify-content w-2/3">
                <table class="min-w-full bg-white border border-gray-200">
                    <thead class="bg-gray-100 border-b">
                        <th class="p-2 font-mono text-sm border border-red-700">Title</th>
                        <th colspan="2" class="p-2  font-mono text-sm border border-red-700">Action</th>
                    </thead>
                    <tbody>
                    <?php foreach($books as $book): ?>
                        <tr class="border-b">
                            <td  class="px-4 py-2"><?= $book['title']; ?></td>
                            <td  class="px-4 py-2"><a href="edit?id=<?= $book['id'];?>"><span class="text-xs text-green-400">Edit</span></a></td>
                            <td  class="px-4 py-2"><a href="delete?id=<?= $book['id'];?>"><span class="text-xs text-red-400">Delete</span></a></td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </main>
    <?php include 'partials/footer.view.php'; ?>
