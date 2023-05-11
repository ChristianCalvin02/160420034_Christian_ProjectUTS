<?php
    $data = array(
        array("id" => "001", "book_name" => "Kalkulus", "description" => "Buku yang berisikan tentang berbagai rumus matematika kalkulus","author" => "JK. Spencer", "rating" => 4.5, "image_url" => "https://images-na.ssl-images-amazon.com/images/S/compressed.photo.goodreads.com/books/1414911279i/23489855.jpg"),
        array("id" => "002", "book_name" => "Inspirasi Hidup Orang Sukses", "description" => "Buku yang mengajarkan cara untuk hidup sukses","author" => "Budi Susilo", "rating" => 4.2, "image_url" => "https://s4.bukalapak.com/img/9698762902/large/Buku_Inspirasi_Sukses_dari_Prinsip_Hidup_Orang_Orang_Hebat_D.jpg"),
        array("id" => "003", "book_name" => "Statistika", "description" => "Buku tentang tips and tricks belajar statistika dengan baik dan tepat", "author" => "Drs. Sutrisno Hadi", "rating" => 4.7, "image_url" => "https://pustakapelajar.co.id/wp/wp-content/uploads/2017/12/STATISTIK-EDISI-REVISI.jpg"),
        array("id" => "004", "book_name" => "Algoritma dan Pemrograman", "description" => "Buku ini berisikan materi dasar dari algoritma dan pemrograman", "author" => "Linardi Munir", "rating" => 4.8, "image_url" => "https://openlibrary.telkomuniversity.ac.id/uploads/book/cover/16.01.169.jpg"),
        array("id" => "005", "book_name" => "Akutansi Keuangan Menengah", "description" => "Buku yang didesain dengan berbagai macam pengetahuan dalam akuntansi keuangan tingkat menengah", "author" => "Hery", "rating" => 4.2, "image_url" => "https://cdn.gramedia.com/uploads/items/9786020523231_Akuntansi_Keuangan_Menengah-ACC_Page_1.jpg"),
        array("id" => "006", "book_name" => "Kewirausahaan", "description" => "Berisikan tentang konsep dasar berwirausaha yang baik dan benar.", "author" => "Djoko Sumianto", "rating" => 4.1, "image_url" => "https://a.cdn-myedisi.com/book/cover/mncpublishing-a_61e1217de7ed1136059364.jpg"),
        array("id" => "007", "book_name" => "Undang - Undang dan Hukum", "description" => "Buku ini berisikan berbagai macam undang - undang di negara kita, serta berisikan hukum kuhp", "author" => "B.I.P", "rating" => 4.3, "image_url" => "https://ebooks.gramedia.com/ebook-covers/38810/big_covers/ID_BHIP2017MTH06KUHKK_B.jpg"),
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