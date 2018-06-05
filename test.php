<?php 
        if (isset($_POST['submitted'])) {
            include ('dbconnection.php');
            $domain_name = $_POST['domain_name'];
            $description = $_POST['description'];
    function validate($domain)
        {
            if(stripos($domain, 'http://') === 0)
            {
                $domain = substr($domain, 7); 
            }
             
            ///Not even a single . this will eliminate things like abcd, since http://abcd is reported valid
            if(!substr_count($domain, '.'))
            {
                return false;
            }
             
            if(stripos($domain, 'www.') === 0)
            {
                $domain = substr($domain, 4); 
            }
             
            $httpcheck = 'http://' . $domain;
            return filter_var ($httpcheck, FILTER_VALIDATE_URL);
        }


           $filter=validate($domain_name);
            if($filter)
            {
                $domain = parse_url($filter, PHP_URL_HOST);
                $sqlinsert = "INSERT INTO domain (domain_name, description, CreationDate) VALUES ('$domain','$description',now()) " ;
            
            mysqli_query($conn,$sqlinsert);
            $message= 'Your domain has been successfully added to database';
            
            }

            else
            {
                 $message= 'Not a valid domain name . Please enter a valid domain ';
            }

                }  


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

  #container {
    display: flex;           
    flex-direction: row;  
    align-items: center;   
    justify-content: center;  
    height:500px;

}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;
}

.button1 {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
}

.button2:hover {
    box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}


  </style>
</head>
<body>

    <form action="adddomain.php" method="post" >
    <fieldset>
        <legend> New Domain Submissions </legend>
        <label>Domain name:  <input name="domain_name" id="domain_name" type="text" /></label> <br><br>
        <label>Description:  <textarea name="description"></textarea></label> <br><br>
        
    </fieldset>
    <br />
    <?php
        echo $message
        ?>
    <div id=container>
        
   <input class=button button1 type="submit" name="submitted" value="Save Record in DB"><span><input class=button button 1 type="button" onclick="location.href = 'index.html'" value="Redirect" /></span><br><br>
</div>
    </form>
    

</body>
</html>