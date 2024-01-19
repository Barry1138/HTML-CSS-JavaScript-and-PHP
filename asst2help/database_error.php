<!DOCTYPE html>
<html>
    <!-- the head section -->
    <head>
        <title>PCPARTS Database Error</title>
        <link rel="stylesheet" type="text/css" href="main.css">
    </head>
    
    <!-- the body section -->
    <body>
    <main>
        <h1>Database Error</h1>
        <p>There was an error connecting to the database.</p>
        <p>The database must be intalled as described in the appendix.</p>
        <p>The database must be running as described in chapter 1.</p>
        <p>Error message: <?php echo $error_message; ?></p>
    </main>
    </body>
</html>
