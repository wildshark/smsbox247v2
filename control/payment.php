<script src="https://checkout.flutterwave.com/v3.js"></script>
<script>
    function makePayment() {
        FlutterwaveCheckout({
            public_key: "FLWPUBK_TEST-SANDBOXDEMOKEY-X",
            tx_ref: "<?=$ref?>",
            amount: <?=$amt?>,
            currency: "<?=$currency?>",
            payment_options: "card, mobilemoneyghana",
            redirect_url: "https://glaciers.titanic.com/handle-flutterwave-payment",
            meta: {
                consumer_id: <?=$id?>,
                consumer_mac: "92a3-912ba-1192a",
            },
            customer: {
                email: "<?=$email?>",
                phone_number: "<?=$mobile?>",
                name: "<?=$name?>",
            },
            customizations: {
                title: "SMS BOX",
                description: "Payment for an awesome cruise",
                logo: "",
            },
        });
    }
    makePayment();
</script>