<?php include 'partials/header.view.php'; ?>

    <div class="py-4 m-2 bg-gray-300">
        <div class="container mx-auto px-4">
            <h3 class="text-xl"><?= $book['title']?> Update</h3>
            <form class="m-2 grid grid-cols-2 gap-2 justify-center" 
            action="update-book?id=<?=$book['id']?>" method="POST">
                <div>
                    <label class="px-2" for="title">Title</label>
                </div>
                <div>
                    <input class="px-2 text-sm" type="text" name="title" placeholder="title" 
                    value="<?=$book['title']?>">
                </div>
                <div>
                    <label class="px-2" for="author">Author</label>
                </div>
                <div>   
                <input class="px-2 text-sm" type="text" name="author" placeholder="Author"
                    value="<?=$book['author']?>">
                </div>
                <div>
                    <label class="px-2" for="year">Year</label>
                </div>
                <div>   
                <input class="px-2 text-sm" type="number" name="year" placeholder="Year"
                    value="<?=$book['year']?>">
                </div>
                <div class="col-span-2 mx-auto">
                    <button class="bg-red-600 text-white px-3 py-1 rounded" type="submit">Update</button>
                </div>
        </form>
        </div>
    </div>
<?php include 'partials/footer.view.php';?>   