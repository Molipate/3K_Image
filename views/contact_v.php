<div class="canvas">

    <br>
    <br>
    <br>
    <br>Un ptit message ici ?
    <br>
    <br>
    <br>

    <form action="<?=BASE_URL?>index.php/main/sendMail" method="post">

        <fieldset>
            <legend>Nous contacter : </legend>

            <label for="name">Votre nom : </label>
            <input type="text" name="name" id="name"><br><br>

            <label for="email">Votre adresse email : </label>
            <input type="text" name="email" id="email"><br><br>

            <label for="msg">Votre message : </label>
            <textarea rows="5" name="msg" id="msg"></textarea>

            <br><br><br>
            <button>envoyer !</button>
        </fieldset>

    </form>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

</div>