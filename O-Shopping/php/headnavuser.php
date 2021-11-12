
<?php
    require_once 'process.php';
    if (isset($_SESSION['id']) && isset($_SESSION['username'])) {

    
?>
<header id=header>
    <nav class="navbar navbar-expand-lg nav-link navbar-dark bg-danger justify-content-around">
        
        <ul class="nav nav-pills mr-auto p-y-2">
            <li role="presentation"><a href="" class="nav-item nav-link text-white text-center"><i class="fas fa-home"> Home</i></a></li>
        </ul>

        
        <ul class="nav nav-pills p-y-2">
            <li role="presentation"><a href="" class="nav-item nav-link text-white text-center"><i class=""></i> Hello, <?php echo $_SESSION['name']; ?></a></li>
        </ul>
     

        <ul class="nav nav-pills p-y-2">
            <li role="presentation"><a href="index.php" class="nav-item nav-link text-white text-center"><i class="fas fa-sign-in-alt"></i> Log out</a></li>
        </ul>
    
        
       
    </nav>
</header>

<?php
    }else{
        
    }
?>