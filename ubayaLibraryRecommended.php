<?php
    $data = array(
        array("id" => "001", "book_name" => "Kalkulus", "description" => "Buku yang berisikan tentang berbagai rumus matematika kalkulus","author" => "JK. Spencer", "rating" => 4.5, "image_url" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1414911279i/23489855.jpg"),
        array("id" => "003", "book_name" => "Statistika", "description" => "Buku tentang tips and tricks belajar statistika dengan baik dan tepat", "author" => "Drs. Sutrisno Hadi", "rating" => 4.7, "image_url" => "https://pustakapelajar.co.id/wp/wp-content/uploads/2017/12/STATISTIK-EDISI-REVISI.jpg"),
        array("id" => "004", "book_name" => "Algoritma dan Pemrograman", "description" => "Buku ini berisikan materi dasar dari algoritma dan pemrograman", "author" => "Linardi Munir", "rating" => 4.8, "image_url" => "https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/16.01.169.jpg"),
        array("id" => "008", "book_name" => "Psikologi dalam Pendidikan", "description" => "Buku yang memiliki berbagai macam pengetahuan tentang psikologi dalam pendidikan", "author" => "Furtasan Ali Yusuf", "rating" => 4.7, "image_url" => "https://www.rajagrafindo.co.id/wp-content/uploads/2022/06/CD-Psikologi-Pendidikan-flatten.jpg")
    );

    if(isset($_GET["id"])){
        foreach ($data as $key => $value) {
            if($value["id"] == $_GET["id"]){
                $data = $value;
            }
        }

        echo json_encode($data);
    }
    else{
        echo json_encode($data);   
    }
?>