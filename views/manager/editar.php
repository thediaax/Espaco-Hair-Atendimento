<?php include("../../config/config.php"); ?>
<?php include(DIRREQ."/lib/html/headerCalendar.php"); ?>
<?php
$objEvents=new \Classes\ClassEvents();
$events=$objEvents->getEventsById($_GET['id']);
$date=new \DateTime($events['start']);
?>

<a id="delete" href="<?php echo DIRPAGE.'/controllers/ControllerDelete.php?id='.$_GET['id']; ?>"><img src="<?php echo DIRPAGE.'/assets/btnTrash.png' ?>" alt=""></a>

<form name="formEdit" id="formEdit" method="post" action="<?php echo DIRPAGE.'/controllers/ControllerEdit.php'; ?>">
    <input type="hidden" name="id" id="id" value="<?php echo $_GET['id']; ?>"><br>    
    Serviço: <input type="text" name="title" id="title" value="<?php echo $events['title']; ?>"><br>
    Cliente: <input type="text" name="description" id="description" value="<?php echo $events['description']; ?>"><br>
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    <input type="submit" value="Alterar agendamento">
</form>

<?php include(DIRREQ."/lib/html/footerCalendar.php"); ?>

