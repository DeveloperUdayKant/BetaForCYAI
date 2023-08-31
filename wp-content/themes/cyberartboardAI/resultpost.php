<?PHP

echo '<center>';
echo '<div class="grid-container">';
$folderPath =  './wp-content/themes/cyberartboardAI/out/'; 

// echo $folderPath;

$allowedExtensions = ['jpg', 'jpeg', 'png', 'gif']; 

$files = scandir($folderPath);

$perPage = 32;
$totalFiles = count($files)-2;

if (isset($_GET['page'])) {
    // $currentPage = $_GET['page'];
    $currentPage = max(1, intval($_GET['page']));
} else {
    $currentPage = 1;
}

$startIndex = ($currentPage - 1) * $perPage;

// $endIndex = $startIndex + $perPage;
$endIndex = min($startIndex + $perPage, $totalFiles);

$visibleFiles = array_slice($files, 2); // Remove . and .. entries
shuffle($visibleFiles);
if (!isset($_SESSION['shuffled_order'])) {
    $_SESSION['shuffled_order'] = $visibleFiles;
} else {
    $visibleFiles = $_SESSION['shuffled_order'];
}
$visibleFiles = array_slice($visibleFiles, $startIndex, $perPage);


echo '<div class="grid-container">';
echo '<p class="grid-label">Design Billboard</p>';
echo '<div class="image-grid">'; // Added a new div for the grid

foreach ($visibleFiles as $file) {
    $extension = strtolower(pathinfo($file, PATHINFO_EXTENSION));
    if (in_array($extension, $allowedExtensions)) {
        $filePath = $folderPath . '/' . $file;
        // $filePath = get_template_directory_uri() . '/out/' . $file;
        echo '<div class="grid-item">';
        echo '<img src="' . $filePath . '" alt="' . $file . '" class="grid-image">';
        echo '</div>';
    }
}

echo '</div>'; // Close the image-grid div

// Pagination links
$totalPages = ceil($totalFiles / $perPage);
echo '<div class="pagination-container">';
echo '<div class="pagination">';
echo '<a href="?page=1"><h3>More</h3></a>';
// if ($currentPage > 1) {
//     echo '<a href="?page=1">&laquo; First</a>';
//     echo '<a href="?page=' . ($currentPage - 1) . '">&lsaquo; Previous</a>';
// }

// for ($i = 1; $i <= $totalPages; $i++) {
//     if ($i == $currentPage) {
//         echo '<a href="?page=' . $i . '" class="active">' . $i . '</a>';
//     } elseif (abs($currentPage - $i) <= 2 || $i === 1 || $i === $totalPages) {
//         echo '<a href="?page=' . $i . '">' . $i . '</a>';
//     } else {
//         echo '<span></span>';
//     }
// }

// if ($currentPage < $totalPages) {
//     echo '<a href="?page=' . ($currentPage + 1) . '">Next &rsaquo;</a>';
//     echo '<a href="?page=' . $totalPages . '">Last &raquo;</a>';
// }
echo '</div>';
echo '</div>';

echo '</div>'; // Close the grid-container div
echo '</center>';

    ?>