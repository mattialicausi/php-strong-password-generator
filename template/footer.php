<?php>
 
    <footer class="container">
        <div class="container-password container rounded-2 p-3 text-center rounded-2 p-3 bg-primary">
            <h2 class="text-white">La tua password è </h2><br>
                <h2 class="text-white"> <?php echo $_SESSION['passwordGenerata']; ?>
</h2>

</div>


<div class="btn-primary btn mt-2 text-center">
    <a class="text-white" href="../php-strong-password-generator">Torna indietro</a>
</div>

</footer>