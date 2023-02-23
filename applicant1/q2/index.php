<html>
    <head>
        Q2
    </head>    

    <body>
        <br>

   


    <form method="POST">
    <label for="fullname">Full name:</label><br>
    <input type="text" id="fullname" name="fullname" required><br>
    <label for="email">Email:</label><br>
    <input type="email" name="email" required><br><br>
    <label for="fullname">Company:</label><br>
    <input type="text" name="company" required><br>
    <label for="fullname">Phone number:</label><br>
    <input type="number" name="phone_number" required><br>

    <label for="cars">Choose a state:</label>
    <select id="states" name="states" value="NSW">
        <option value="NSW">NSW</option>
        <option value="VIC">VIC</option>
        <option value="QLD">QLD</option>
   
    </select><br>

    <input type="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['email'])){
            $full_name = $_POST['fullname'];
            $email = $_POST['email'];
            $company = $_POST['company'];
            $phone_number = $_POST['phone_number'];
            $is_state = $_POST['states'];

            if($is_state=='NSW'){
                echo 'The email was sent to: joshiehwang@nexgen.com.au';
            }elseif($is_state=='QLD'){
                echo 'The email was sent to: rolandmiranda@nexgen.com.au';
            }else{
                echo 'The email was sent to: me@nexgen.com.au';
            }
          
            $url = " https://nexproject.com.au/v1/records.php";
            // fullName
            // emailAddress
            // companyName
            // phoneNumber
            // State

            // $post = [
            //     'fullName' => $full_name,
            //     'emailAddress' => $email,
            //     'companyName'   => $company,
            //     'phoneNumber' => $phone_number,
            //     'State' => $is_state
            // ];
            
            // $ch = curl_init($url);
            // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            // curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
            
            // // execute!
            // $response = curl_exec($ch);
            
            // // close the connection, release resources used
            // curl_close($ch);

            // // do anything you want with your response
            // var_dump($response);

            $parameters = array('fullName' => 'user1', 'emailAddress' => 'companyName', 'phoneNumber' => '1', 'State' => 'NSW');
            $options = array('http' => array(
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'method'  => 'POST',
                'content' => http_build_query($parameters)
            ));

            $context  = stream_context_create($options);
            $result = file_get_contents($url, false, $context);
            $result = json_decode(file_get_contents($url, false, $context), TRUE);

            echo $result;
        }
       
    
    ?>


    </body>


<html>