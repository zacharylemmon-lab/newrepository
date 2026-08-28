<?php
session_start();
$page_title = "How it works | Book Drop";
include('includes/header.php');
include('includes/nav.php');
?>
<!-- Start of content 1 -->
<div class="container pt-5">
    <div class="row">
        <h1 class="text-center">How Book Drop works</h1>
        <hr />
        <h3 class="pt-5">The problem</h3>
        <p>
            The library gives out books based on a paper sheet and a stamp on the book itself.
            This doesn't work well because it can easily be lost which means that books that have been loaned 
            won't be returned if the loan sheet is lost because nobody will know they've been taken out.
        </p>
        <h3 class="pt-4">Who it's for</h3>
        <p>
            Librarians that need to log book loans and keep track of their book stock.
        </p>
        <h3 class="pt-4">What it does</h3>
        <ul>
            <li>Lets a signed-in monitor log a loan — book, borrower, and due-back date</li>
            <li>Shows anyone, monitor or staff, a live public list of what's currently out</li>
            <li>Flags anything overdue</li>
            <li>Lets a monitor mark books as returned, or delete a mistaken entry</li>
        </ul>
    </div>
</div>

<?php
include('includes/footer.php');
?>
