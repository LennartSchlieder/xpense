<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>xpense beta</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

  <div class="container">
  <div class="row">
  <div class="col-md-12">
    <h1>xPense</h1>
<div id="ausg_wg">
<h2>Letzte Ausgaben (WG)</h2>

<script type="text/javascript">
// Using the core $.ajax() method
$.ajax({
// the URL for the request
url: "get_table.php",
// the data to send (will be converted to a query string)
data: {
id: 123
},
// whether this is a POST or GET request
type: "GET",
// the type of data we expect back
dataType : "text",
// code to run if the request succeeds;
// the response is passed to the function
success: function( text ) {
$( "<div class=\"bla\"/>").html( text ).appendTo( "#ausg_wg" );
},
// code to run if the request fails; the raw request and
// status codes are passed to the function
error: function( xhr, status, errorThrown ) {
alert( "Sorry, there was a problem!" );
console.log( "Error: " + errorThrown );
console.log( "Status: " + status );
console.dir( xhr );
},
// code to run regardless of success or failure
complete: function( xhr, status ) {
alert( "The request is complete!" );
}
});</script>

   </div>
</div></div></div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>