<style>
  .setImage{
    display: flexbox;
    flex-direction: column;
    flex-wrap: wrap;
    width:550px;
    height: auto;
   }
</style>
<?PHP
    if(isset($_GET['Generate'])){
        $category = $_GET['category'];
        $product = $_GET['product'];
        $inputText = $_GET['inputText'];
        // echo 'Category: '.$category.'<br>'.'Product:'.$product.'<br>'.'Input Text: '.$inputText;
        
        $apiKey = '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';
        $textPrompt = 'Category: '.$category.' Product: '.$product.'and '.$inputText;
       
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
              echo '<img src="' . $url . '" alt="Image" Width="240" Height="240">';
              $count++;
            }
          }
        }
        echo '</div>';
        // Close the cURL session
        curl_close($ch);
    }
    else{
        echo 'Not Set';
    }

?>