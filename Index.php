<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
    <?php
        include('Student.php');
        /*
         * Creating the student array to hold all students
         */
        $students = array();
        /*
         * Creating the first student and storing it in the students
         * array.
         */
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        /*
         * Creating the second student and storing it in the student array
         */
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        /*
         * Creating my own student information in the student array
         */
        $third = new Student();
        $third->surname = "Miles";
        $third->first_name = "Nathan";
        $third->add_email('home', 'getryfp@gmail.com');
        $third->add_grade(90);
        $third->add_grade(75);
        $third->add_grade(95);
        $students['a009'] = $third;
        
        ksort($students); // one of the many sort functions
        /*
         * Displays each student in the students array
         */
        foreach($students as $student)
            echo $student->toString();

    ?>
    </body>
</html>
