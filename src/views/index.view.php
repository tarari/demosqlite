
    <?php
    //Associative arrays
        $books=[
            [
                'author'=>'John Fitti',
                'title'=>'Clean code',
                'year'=>1998
            ],
            [
                'author'=>'John Paldi',
                'title'=>'Mess code',
                'year'=>2005
            ],
            [
                'author'=>'Peter Pank',
                'title'=>'Node jes de comer',
                'year'=>2024
            ]
            
        ];
        function filter($items,$key,$value){
            $filtered=[];
            foreach($items as $item){
                if($item[$key]===$value){
                    $filtered[]=$item;
                }
            }
            return $filtered;
        }
        /*
        function filterByAuthor($books,$author){
            $filteredBooks=[];
            foreach($books as $book){
                if($book['author']===$author){
                    $filteredBooks[]=$book;
                }
            }
            return $filteredBooks;
        }
        */
        //$items=filter($books,'title','Clean code');
        $items=$books;
    ?>
    <?php include 'partials/header.view.php'; ?>

    <div class="py-4 m-2 bg-gray-300">
        <ul>
        <?php foreach($items as $book):?>
            <li class="text-red-600 p-2">
                <?=$book['title']?>&nbsp;<span class="text-black text-sm">by&nbsp;   
                </span><?=$book['author']?>
            </li>
        <?php endforeach;?>
        </ul>
    </div>
    <hr>
    <footer class="bg-blue-400 text-white">
        <a href="add.php">Add book</a>
    </footer>
</body>
</html>