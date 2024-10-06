<?php
class DbConfig {
    protected $serverName;
    protected $serverPort;
    protected $userName;
    protected $passCode;
    protected $dbName;
    protected $dbT9Name;
	
    protected $group;

    function DbConfig() {
        $this -> serverName = '192.168.127.142';
        $this -> serverPort = '3306';
        $this -> userName = 'root';
        $this -> passCode = '';
        $this -> dbName = 'pirate20002';
        $this -> dbT9Name = 't9-rxhzw-web';
		
        $this -> group = 'game20002';
    }
}
?>