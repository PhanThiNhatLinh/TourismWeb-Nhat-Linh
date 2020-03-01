<?php
class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table, $model = null)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        if ($model) {
            return $statement->fetchAll(PDO::FETCH_CLASS, "{$model}");
        }

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {
        // insert into %s (%s) values (%s)
        // insert into brands (brand_id, brand_name) values (:brand_id, :brand_name)
        // die(var_dump($table, $parameters));
        $sql = sprintf(
            'insert into %s (%s) values (%s)',
            // hàm sprintf: để truyền giá trị vào chổ có dấu %
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        try {
            $statement =  $this->pdo->prepare("delete from {$table} where articleCode = {$id}");
            $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function getId($table, $id)
    {
        $statement =  $this->pdo->prepare("select * from {$table} where articleCode= {$id}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }
    public function update($table, $parameters)
    {


        try {

            $statement =  $this->pdo->prepare("update {$table} set
            articleName= '{$parameters['articleName']}',
            placeName='{$parameters['placeName']}',
            categoryArticle='{$parameters['categoryArticle']}',
            content='{$parameters['content']}',
            quantitychars='{$parameters['quantitychars']}',
            image='{$parameters['image']}',
            uploadDate='{$parameters['uploadDate']}',
            deadline='{$parameters['deadline']}',
            writerCode='{$parameters['writerCode']}' 
            WHERE articleCode ='{$parameters['articleCode']}'");

            $statement->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    // function login($username,$password)
    // {   
    //     $sql = "select * from `login` WHERE `username` =? AND `password` =?";
    //     $statement =  $this->pdo->prepare($sql);
    //     $statement->bindParam(1,$username);
    //     $statement->bindParam(2,$password);
    //     $statement->execute();
    //   return $statement->fetch();
    //     }

    public function login($table, $parameters)
    {
        try {

            $statement =  $this->pdo->prepare("select * from {$table} 
            WHERE username ='{$parameters['username']}' And password ='{$parameters['password']}'");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }
}
