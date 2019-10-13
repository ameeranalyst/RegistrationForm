<!DOCTYPE HTML>
<html>
    <Head>
        <title>Student Registration Form</title>
        <link rel="stylesheet" type="text/css" href="design.css">

    </Head>
    <body>
        <div id="form">
            <form action="process.php" method="post">
                <label>UserName:</label>
                <input type="text" name="usr" placeholder="Enter Student's name" required></br>

               <label>Email:</label>
            <input type="email" name="mail" placeholder="Enter Student's Email" required></br>

            <label>Password:</label>
        <input type="password" name="pass" placeholder="Enter Student's Password" required></br>
            <input type="submit" name="submit" value="Submit"></br>
            </form>
        </div>
    </body>
</html>
