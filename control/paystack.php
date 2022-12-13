<html>
  <head>
    <script src="https://js.paystack.co/v1/inline.js"></script> 
  </head>
  <body onload="payWithPaystack();">
  </body>
<script>
function payWithPaystack() {
  let handler = PaystackPop.setup({
    key: "<?=PS_KEY?>", 
    first_name: "<?=$fname?>",
    last_name: "<?=$sname?>",
    email: "<?=$email?>",
    phone: "<?=$mobile?>",
    currency: "GHS",
    channels: ["mobile_money"],
    amount: <?=($amt * 100)?>,
    ref: "<?=$ref?>", 
    // label: "Optional string that replaces customer email"
    onClose: function(){
      alert('Window Transaction closed.');
    },
    callback: function(response){
      let message = 'Payment complete! Reference: ' + response.reference;
      alert(message);
    }
  });

  handler.openIframe();
}
</script>
</html>