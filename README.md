## Laravel連接mongodb
1.Mongodb套件安裝  
在開始前請先安裝mongodb套件，主要建立mongodb連線  
composer require jenssegers/mongodb  
2.安裝成功之後，在laravel的config/app.php的providers，新增這行  
Jenssegers\Mongodb\MongodbServiceProvider::class,  
3.添加 Facades  
'Mongo' => Jenssegers\Mongodb\MongodbServiceProvider::class,  
4.修改数据库配置文件 config/database.php 中  
添加 MongoDB 的数据库的信息:
'mongodb' => [    
        'driver'   => 'mongodb',    
        'host'     => 'localhost',    
        'port'     => 27017,    
        'database' => 'mydb',    
        'username' => '',    
        'password' => '',
],

'default' => env('DB_CONNECTION', 'mysql'),

改成:

'default' => env('DB_CONNECTION', 'mongodb'),  

5.將MongoDB用作資料庫後端，請更改以下驅動程式config/queue.php：

'connections' => [
    'database' => [
        'driver' => 'mongodb',
        'table'  => 'jobs',
        'queue'  => 'default',
        'expire' => 60,
    ],







