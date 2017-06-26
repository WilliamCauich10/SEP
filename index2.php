<?php
//Include the event calendar functions file
include_once('functions.php');
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <!-- <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> -->
    <!-- <title>PHP Event Calendar by CodexWorld</title> -->
    <!-- Include the stylesheet -->
    <!-- <link type="text/css" rel="stylesheet" href="/SEP/css/style.css"/> -->
    <link type="text/css" rel="stylesheet" href="/SEP/css/style2.css"/>
    <!-- <link type="text/css" rel="stylesheet" href="/SEP/bootstrap.css"/> -->

</head>
<body>
    <!-- Display event calendar -->
    <div id="calendar_div">
        <?php echo getCalender(); ?>
    </div>
    <!-- /.container -->
            <div class="bar-footer">
        <!-- <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script> -->
        <!-- FooterLinksRenponsive -->
        <ins class="adsbygoogle"
             style="display:block"
             data-ad-client="ca-pub-5750766974376423"
             data-ad-slot="2211144895"
             data-ad-format="link"></ins>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
        </div>
            <!-- JavaScript -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
                <script src="http://demos.codexworld.com/includes/js/bootstrap.js"></script>
        <!-- Place this tag in your head or just before your close body tag. -->
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <!-- </body> -->
</body>
<script type="text/javascript">
    $(document).ready(function(){
            // $('.date_cell').mouseenter(function(){
            //     date = $(this).attr('date');
            //     $(".date_popup_wrap").fadeOut();
            //     $("#date_popup_"+date).fadeIn();    
            // });
            // $('.date_cell').mouseleave(function(){
            //     $(".date_popup_wrap").fadeOut();        
            // });
            $('.month_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $('.year_dropdown').on('change',function(){
                getCalendar('calendar_div',$('.year_dropdown').val(),$('.month_dropdown').val());
            });
            $(document).click(function(){
                $('#event_list').slideUp('slow');
            });
        });
</script>
</html>