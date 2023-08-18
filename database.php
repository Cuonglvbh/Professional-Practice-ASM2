<?php
function connection()
{
    try {

        $dbh = new PDO('mysql:host=localhost;dbname=fpt_student_accommodation', 'root', '');
        $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $dbh;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
}
function disconnection($connect = null)
{
    $connect = null;
}