<!-- Conexão com o banco de dados -->
<?php
    //Constantes necessárias
    define('HOST', 'localhost');
    define('DATABASENAME', 'crud-mvc');
    define('USER', 'root');
    define('PASSWORD', 'root');

    class Connect {
        protected $connection; //Atributo/variável que pode ser usada pela classe Connect e pelas classes que herdam dela
        
        function __construct() { //Método construtor
            $this->connectDatabase();
        }

        function connectDatabase() {
            try {
                $this->connection = new PDO('mysql:host='.HOST.'dbname='.DATABASENAME, USER, PASSWORD);
            } catch(PDOException $e) {
                echo "Error!".$e->getMessage();
            }
        }
    }