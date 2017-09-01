<?php $pageTitle = "CLAMP Current Users" ?>
<?php $pageDescription = "Natural Language Processing Tool Documentation. Clamp Current Users." ?>
<?php include_once dirname(__FILE__) . '/views/header.php'; ?>

    <div class="container" align="center">
        <div class="page-header">
            <h1 class="text-center">CLAMP Demo</h1>
        </div>
        
        
        <form action="http://localhost:8080/clampdemo" method="POST">
        <textarea type="text" cols="86" rows="20" name="name"/>
        </textarea>

        <input class="btn btn-info"  type="submit">
    </form>
        </div>
        <p>&nbsp;</p>
    <!-- /container -->
<?php include_once dirname(__FILE__) . '/views/footer.php'; ?>