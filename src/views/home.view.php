<?php include 'partials/header.view.php'; ?>

    <div class="py-4 m-2 bg-gray-300">
        <ul>
        <?php foreach($books as $book):?>
            <li class="text-red-600 p-2">
                <?=$book['title']?>&nbsp;<span class="text-black text-sm">by&nbsp;   
                </span><?=$book['author']?>
                <p class="text-xs font-mono text-gray-500">Comment</p>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
<?php include 'partials/footer.view.php';?>   