<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
</body>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
     
      var pusher = new Pusher('eb904004d0d9e913267f', {
        // encrypted: true,
        cluster : 'ap1'
      });

      // Subscribe to the channel we specified in our Laravel Event
      var channel = pusher.subscribe('kbtc-2to5-development');

      // Bind a function to a Event (the full Laravel class)
      channel.bind('order', function(data) {
        console.log(data);
      });
    </script>
</html>