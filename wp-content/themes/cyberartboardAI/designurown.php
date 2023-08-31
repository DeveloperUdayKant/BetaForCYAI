<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/wp-content/themes/cyberartboardAI/bottom-logo.png" type="image/x-icon">
    <title>Design Your Own</title>
    <style>
        .content-all{
            width: 50%;
            text-align: left;
            font-family: verdana;
            padding: 5px;
            margin: 5px;
        }
        .image-container {
            display: inline-block;
            margin: 10px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            margin-bottom: 0vm;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .modal-content {
            margin: 15% auto;
            padding: 20px;
            background: white;
            border: 1px solid #888;
            width: 80%;
            position: relative;
            top: -150px;
            text-align: center;
        }
        .modal-content a{
            padding: 10px;
        }
        .modal-image {
            max-width: 100%;
            height: auto;
            margin-bottom: 20px;
        }

        .pagination a {
            display: inline-block;
            margin-right: 5px;
            color: coral;
        }

        .close {
            position: absolute;
            top: 10px;
            right: 20px;
            font-size: 30px;
            font-weight: bold;
            color: white;
            cursor: pointer;
        }
        .pagination {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            position: relative;
            top: 0px;
        }
        .pagination a {
            margin: 5px;
            padding: 5px 10px;
            text-decoration: none;
            border: 1px solid coral;
            cursor: pointer;
        }
        .hidden {
            display: none;
        }
        .loading-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; /* Adjust the height based on your design */
        }
        .loading-text {
            font-size: 24px;
            position:relative;
            right:50px;
        }
        #generate-more-container {
            text-align: center;
            margin: 10px 0;
        }
        #category,#product{
            width: 200px;
            height: 30px;
            text-align:center;
            background-color: transparent;
            border: 1px solid #bbbbbb;
            outline-style: none;
            appearance: none; /* Remove default appearance */
              -webkit-appearance: none; /* For Safari */
              -moz-appearance: none; /
                }
        .optionSet{
            width: 200px;
            height: 30px;
            background-color: #EEEDED;
            border: 0px;
            font-size: 15px;
            outline-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: coral;
            padding:5px;
        }
        
        #prompt,#negative_prompt{
            width: 400px;
            height: 100px;
            border: 0px;
            outline-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            font-size: large;
        }
        #prompt{
            background-color: #EEEEEE;
            color: black;
            font-weight: lighter;
            padding: 4px;
            border:1px solid #bbbbbb;
        }
        #negative_prompt{
            background-color: #DBDFEA;
            color: black;
            font-weight: lighter;
            padding: 4px;
            border:1px solid #bbbbbb;
            width:400px;
            height:500px;
        }
        input[type="submit"]{
            width: 200px;
            height: 30px;
            margin-top: 10px;
            border-radius: 0px;
            border:1px solid coral;
            font-weight: bold;
            font-family: verdana;
        }
        input[type="submit"]:hover{
            background-color: coral;
            box-shadow: 2px 2px 2px black;
        }
        .generate-icon-button{
            background: url('/wp-content/themes/cyberartboardAI/bottom-logo.png') no-repeat left center; 
            padding-left: 0px;
            border: none;
            cursor: pointer;
            font-size: 16px;
            line-height: 1.5;
            float:left;
        }
          .button-container {
            position: relative;
            display: inline-block;
            padding:5px;
            border: 1px solid #DBDFEA;
          }
          .button-container:hover{
              background-color:#DBDFEA;
          }
        
          /* Style for the image icon */
          .icon {
            position: absolute;
            left: 5px; 
            top: 50%;
            transform: translateY(-50%);
          }
        
         
          .button-text {
            padding-left: 35px; 
            font-size:x-large;
            text-transform:uppercase;
            font-weight:bold;
            border:0px;
            background-color:transparent;
          }
          .button-text:hover{
              /*color:#ff7f50;*/
          }
          .result-span{
            position: absolute;
            right: 50px;
            top: 50px;
          }
           #results {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
        grid-gap: 10px;
    }
    
    .grid-image {
        width: 100%;
        max-width: 100%;
        height: auto;
    }
    </style>
