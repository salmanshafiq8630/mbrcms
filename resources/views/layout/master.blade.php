<html>
<head>
    <title>BMR PAGES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
 
 
</head>
<body>
@include('partials.nav.parentMenus')
<div class="container">
    @yield('content')
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(function(){
       
        var dropdownMenu = $(this).children(".dropdown-menu");
        dropdownMenu.parent().toggleClass("open");

    });
});     
</script>
</body>
</html>