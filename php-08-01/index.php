<?php
try {
    $db_handle = new PDO('mysql:host=127.0.0.1;dbname=course;charset=utf8','root','123456');

    // $statement = $db_handle->prepare
    // (
    //     'INSERT INTO posts(title,content) VALUES (:title, :content)'
    // );
    $statement = $db_handle->prepare
    (
        'SELECT * FROM posts'
    );
    $statement->execute();

    $statement->setFetchMode(PDO::FETCH_ASSOC);
    while ($row = $statement->fetch()) {
        echo ' 《' . $row['title'] . '》' . $row['content'] . '<br>';
    }
    echo '<pre>';
        var_dump(
            // $statement->fetch(),
            $statement->fetch(PDO::FETCH_NUM),
            $statement->fetch(PDO::FETCH_ASSOC),
            $statement->fetch(PDO::FETCH_OBJ)
        );
    echo  '</pre>';
// $data = [
//     'title' => '呃呃呃额额',
//     'content' => '我是一个好人，你觉得呢'
// ];
    // $title = 'titileaaa';
    // $content = 'wp噶啥是干哈了十几个哈死了赶紧哈喽帅哥哈喽帅哥';
    // $statement->bindParam(':title', $title);
    // $statement->bindParam(':content', $content);

    // $statement->execute($data);

}catch(PDOException $e) {
    echo $e->getMessage();
 }

