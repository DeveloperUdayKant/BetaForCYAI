<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $apiKey = 'sk-AY4hrR5hRnxXxyc7uvXOzBRCZ0U1VrUL8a4QCg0rzkJ4d7zN'; // Replace with your actual API key
    $category = isset($_POST['category']) ? $_POST['category'] : '';
    $product = isset($_POST['product']) ? $_POST['product'] : '';
    $promptText = isset($_POST['prompt']) ? $_POST['prompt'] : '';
    $prompt = $category.','.$product.','.$promptText;
    // $negativePrompt = isset($_POST['negative_prompt']) ? $_POST['negative_prompt'] : '';
    $width = isset($_POST['width']) ? intval($_POST['width']) : 512;
    $height = isset($_POST['height']) ? intval($_POST['height']) : 512;
    $steps = isset($_POST['steps']) ? intval($_POST['steps']) : 50;
    $seed = isset($_POST['seed']) ? intval($_POST['seed']) : 0;
    $cfg_scale = isset($_POST['cfg_scale']) ? intval($_POST['cfg_scale']) : 7;
    $samples = isset($_POST['samples']) ? intval($_POST['samples']) : 1;
    $style_preset = isset($_POST['style_preset']) ? $_POST['style_preset'] : 'enhance';

    function textToImage($apiKey, $prompt, $negativePrompt, $width, $height, $steps, $seed, $cfg_scale, $samples, $style_preset) {
        $outDir = './out';
        if (!is_dir($outDir)) {
            if (!mkdir($outDir, 0755, true)) {
                throw new Exception('Failed to create "out" directory.');
            }
        }

        $path = "https://api.stability.ai/v1/generation/stable-diffusion-xl-beta-v2-2-2/text-to-image";

        $headers = array(
            'content-type: application/json',
            'Authorization: Bearer ' . $apiKey,
        );

        $body = array(
            'width' => $width,
            'height' => $height,
            'steps' => $steps,
            'seed' => $seed,
            'cfg_scale' => $cfg_scale,
            'samples' => $samples,
            'style_preset' => $style_preset,
            'text_prompts' => array(
                array(
                    'text' => $prompt,
                    'weight' => 1,
                ),
                // array(
                //     'text' => $negativePrompt,
                //     'weight' => -1,
                // ),
            ),
        );

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $path);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        
        // var_dump($response);
        // die();
        if (!$response) {
            throw new Exception('cURL error: ' . curl_error($ch));
        }

        curl_close($ch);

        $responseJSON = json_decode($response, true);

        // Check if the response contains "artifacts" key and it is an array
        if (isset($responseJSON['artifacts']) && is_array($responseJSON['artifacts'])) {
            $generatedFilenames = array();

            foreach ($responseJSON['artifacts'] as $index => $image) {
                $filename = "./out/CyberartboardAItxt2img_" . $image['seed'] . ".png";
                if (!file_put_contents($filename, base64_decode($image['base64']))) {
                    throw new Exception('Failed to save image: ' . $filename);
                }
                $generatedFilenames[] = $filename;
            }

            return json_encode($generatedFilenames);
        } else {
            throw new Exception('Invalid API response: Missing or invalid "artifacts" key.');
        }
    }

    try {
        // Call the function to execute the textToImage API request
        $imageFilenames = textToImage($apiKey, $prompt, $negativePrompt, $width, $height, $steps, $seed, $cfg_scale, $samples, $style_preset);

        // Set the response Content-Type header to JSON
        header('Content-Type: application/json');
        echo $imageFilenames;
    } catch (Exception $e) {
        echo json_encode(array('error' => $e->getMessage()));
    }
}
