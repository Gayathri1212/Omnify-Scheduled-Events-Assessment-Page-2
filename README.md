# Omnify-Scheduled-Events-Assessment-Project-2
To send the form data into the database we need a server side programming language which will take form data and that program will make a connection with database and then using SQL INSERT query will store the form data into database.


Here I have used php as a server side programming language and MySQL as a database 
To Send The events form data to server side php file we have to specify php file name inside the events form tag using action attribute so php file will execute when events form is submitted. 

We have two different methods to send the data to sever GET or POST. POST method is more secure way to send data to the server side.

In php to get the data which is sent from client side we have to use appropriate global variable if client sents the data using POST method then we have to use $_POST and if client has to send using GET method then we have to use $_GET variable to get that data. 

After getting the data at server side, we have to do a connection with the database. PHP provides the full support and method to do MySQL database connection.
