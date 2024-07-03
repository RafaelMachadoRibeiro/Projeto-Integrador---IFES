<?php
require_once 'templates/header.php';


?>

<link rel="stylesheet" href="css/evo-calendar.midnight-blue.min.css">
<link rel="stylesheet" href="css/evo-calendar.min.css">


<div class="hero">

    <div id="calendar"></div>

</div>

<!--- Java Script do calenario-->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/evo-calendar@1.1.2/evo-calendar/js/evo-calendar.min.js"></script>
<script src="js/evo-calendar.min.js"></script>

<script>
    $('#calendar').evoCalendar({
        'language': 'pt'
    });


    $(document).ready(function () {
        $('#calendar').evoCalendar({
            'theme': 'Midnight Blue'
        })
    });

    $('#calendar').evoCalendar('addCalendarEvent', {
        id: 'kNybja6',
        name: 'Trabalho PI',
        description: 'Apresentação do front end do trabalho de programação web',
        date: 'june 03, 2024',
        type: 'Trabalho'
    });
</script>

<?php

require_once 'templates/footer.php';

?>