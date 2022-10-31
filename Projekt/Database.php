<?php

class Database
{
    protected $dbname = 'entries';
    protected $dbhost = 'localhost';
    protected $dbuser = 'root';
    protected $dbpass = null;

    public function connection() : PDO
    {
        return new PDO("mysql:dbname=$this->dbname;host=$this->dbhost", $this->dbuser, $this->dbpass);
    }

    public function addEntry(string $firstname, string $content, string $createdAt) : bool
    {
        $pdo = $this->connection();
        $sql = "INSERT INTO entry (id, firstname, content, created_at) VALUES (null, ?, ?, ?)";
        return $pdo->prepare($sql)->execute([$firstname, $content, $createdAt]);
    }

    public function getEntries(int $limit = null) : PDOStatement|false
    {
        $pdo = $this->connection();
        $sql = $limit > 0 ? "SELECT * FROM entry ORDER BY id DESC LIMIT $limit" : "SELECT * FROM entry ORDER BY id DESC";
        return $pdo->query($sql);
    }

    public function removeEntry(int $entryId) : int|false
    {
        $pdo = $this->connection();
        $sql = "DELETE FROM entry WHERE id = $entryId";
        return $pdo->exec($sql);
    }
}