<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
<script src="https://www.paypal.com/sdk/js?client-id=
AaNHzMJyEE45aEplocUcYkcdZfqfJ492LBbzH_nKtCNZxBDSHAX3mV6kZ_glAJUZLVgd5MGuNVWarmVd"></script>
    
</head>
<body>
    
<div id="paypal-button-container"></div>

<script>
    paypal.Buttons({
        style:{
            color: 'blue',
            shape:'pill',
            label: 'pay'
        },
        createOrder: function(data, actions){
            return actions.order.create({
                purchase_units: [{
                    amount:{
                        value: 5.000
                    }
                }]
            });
        }
    }).render('#paypal-button-container');
</script>
</body>
</html>