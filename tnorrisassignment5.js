<html>
   <head>
      <script>
         var callbackFunction = function(data) {
         var wind = data.query.results.channel.wind;
         alert(wind.chill);};
      </script>
   </head>
</html>