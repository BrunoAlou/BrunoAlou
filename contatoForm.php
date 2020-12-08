<!DOCTYPE html>
<html>
<?php    
include ('header.php');
?>

<body>
    <?php    
    include ('nav.php');
    ?>
    <main class="page contact-us-page">
        <section class="clean-block clean-form dark">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Fale Comigo</h2>
                    <p></p>
                </div>
                <form>
                    <div class="form-group"><label>Nome</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Assunto</label><input class="form-control" type="text"></div>
                    <div class="form-group"><label>Email</label><input class="form-control" type="email"></div>
                    <div class="form-group"><label>Mensagem</label><textarea class="form-control"></textarea></div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Enviar</button></div>
                </form>
            </div>
        </section>
    </main>
    <?php include('footer.php'); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="./assets/js/script.min.js?h=a600b8e7e9619265383470da5f98b4f6"></script>
</body>

</html>