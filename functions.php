<?php
/*
 * Function requested by Ajax
 */
if(isset($_POST['func']) && !empty($_POST['func'])){
    switch($_POST['func']){
        case 'getCalender':
            getCalender($_POST['year'],$_POST['month']);
            break;
        case 'getEvents':
            getEvents($_POST['date']);
            break;
        default:
            break;
    }
}

/*
 * Get calendar full HTML
 */
function getCalender($year = '',$month = '')
{
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    $dateYear = ($year != '')?$year:date("Y");
    $dateMonth = ($month != '')?$month:date("m");
    $date = $dateYear.'-'.$dateMonth.'-01';
    $currentMonthFirstDay = date("N",strtotime($date));
    $totalDaysOfMonth = cal_days_in_month(CAL_GREGORIAN,$dateMonth,$dateYear);
    $totalDaysOfMonthDisplay = ($currentMonthFirstDay == 7)?($totalDaysOfMonth):($totalDaysOfMonth + $currentMonthFirstDay);
    $boxDisplay = ($totalDaysOfMonthDisplay <= 35)?35:42;
    // echo date("Y-m-d");
    // echo date("r"); 
    $fecha=time(); 
    $movhoras = -7; 
    $fecha = $fecha+($movhoras * 60 * 60); 
    // $fecha = date("Y-m-d", $fecha );
    // echo "<br>";
    // echo $fecha;
?>
    <div id="calender_section">
        <h2>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' - 1 Month')); ?>','<?php echo date("m",strtotime($date.' - 1 Month')); ?>');">&lt;&lt;</a>
            <select name="month_dropdown" class="month_dropdown dropdown"><?php echo getAllMonths($dateMonth); ?></select>
            <select name="year_dropdown" class="year_dropdown dropdown"><?php echo getYearList($dateYear); ?></select>
            <a href="javascript:void(0);" onclick="getCalendar('calendar_div','<?php echo date("Y",strtotime($date.' + 1 Month')); ?>','<?php echo date("m",strtotime($date.' + 1 Month')); ?>');">&gt;&gt;</a>
        </h2>
        <div id="event_list" class="none"></div>
        <div id="calender_section_top">
            <ul>
                <li>Dom</li>
                <li>Lun</li>
                <li>Mar</li>
                <li>Mie</li>
                <li>Jue</li>
                <li>Vie</li>
                <li>Sab</li>
            </ul>
        </div>
        <div id="calender_section_bot">
            <ul>
            <?php 
                $dayCount = 1; 
                for($cb=1;$cb<=$boxDisplay;$cb++){
                    if(($cb >= $currentMonthFirstDay+1 || $currentMonthFirstDay == 7) && $cb <= ($totalDaysOfMonthDisplay)){
                        //Current date
                        $currentDate = $dateYear.'-'.$dateMonth.'-'.$dayCount;
                        // echo $fecha."--";
                        $eventNum = 0;
                        //Include db configuration file
                        include 'dbConfig.php';
                        //Get number of events based on the current date
                        $result = $db->query("SELECT title FROM events WHERE date = '".$currentDate."' AND status = 1");
                        $result2 = $db->query("SELECT title FROM events WHERE date = '".$currentDate."' AND status = 0");
                        $eventNum = $result->num_rows;
                        $eventNum2 = $result2->num_rows;
                        //Define date cell color
                        // if(strtotime($currentDate) == strtotime(date("Y-m-d"))){
                        if(strtotime($currentDate) == strtotime(date("Y-m-d",$fecha))){
                            echo '<li date="'.$currentDate.'" class="grey date_cell">';
                            if ($eventNum > 0) {
                                echo "<a href=\"javascript:;\" onclick=\"getEvents('$currentDate');\" style =\"position:relative;top: 30px;right: 10px;\">ver events</a>";
                            }
                        }elseif($eventNum > 0){
                            echo '<li date="'.$currentDate.'" class="light_sky date_cell">';
                            echo "<a href=\"javascript:;\" onclick=\"getEvents('$currentDate');\" style =\"position:relative;top: 30px;right: 10px;\">ver events</a>";
                        }elseif($eventNum2 > 0){
                            echo '<li date="'.$currentDate.'" class="red date_cell">';
                            if ($eventNum2 > 0) {
                                echo "<a href=\"javascript:;\" onclick=\"getEvents('$currentDate');\" style =\"position:relative;top: 30px;right: 10px;\">ver events</a>";
                            }
                        }else{
                            echo '<li date="'.$currentDate.'" class="date_cell">';
                        }
                        //Date cell
                        echo '<span>';
                        echo $dayCount;
                        echo '</span>';
                        //Hover event popup
                        echo '<div id="date_popup_'.$currentDate.'" class="date_popup_wrap none">';
                        echo '<div class="date_window">';
                        echo '<div class="popup_event">Events ('.$eventNum.')</div>';
                        echo '</div></div>';
                        echo '</li>';
                        $dayCount++;
            ?>
            <?php }else{ ?>
                <li><span>&nbsp;</span></li>
            <?php } } ?>
            </ul>
        </div>
    </div>

        <script type="text/javascript">
        function prueba(){
            alert("hola");
        }
        function getCalendar(target_div,year,month){
            $.ajax({
                type:'POST',
                url:'/SEP/functions.php',
                data:'func=getCalender&year='+year+'&month='+month,
                success:function(html){
                    // alert(html);
                    $('#'+target_div).html(html);
                }
            });
        }
        
        function getEvents(date){
            $.ajax({
                type:'POST',
                url:'/SEP/functions.php',
                data:'func=getEvents&date='+date,
                success:function(html){
                    $('#event_list').html(html);
                    $('#event_list').slideDown('slow');
                }
            });
        }
        
        function addEvent(date){
            $.ajax({
                type:'POST',
                url:'/SEP/functions.php',
                data:'func=addEvent&date='+date,
                success:function(html){
                    $('#event_list').html(html);
                    $('#event_list').slideDown('slow');
                }
            });
        }
           $(document).ready(function(){
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
<?php
}

/*
 * Get months options list.
 */
function getAllMonths($selected = ''){
    $options = '';
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    $f=7;
    for($i=1;$i<=12;$i++)
    {
        $value = ($i < 10)?'0'.$i:$i;
        $selectedOpt = ($value == $selected)?'selected':'';
        // $options .= '<option value="'.$value.'" '.$selectedOpt.' >'.date("F", mktime(0, 0, 0, $i+1, 0, 0)).'</option>';
        $options .= '<option value="'.$value.'" '.$selectedOpt.' >'.$meses[date('n')-$f].'</option>';
        $f--;
    }
    return $options;
}

/*
 * Get years options list.
 */
function getYearList($selected = ''){
    $options = '';
    for($i=2015;$i<=2025;$i++)
    {
        $selectedOpt = ($i == $selected)?'selected':'';
        $options .= '<option value="'.$i.'" '.$selectedOpt.' >'.$i.'</option>';
    }
    return $options;
}

/*
 * Get events by date
 */
function getEvents($date = ''){
    //Include db configuration file
    $dias = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
    $meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"); 
    // echo $dias[date('w')]." ".date('d')." de ".$meses[date('n')-1]. " del ".date('Y') ;
    include 'dbConfig.php';
    $eventListHTML = '';
    $date = $date?$date:date("Y-m-d");
    //Get events based on the current date
    $result = $db->query("SELECT title,created FROM events WHERE date = '".$date."'");
    if($result->num_rows > 0){
        setlocale(LC_TIME, "C");
    $m=strftime("%m",strtotime($date))-1;
    $f=strftime("%d",strtotime($date));
    $d=strftime("%w",strtotime($date));
        // $eventListHTML = '<h2>Events on '.date("l, d M Y",strftime("%V,%m,%Y",strtotime($date))).'</h2>';
        $eventListHTML = '<h2>Eventos para '.$dias[$d]." ".$f." de ".$meses[$m]. " del ".date('Y').'</h2>';
        $eventListHTML .= '<ul>';
        while($row = $result->fetch_assoc()){ 
            $hora = date_create($row['created']);
            $eventListHTML .= '<li>'.$row['title'].' a las '.date_format($hora, 'H:i').' </li>';
        }
        $eventListHTML .= '</ul>';
    }
    echo $eventListHTML;
}
?>