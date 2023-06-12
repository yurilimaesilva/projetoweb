<?php

class conn {
    
    private $host = HOST;
    private $user = USER;
    private $password = PASSWORD;
    private $dbname = DBNAME;
    private $conect = null;

    public function start(){
        
        try {
            if (empty($this->conect)) {
                $this->conect = new PDO(''.$this->host.';'.$this->dbname.'',$this->user,$this->password);
            }
        }
        catch(Exception $erro){
            echo 'ERRO: '.$erro->getMessage();

            die;
        }

        return $this->conect;
    }

    public function query($sql) {
        return $this->conect->query($sql);
    }

    public function exec($sql) {
        return $this->conect->exec($sql);
    }  
}
