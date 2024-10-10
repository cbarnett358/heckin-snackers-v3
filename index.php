<?php 
include_once  './components/header.php';
include  './components/nav-tabs.php';
require './php/db.php'; 
?>

<div class="content-container">

    <?php include './components/products.php'; ?>

    <div id="app">
        <!-- Vue will mount here -->
        <h1>{{ message }}</h1>
        <add-to-cart></add-to-cart>
    </div>
</div>
<?php include './components/footer.php'; ?>
<script type="module" src="app.js"></script>
</body>
</html>
