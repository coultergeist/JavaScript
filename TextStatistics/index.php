<!DOCTYPE html>
<!--
//a4_test.php
//used with index.php

/*
 * Class:       AD 320 WI 18
 * Author:      Danielle Coulter
 * Title:       a4_tester.php, Assignment 4
 * Due Date:    Jan 24, 2018
 * Text:        Chapter 11
-->
<?php include 'a4_tester.php' ?>
<html>
    <head>
        <title>Coulter Statistics</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>

    <body>
        <main>

            <h1>Statistics:</h1>
            <h3>This program is designed to show you details about your text.</h3>
            <h3>Once you hit submit, you can view your results.</h3>

            <form action="." method="post">
                <label>Enter your text here:</label>
                <textarea name="text" cols="30" rows="5"></textarea>
                <br>

                <label>&nbsp;</label>
                <input type="submit" value="Submit">
                <br>

            </form>

            <h2>Results:</h2>
            <h3> Characters <?= characters(); ?> </h3>
            <h3> Letters <?= letters(); ?> </h3>
            <h3> Consonants <?= consonants(); ?> </h3>
            <h3> Digits <?= digits(); ?> </h3>
            <h3> White-Spaces <?= white(); ?> </h3>
            <h3> Word Characters <?= wordchars(); ?> </h3>
            <h3> Punctuation <?= punctuation(); ?> </h3>
            <h3> Word Count <?= wordOccurrence(); ?> </h3>
            

        </main>
    </body>
</html>
