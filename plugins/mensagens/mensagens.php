<?
@session_start();
#require_once "../../conn.php";
login();
//manter os nomes e codigo do usuario ativo para registro nas modificacoes at� que logged morra
//$_SESSION["user_detalhes"]=$_SESSION["user_detalhes"];
//$_SESSION["user_codigo"]=$_SESSION["user_codigo"];
?>
<img src="images/bt_relogio.png" style="float:left; padding-right: 3px; width: 24px;">
�ltimas altera��es no sistema:<br />
<?= controle('alteracao') ?>
