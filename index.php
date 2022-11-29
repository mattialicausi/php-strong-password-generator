<?php

session_start();

include __DIR__ . '/variables/variables.php';
include __DIR__ . '/functions/functions.php';

?>

<?php include './template/header.php'; ?>



<main>
    <h2 class="text-center text-white p-2">Genera una password sicura</h2>
    <div class="container-alert rounded-2 p-4 container mb-4">
        Lorem ipsum dolor sit am
    </div>

    <div class="container-form container p-4 rounded-2">
        <form action="index.php" method="GET">

            <div class="container-input d-flex justify-content-between">
                <h3>Lunghezza password:</h3>
                <input type="number" name="passLen" id="passLen">
            </div>

            <div class="container-btn">
                <button type="submit" class="btn btn-primary">Genera</button>
                <button type="reset" class="btn btn-secondary">Annulla</button>
            </div>

        </form>
    </div>
</main>


</body>

</html>