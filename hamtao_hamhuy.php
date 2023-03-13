<?php
    // class  Book{
    //     protected $price;
    //     protected $title;

    //     //ham khoi tao construct
    //     function __construct($title, $price)
    //     {
    //         $this->price = $price;
    //         $this->title = $title;
    //     }
    //     //the end construct
    //     public function getTitle(){
    //         return $this->title;
    //     }
    // }

    // $toan = new Book("toan 2",30000);
    // echo $toan->getTitle();


    // class Smartphone{
    //     // $title, $price thuoc tinh cua lop
    //     function __construct(protected $title, protected $price)
    //     {
          
    //     }
    //     public function getTitle(){
    //         return $this->title;
    //     }
    // }
    // $iphone = new Smartphone("13 pro",23000000);
    // echo $iphone->getTitle();
    


    // function bookFromArrayData(array $data) : Book
    // {
    //     $book = new Book($data['title'], $data['price']);

    //     return $book;
    // }
    // $data = ['title'=> 'Anh','price'=>30000];
    // $anh = new bookFromArrayData($data);



    class Book{
        function __construct(protected $title, protected $price)
        {
            
        }
        // protected $price;
        // protected $title;

        // //ham khoi tao construct
        // function __construct($title, $price)
        // {
        //    $this->price = $price;
        //     $this->title = $title;
        // }
        public static function bookFromArrayData(array $data):static
        {
            $book = new static($data['title'],$data['price']);
            return $book;
        }
        public function __destruct()
        {
            echo 'đối tượng bị hủy';
        }
        public function getTitle(){
            return $this->title;
        }
    }
    // Tạo đối tượng bằng cách thông thường
    $book1 = new Book('asd',123); 
    // Tạo đối tượng bằng hàm factory
    $book2 = Book::bookFromArrayData(['title'=>'nbm',321]);

    unset($book1);
?>
