<?php 
include("../../config/config.php"); ?>
<?php include(DIRREQ."/lib/html/headerCalendar.php"); ?>
<?php $date=new \DateTime($_GET['date'],new \DateTimeZone('America/Sao_Paulo'));?>


<form name="formAdd" id="formAdd" method="post" action="<?php echo DIRPAGE.'/controllers/ControllerAdd.php'; ?>">
    Data: <input type="date" name="date" id="date" value="<?php echo $date->format("Y-m-d"); ?>"><br>
    Hora: <input type="time" name="time" id="time" value="<?php echo $date->format("H:i"); ?>"><br>
    Cliente: <input type="text" name="title" id="title"><br>
    Serviço: <input type="text" name="description" id="description"><br>
    Tempo de serviço:
    <select name="horasAtendimento" id="horasAtendimento">
        <option value="">Selecione</option>
        <option value="15">15m</option>
        <option value="30">30m</option>
        <option value="45">45m</option>
        <option value="60">1h</option>
        <option value="90">1h30m</option>
        <option value="120">2h</option>

    </select><br>
    <input type="submit" value="Agendar">
</form>

<?php include(DIRREQ."/lib/html/footerCalendar.php"); ?>

