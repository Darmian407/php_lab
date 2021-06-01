<!-- Head Template -->
<?php echo view('templates/head') ?>
<!-- NavBar -->
<?php echo view('templates/nav') ?>

<div class="uk-container uk-height-viewport" id="container">

    <div class="uk-child-width-expand@l uk-text-center" uk-grid>
        <div id="precio" class="uk-card uk-card-body">
            <h1>Suscribirse</h1>
            <h3 class="uk-text-muted">Obtenga acceso todos los Documentos, Audiolibros, Libros, Podcasts, Revistas y Partituras</h3>
        </div>
    </div>

    <div class="uk-child-width-expand@m uk-text-center" uk-grid>
        <div>

            <div class="uk-card uk-card-default uk-card-body">
                <li id="money" class="uk-margin-bottom uk-text-large"><strong>Precio: $8,99 </strong></li>
                <hr class="uk-divider-small">
                <li class="uk-margin-bottom">Lea desde la comodidad de cualquier tipo de dispositivo</li>
                <hr class="uk-divider-small">
                <li class="uk-margin-bottom">Amplia variedad de contenido para todas las edades</li>
                <hr class="uk-divider-small">
                <li class="uk-margin-bottom">Cancele en cualquier momento</li>
                <hr class="uk-divider-small">
                <div id="paypal-payment-button" class="form-group" ></div>
            </div>

        </div>
    </div>

</div>

<script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ&disable-funding=credit,card"></script>
<script>
    paypal.Buttons({
        style: {
            color: 'blue',
            shape: 'pill'
        },
        createOrder: function(data, actions) {
            return actions.order.create({
                purchase_units: [{
                    amount: {
                        value: '8.99'
                    }
                }]
            });
        },
        onApprove: function(data, actions) {
            return actions.order.capture().then(function(details) {
                console.log(details)
                window.location.replace("paypal/success")
            })
        },
        onCancel: function(data) {
            window.location.replace("paypal/onCancel")
        }
    }).render('#paypal-payment-button');
</script>

<!-- Footer Template -->
<?php echo view('templates/footer') ?>