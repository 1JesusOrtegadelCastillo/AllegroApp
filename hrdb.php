<?php
    // Database connection parameters
    class connection {
        public $host = "localhost";
        public $user = "root";
        public $password = "";
        public $db_name = "hresources";
        public $conn;

        // Constructing database connection string
        public function __construct()
        {
            $connectionString = "mysql:host" . $this->host ."; dbname=" . $this->db_name . ";";
            // Catching errors on database connection in case there's any
            try {
                    $this-> conn = new PDO($connectionString, $this->user, $this->password);
                    $this-> conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                } catch (PDOException $e)
                    {
                        $this->conn = "Connection error";
                        echo "Error: " . $e->getMessage();
                    }
        }

        public function getUsuarios(string $name, string $email, string $department)
        {
            // creando query de consulta dentro de la variable $sql
            $sql = "SELECT e_name, e_email, department FROM employees";
            // dentro de la variable execute estamos iniciando conexion y especificando que la query esta en la variable $sql
            $execute = $this->Conexion->query($sql);
            // por medio de fetchall(PDO::FETCH_ASSOC) obtenemos todos los registros y la almacenamos en la variable $request
            $request = $execute->fetchall(PDO::FETCH_ASSOC);
            // regresando los valores obtenidos
            return $request;
        }

    }

    $conn = new connection();
?>