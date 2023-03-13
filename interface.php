<?php
    interface Ilogger{
        public function log($message);
    }
?>
<?php
    class Filelogger implements Ilogger{
        public function log($message){
            echo sprintf("log %s to the file\n",$message);
        }
    }
    class Dblogger implements Ilogger{
        public function log($message){
            echo sprintf("log %s to the database\n",$message);
        }
    }
?>