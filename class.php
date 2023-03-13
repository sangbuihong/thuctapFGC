<?php
    class User{
        public const MGS = "Information:";

        public  $name = "User name";
        private  $age;
        private  $info;

        public function setInfo(string $name, int $age) :void
        {
            $this->age = $age;
            $this->name = $name;
            $this->processInfomation();
        }
        protected function processInfomation() : void
        {
            $this->info = $this::MGS . $this->name.' is '.$this->age.'  years old';

        }
        public function getInfo() :string
        {
            return $this->info;
        }
    }
    $user = new User;// khoi tao doi tuong moi
    $user->setInfo('Sanghomnay',23);//goi phuong thuc
    echo $user->name;//truy cap thuoc tinh name
    echo"<br>";
    echo $user::MGS;//truy cap hang so MGS
    echo"<br>";
    echo User::MGS;//truy cap hang so MGS
    echo"<br>";
    echo $user->getInfo();//KQ: infomation:Sanghomnay is 23 years old
?>