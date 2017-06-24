<?php
include "mySQL.php";
function newLine(){
    echo('<br>');
};

echo ('<h2>Juan Orozco</h2>');
newLine();
echo ('<h4>FROM: WAMP</h4>');
newLine();
echo ('<h1>Assignment 4</h2>');
newLine();
echo('<h2>DVD Titles<h2/>');
newLine();
echo('Adding items to the dvdtitles table...');
fInsertToDatabase('B000MMMT9G','Borat','19.99');
fInsertToDatabase('B004SIP9KQ','Scary Movie 3','19.99');
fInsertToDatabase('B000C20VRS','Scarface','19.99');
fInsertToDatabase('B00G2P79BU','Bad Grandpa','19.99');
fListFromDatabase();
echo('Now deleting them...');
fDeleteFromDatabase('B000MMMT9G');
fDeleteFromDatabase('B004SIP9KQ');
fDeleteFromDatabase('B000C20VRS');
fDeleteFromDatabase('B00G2P79BU');
fListFromDatabase();
echo('<h2>DVD Actors<h2/>');
newLine();
echo('Adding Actors...');
newLine();
// Borat
//fInsertToDatabaseActors('Sacha','Cohen');
//fInsertToDatabaseActors('Ken','Davitian');
// Scary Movie
//fInsertToDatabaseActors('Charlie','Sheen');
//fInsertToDatabaseActors('Anna','Faris');
// Scarface
//fInsertToDatabaseActors('Al','Pacino');
//fInsertToDatabaseActors('Steven','Bauer');
// Bad Grandpa
//fInsertToDatabaseActors('Johnny','Knoxville');
//fInsertToDatabaseActors('Jackson','Nicoll');
//fListFromDatabaseActors();
echo('Delete all actors...');
newLine();
//fDeleteFromDatabaseActors(1);
//fDeleteFromDatabaseActors(2);
//fDeleteFromDatabaseActors(3);
//fDeleteFromDatabaseActors(4);
//fDeleteFromDatabaseActors(5);
//fDeleteFromDatabaseActors(6);
//fDeleteFromDatabaseActors(7);
//fDeleteFromDatabaseActors(8);
fListFromDatabaseActors();
