$(document).ready(function() {
    $('ul.nav li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeIn(0);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(0).fadeOut(0);
});

        $('#div-404').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "404.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
        $('#div-about').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "clientes.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
        $('#div-vendedores').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: 'vendedores.php',
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-contact').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "contact.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-portfolio-1-col').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "portfolio-1-col.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
        $('#div-portfolio-2-col').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "portfolio-2-col.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-portfolio-3-col').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "portfolio-3-col.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-portfolio-4-col').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "portfolio-4-col.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-portfolio-item').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "portfolio-item.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
     $('#div-blog-home-1').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "blog-home-1.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-blog-home-2').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "blog-home-2.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-blog-post').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "blog-post.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
    $('#div-full-width').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "full-width.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
        $('#div-sidebar').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "sidebar.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
            $('#div-faq').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "faq.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
     $('#div-pricing').click(function(){

            $.ajax({
                type: "POST",
                //data: dataString,
                url: "pricing.php",
                success: function(a) {

                    $('#div-results').html(a);

                }
            });
        });
});