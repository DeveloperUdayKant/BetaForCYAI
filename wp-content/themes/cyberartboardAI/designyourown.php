<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/wp-content/themes/cyberartboardAI/bottom-logo.png" type="image/x-icon">
    <title>Design Your Own</title>
    <style>
        .cont-set{
          display: flex;
          justify-content: center;
          align-items: center;
        }
        form{
            display:inline-block;
        }
        .category,.inputText{
            width:200px;
            height:30px;
            margin-left:5px;
            border-radius:0px;
        }
        .inputText{
            height:27px;
            border:1px solid black;
            outline-style:none;
        }
        .designLogo{
            margin-top:0px;
        }
        textarea{
        width: 415px;
        height: 400px;
        outline-style: none;
        }
        input::file-selector-button {
        background-color:#FF8551;
        background-position-x: 0%;
        background-size: 200%;
        border: 0;
        color: #fff;
        padding: 5px;
        text-shadow: 0 1px 1px #333;
        transition: all 0.25s;
        margin:5px;
        }
        input::file-selector-button:hover {
        background-position-x: 100%;
        transform: scale(1.1);
        }
        .bottom-button:hover{
            background-color: #DDE6ED;
        }
        input[type="submit"]:hover{
            /*color:white;*/
        }
        span{
            display:inline-block;
        }

</style>
<style>
  .setImage{
    display: flexbox;
    flex-direction: column;
    flex-wrap: wrap;
    width:550px;
    height: auto;
   }
   .img-result{
       border:1px solid transparent;
   }
   .img-result:hover{
        border:1px solid coral;
   }
</style>
</head>
<body bgcolor="#EEEEEE">
    <div class="cont-set">
    <form method="GET" action="#">
    <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="25%" height=auto alt="logo"/>
    <hr>
    <img class="designLogo" src="/wp-content/uploads/2023/05/Design-your-Own.png" width="40" height:auto/>
    <select name="category" class="category">
     <option selected disabled>CATEGORIES</option>
        <option>SCHOOLWEAR</option>
        <option>BUSINESS WEAR</option>
        <option>SPORTS WEAR</option>
        <option>WORK WEAR</option>
        <option>PROMOTIONAL</option>
        <option>LEISUREWEAR</option>
     </select>
     <select name="product" class="category">
        <option selected disabled>PRODUCTS</option>
        <option>POLO SHIRTS</option>
        <option>T-SHIRTS</option>
        <option>SINGLETS</option>
        <option>SHORTS</option>
        <option>TRACKSUITS</option>
        <option>HOODIE TOP</option>
        <option>STORM JACKET</option>
        <option>SOFTSHELL JACKET</option>
        <option>SPORTS CAP</option>
        <option>BUCKET HAT</option>
        <option>SOCKS</option>
     </select>
     <input type="text" name="sometext" class="inputText" id="desc" disabled>
     <h1 style="font-family:arial;">DESIGN REQUEST FORM:</h1>     
        <span>
        <textarea placeholder="Enter Your Description" name="inputText"></textarea>
        </span>
        <span>
            <?PHP
    if(isset($_GET['Generate'])){
        $category = $_GET['category'];
        $product = $_GET['product'];
        $inputText = $_GET['inputText'];
        //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
        $apiKey = '';
        if($apiKey==''){
           $msg='API Key has been removed, Contact your ADMIN';
           echo $msg;
            die();
        }
        
        $textPrompt = $inputText;
       
        // Prepare the request data
        $data = [
            'prompt' => $textPrompt,
            'n' => 4,
            'size' => '512x512'
        ];
        
        // Convert the request data to JSON
        $jsonData = json_encode($data);
        
        // Prepare the cURL request
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://api.openai.com/v1/images/generations');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $apiKey,
        ]);
        
        // Execute the request
        $response = curl_exec($ch);
        // Decode the response JSON
        $result = json_decode($response, true);
        
        $count = 0;
        echo '<div class="setImage">';
        if (isset($result['data'])) {
          foreach ($result['data'] as $item) {
            if (isset($item['url'])) {
              $url = $item['url'];
              echo '<img src="' . $url . '" class="img-result" alt="Image" Width="200" Height="200">';
              $count++;
            }
          }
        }
        echo '</div>';
        // Close the cURL session
        curl_close($ch);
    }
    else{
        echo '';
    }

?>
        </span>
        <h3 style="font-family:arial;">Add Embedded Images</h3>
        <h4 style="font-family:arial;">
            Upload:<input type="file" name="fileUpload"><br>
            Library:<input type="file" name="fileLibrary"><br>
        </h4>        
        <div class="bottom-button" style="float:right;border:1px solid black;padding:10px;width:150px;"><img src="/wp-content/themes/cyberartboardAI/bottom-logo.png" width="30" height="25" style="margin-bottom:-5px;margin-right:2px;"><input type="submit" style="display:inline-block;border:0px;background-color:transparent;" name="Generate" value="Generate"></div>
    </form>
    </div>
</body>
</html>


