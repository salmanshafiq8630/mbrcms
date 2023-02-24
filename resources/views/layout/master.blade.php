<html>
<head>
    <title>BMR PAGES</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<style>
    .dropdown-menu .dropdown-menu{
    left: 100%;top: 0;
    }
    .dropdown-toggle::after {
    display: inline-block;
    margin-left: 0.255em;
    vertical-align: 0.255em;
    content: "";
    border-top: 0.3em solid;
    border-right: 0.3em solid transparent;
    border-bottom: 0;
    border-left: 0.3em solid transparent;
}
</style>
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