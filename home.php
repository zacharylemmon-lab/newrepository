<?php
session_start();

$page_title = "Home Page | Book Drop";

include('includes/header.php');
include('includes/nav.php');
?>
<h1 class="pt-5 pb-4 text-center">Home Page</h1>
<p class="text-center"> Welcome to the Book Drop home page! </p>
<button type="button" class="picture-btn" style ="border: none; background: none;  margin-left: auto; margin-right: auto; display: block;">
    <a href="view_loans.php">
        <img src="https://img.magnific.com/free-photo/glad-young-man-resting-cafe-reading-interesting-book-drinking-tea_8353-6242.jpg?semt=ais_hybrid&w=740&q=80" class="img-fluid mx-auto d-block" alt="View Loans" width = "500" height ="500">
    </a>
</button>
<?php include('includes/footer.php'); ?>