<?php
    $title = 'Спасибо';
    require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/header.php');     
    
    $sql ="INSERT INTO leads (id, username, useremail, usertel, message) VALUE
    (NULL, '{$_POST['username']}', '{$_POST['useremail']}', '{$_POST['usertel']}', '{$_POST['question-point']}')
    ";
    $result = mysqli_query($db, $sql);
?>   
 

<div class="result">
    <?php
        // d($_POST);

        if ($result) {
            echo 'Данные успешно добавлены!';
        } else {
            echo 'Произошла ошибка';
        }
    ?>  
</div>

<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/parts/footer.php'); 
?>  

