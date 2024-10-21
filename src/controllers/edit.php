<?php
      
      //necesito query
      $id=$_REQUEST['id'];
      //sacar datos del libro id
      //$db=connectMysql($dsn,$dbuser,$dbpassword);
      // pot ser necessitem tb una funció select($db,$table,..)
      $book=query($db,"SELECT * FROM books WHERE id={$id} LIMIT 1");
      $book=$book[0];
      require VIEWS.'/edit.view.php';