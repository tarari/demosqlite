    <?php include 'partials/header.view.php'; ?>

    <main class="py-4">
        <div class="m-2 flex flex-col py-4 bg-gray-300">
            <h2 class="text-2xl underline">Admin books</h2>
            <div class="flex justify-content w-2/3">
                <table class="table-fixed border border-red-800">
                    <thead>
                        <th>Title</th><th>Action</th>
                    </thead>
                    <?php foreach($books as $book): ?>
                        <tr class="p-2 font-mono text-sm border border-red-700">
                            <td ><?= $book['title']; ?></td>
                            <td><a href="edit?id=<?= $book['id'];?>">Edit</a></td>
                            <td><a href="delete?id=<?= $book['id'];?>">Delete</a></td>
                        </tr>
                    <?php endforeach; ?>

                </table>
            </div>
        </div>
        
    </main>
    <?php include 'partials/footer.view.php'; ?>
