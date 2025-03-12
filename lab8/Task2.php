<html>
<head>
    <title><?php  $var="PHP Lab 8"; echo $var;?></title>
</head>
   <body>
    
   <!-- Lab8 Task2
   2.	Write PHP code inside HTML for the following:
        Create a variable $var = 'PHP Lab 6'. Put this variable into the title section, h3 tag and as an anchor text within 
        an HTML document to print its value in all of them i.e. in title, h3 tag and anchor tag text.
        Hint: Save the file with .php extension and run according to PHP basics in the browser. Use echo function between HTML tags
        to print the value of PHP variable.-->

    <h3>
    <?php echo $var; ?>
    </h3>

    <a href="index.php" target="_blank"><?php echo $var?></a>
</body>
</html>



