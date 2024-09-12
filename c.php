<!DOCTYPE html>
<html>
<head>
    <title>Search Example</title>
</head>
<body>
    <form method="GET" action="#">
        <input type="text" name="query" placeholder="Search...">
        <input type="submit" value="Search">
    </form>
    <div>
    <h1>Search Results</h1>

<?php
if (isset($_GET['query'])) {
    $searchQuery = $_GET['query'];
    echo "You searched for: " . htmlspecialchars($searchQuery);
} else {
    echo "Please enter a search term.";
}
?>
      </div>
</body>
</html>
