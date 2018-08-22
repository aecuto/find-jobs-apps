<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/bootstrap-table.min.js"></script>
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    @yield('title')

    <link rel="shortcut icon" type="image/x-icon" href="https://www.jobnorththailand.com/images/company/logo/zNJMg25202.jpg" />

  </head>


  <body style="background-color: #f2f2f2;">

    @yield('navbar')

    @yield('content')

  </body>
</html>

<style>
  .bootstrap-table{
    background-color: white !important;
  }
</style>

<script>
    $(function() {
      
      $('a').click(function(){

        if($(this).attr('id')){
          localStorage.setItem('selectMenu', $(this).attr('id'));
        }
          //alert( $(this).attr('id') );
      });

      $('#v-pills-tab').on('click', function (e) {
        //save the latest tab; use cookies if you like 'em better:
        localStorage.setItem('selectMenu', $(e.target).attr('id'));
      });

      //go to the latest tab, if it exists:
      var selectMenu = localStorage.getItem('selectMenu');
      if (selectMenu) {
        $('#'+selectMenu).addClass('active');
      }

    });
</script>