</head>
<body bgcolor="#FEF8FB">
<div class="content-all">
    <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="35%" height=auto alt="logo"/>
    <hr style="width: 67%;margin-left: 0px;height: 1px;background-color: coral;border:1px solid coral;">
    <form id="generate-form">
        <img class="designLogo" src="/wp-content/uploads/2023/05/Design-your-Own.png" width="40" height:auto/>
        <select id="category" name="category" required>
            <option class="optionSet" selected disabled>CATEGORIES</option>
            <option class="optionSet">SCHOOLWEAR</option>
            <option class="optionSet">BUSINESS WEAR</option>
            <option class="optionSet">SPORTS WEAR</option>
            <option class="optionSet">WORK WEAR</option>
            <option class="optionSet">PROMOTIONAL</option>
            <option class="optionSet">LEISUREWEAR</option>
        </select>
        <select id="product" name="product" required>
            <option class="optionSet" selected disabled>PRODUCTS</option>
            <option class="optionSet">POLO SHIRTS</option>
            <option class="optionSet">T-SHIRTS</option>
            <option class="optionSet">SINGLETS</option>
            <option class="optionSet">SHORTS</option>
            <option class="optionSet">TRACKSUITS</option>
            <option class="optionSet">HOODIE TOP</option>
            <option class="optionSet">STORM JACKET</option>
            <option class="optionSet">SOFTSHELL JACKET</option>
            <option class="optionSet">SPORTS CAP</option>
            <option class="optionSet">BUCKET HAT</option>
            <option class="optionSet">SOCKS</option>
        </select>
        <br>
        <br>
        <h2 style="position: relative;left: 20px; font-family:poppins,sans-serif;font-weight: bold;font-size: medium;padding:10px;background-color: transparent;width: fit-content;border-radius: 0px;">DESIGN REQUEST FORM:</h2>
        <label for="prompt" style="font-size: medium;font-family:poppins,sans-serif;font-weight:bold;">Prompt:</label><br>
        <textarea placeholder="Explanation of the design you wish to create" id="prompt" name="prompt"  required></textarea>
        <br>
        <div class="externalSet">
            <p><b>Add Embedded Images</b></p>
            <p><b>Upload:</b></p>
            <p><b>Library:</b></p>
        </div>
        <!--<label for="negative_prompt" style="font-size: small;">Negative Prompt:</label><br>-->
        <!--<textarea placeholder="What you want to avoid generating" id="negative_prompt" name="negative_prompt"  required></textarea>-->
        <br>
        <input type="hidden" id="width" name="width" value="512">
        <input type="hidden" id="height" name="height" value="512">
        <input type="hidden" id="steps" name="steps" value="50">
        <input type="hidden" id="seed" name="seed" value="0">
        <input type="hidden" id="cfg_scale" name="cfg_scale" value="7">
        <input type="hidden" id="samples" name="samples" value="6">
        <input type="hidden" id="style_preset" name="style_preset" value="enhance">
        <div class="button-container">
            <img src="/wp-content/themes/cyberartboardAI/bottom-logo.png" width="25" height="20" alt="Icon" class="icon"> <!-- Replace 'path-to-your-icon.png' with your icon's path -->
            <button type="submit" value="Generate" class="button-text">Generate:</button>
        </div>
        <!--<input type="submit" value="Generate" class="generate-icon-button">-->
    </form>
    <span class="result-span">
    <div id="results">
        <!-- The generated images will be displayed here -->
    </div>
    <div class="pagination" id="pagination">
        <!-- The pagination links will be displayed here -->
    </div>
</span>
</div>  
    <script>
    // JavaScript code to handle form submission and display images with pagination
    const form = document.getElementById('generate-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();
        const formData = new FormData(form);

        const resultsContainer = document.getElementById('results');
        resultsContainer.innerHTML = '';

        const loadingContainer = document.createElement('div');
        loadingContainer.className = 'loading-container';
        const loadingText = document.createElement('div');
        loadingText.textContent = 'Generating images... Please wait.';
        loadingText.className = 'loading-text';
        loadingContainer.appendChild(loadingText);
        resultsContainer.appendChild(loadingContainer);

        fetch('/wp-content/themes/cyberartboardAI/generate_images.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json())
        .then(data => {
            resultsContainer.innerHTML = ''; // Clear loading message

            if (data.error) {
                console.error(data.error);
                return;
            }

            const itemsPerPage = 4; // Number of images per page
            const numPages = Math.ceil(data.length / itemsPerPage);
            let currentPage = 1;

            function showImagesOnPage(page) {
                resultsContainer.innerHTML = ''; // Clear previous images

                const startIndex = (page - 1) * itemsPerPage;
                const endIndex = Math.min(startIndex + itemsPerPage, data.length);

                for (let i = startIndex; i < endIndex; i++) {
                    const img = document.createElement('img');
                    img.src = data[i];
                    img.alt = 'Generated Image';
                    img.className = 'grid-image';

                    // Create an anchor tag to open the image in a new tab or window
                    const anchor = document.createElement('a');
                    anchor.href = data[i];
                    anchor.target = '_blank';
                    anchor.appendChild(img);

                    resultsContainer.appendChild(anchor);
                }
            }

            showImagesOnPage(currentPage);

            // Pagination links
            const paginationContainer = document.getElementById('pagination');
            paginationContainer.innerHTML = '';

            for (let page = 1; page <= numPages; page++) {
                const pageLink = document.createElement('a');
                pageLink.textContent = page;
                pageLink.href = '#';
                pageLink.addEventListener('click', function(event) {
                    event.preventDefault();
                    currentPage = page;
                    showImagesOnPage(currentPage);
                });
                paginationContainer.appendChild(pageLink);
            }
        })
        .catch(error => {
            resultsContainer.innerHTML = ''; // Clear loading message
            console.error('Error:', error);
        });
    });
</script>

    
</body>
</html>