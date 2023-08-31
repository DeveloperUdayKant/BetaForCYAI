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
            top: -350px;
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
        }
        #generate-more-container {
            text-align: center;
            margin: 10px 0;
        }
        #category,#product{
            width: 200px;
            height: 30px;
            background-color: transparent;
            border: 0px;
            outline-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: coral;
        }
        option{
            width: 200px;
            height: 30px;
            background-color: #EEEDED;
            border: 0px;
            font-size: 15px;
            outline-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            border-bottom-color: coral;
        }
        
        #prompt,#negative_prompt{
            width: 400px;
            height: 50px;
            border: 0px;
            outline-style: none;
            border-bottom-width: 1px;
            border-bottom-style: solid;
            font-size: large;
        }
        #prompt{
            background-color: #DBDFEA;
            color: black;
            font-weight: lighter;
            padding: 4px;
            border-bottom-color: green;
        }
        #negative_prompt{
            background-color: #DBDFEA;
            color: black;
            font-weight: lighter;
            padding: 4px;
            border-bottom-color: #FF4A4A;
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
        
    </style>
</head>
<body bgcolor="#EEEEEE">
<center>
<div class="content-all">
    <img src="/wp-content/uploads/2023/05/Cyber-logo-1.png" width="35%" height=auto alt="logo"/>
    <hr style="width: 67%;margin-left: 0px;height: 1px;background-color: coral;border:1px solid coral;">
    <form id="generate-form">
        <img class="designLogo" src="/wp-content/uploads/2023/05/Design-your-Own.png" width="40" height:auto/>
        <select id="category" name="category" required>
            <option selected disabled>CATEGORIES</option>
            <option>SCHOOLWEAR</option>
            <option>BUSINESS WEAR</option>
            <option>SPORTS WEAR</option>
            <option>WORK WEAR</option>
            <option>PROMOTIONAL</option>
            <option>LEISUREWEAR</option>
        </select>
        <select id="product" name="product" required>
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
        <br>
        <br>
        <h2 style="position: relative;left: 80px; font-family:verdana;font-weight: lighter;font-size: medium;padding:10px;background-color: #DBDFEA;width: fit-content;border-radius: 50px;">DESIGN REQUEST FORM:</h2>
        <label for="prompt" style="font-size: small;">Prompt:</label><br>
        <textarea placeholder="Description of what you want to generate" id="prompt" name="prompt"  required></textarea>
        <br>
        <label for="negative_prompt" style="font-size: small;">Negative Prompt:</label><br>
        <textarea placeholder="What you want to avoid generating" id="negative_prompt" name="negative_prompt"  required></textarea>
        <br>
        <input type="hidden" id="width" name="width" value="512">
        <input type="hidden" id="height" name="height" value="512">
        <input type="hidden" id="steps" name="steps" value="50">
        <input type="hidden" id="seed" name="seed" value="0">
        <input type="hidden" id="cfg_scale" name="cfg_scale" value="7">
        <input type="hidden" id="samples" name="samples" value="4">
        <input type="hidden" id="style_preset" name="style_preset" value="enhance">
        <input type="submit" value="Generate">
    </form>
    <div id="results">
        <!-- The generated images will be displayed here -->
    </div>
    <!-- Modal for displaying generated images -->
    <div id="myModal" class="modal">
        <div class="modal-content">
            <!-- The generated images in the modal will be displayed here -->
        </div>
        <div class="pagination" id="pagination">
            <!-- The pagination links will be displayed here -->
        </div>
        
        <span class="close" id="modal-close">&times;</span>
    </div>
</div>
</center>    
    <script>
        // JavaScript code to handle form submission and display images with pagination in popup
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
    
                const itemsPerPage = 2;
                const numPages = Math.ceil(data.length / itemsPerPage);
                let currentPage = 1;
    
                function showImagesOnPage(page) {
                    const modalContent = document.querySelector('.modal-content');
                    modalContent.innerHTML = ''; // Clear previous images
    
                    const startIndex = (page - 1) * itemsPerPage;
    
                    const endIndex = Math.min(startIndex + itemsPerPage, data.length);
    
                    for (let i = startIndex; i < endIndex; i++) {
                        const img = document.createElement('img');
                        img.src = data[i];
                        img.alt = 'Generated Image';
                        img.className = 'modal-image';
    
                        // Create an anchor tag to open the image in a new tab or window
                        const anchor = document.createElement('a');
                        anchor.href = data[i];
                        anchor.target = '_blank';
                        anchor.appendChild(img);
    
                        modalContent.appendChild(anchor);
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
    
                const modal = document.getElementById('myModal');
                modal.style.display = 'inline-block';
    
                
            })
            .catch(error => {
                resultsContainer.innerHTML = ''; // Clear loading message
                console.error('Error:', error);
            });
        });
    
        // Close the modal when clicking on the close button (x)
        const modalClose = document.querySelector('.close');
        modalClose.addEventListener('click', function() {
            const modal = document.getElementById('myModal');
            modal.style.display = 'none';
        });
    </script>
    
</body>
</html>
