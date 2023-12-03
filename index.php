<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    class dataBase{
        public $server = "localhost";
        public $username = "root";
        public $password = "";
        public $nameDb = "asal asalan";

        function connectDb(){
            try{
                $db = mysqli_connect("{$this->server}", "{$this->username}", "{$this->password}", "{$this->nameDb}");

                if($db){
                    throw new Exception(true);
                }
            }

            catch(Exception $x){
                if($x->getMessage() == "Unknown database '{$this->nameDb}'"){
                    return "Tidak terhubung ke DataBase!";
                }else{
                    return "Terhubung ke DataBase!";
                }
            }
        }
        
    }

    $connect = new dataBase();

    echo "Status: {$connect->connectDb()}";
    
    ?>
</body>
</html>
