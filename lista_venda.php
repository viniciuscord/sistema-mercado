<?php 
include('header.php');
include('scripts.php');
include('links.php');
include('info_modal.php');
// $users = $obj->getUsers();
$sn=1;
if(isset($_POST['update'])){
    // $user = $obj->getUserById();
    // $_SESSION['user'] = pg_fetch_object($user);
    header('location:edit.php');
}
if(isset($_POST['delete'])){
   $ret_val = $obj->deleteuser();
   if($ret_val==1){
       
      echo "<script language='javascript'>";
      echo "alert('Record Deleted Successfully'){
          window.location.reload();
      }";
      echo "</script>";
  }
}
include('links.php');
?>
<div class="container-fluid bg-3 text-center">    
  <div class="panel panel-primary">
    <div class="panel-heading">LISTA DE VENDAS</div><div class="panel-body">
        <table class="table table-bordered table-striped">
    <thead>
      <tr class="active">
        <th style='text-align:center;vertical-align:middle'>ID Venda</th>  
        <th style='text-align:center;vertical-align:middle'>Produto</th>       
        <th style='text-align:center;vertical-align:middle'>Tipo Produto</th>
        <th style='text-align:center;vertical-align:middle'>Quantidade</th>
        <th style='text-align:center;vertical-align:middle'>Valor Unid.(R$)</th>
        <th style='text-align:center;vertical-align:middle'>Imposto Unid.(%)</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <?php //while($user = pg_fetch_object($users)): ?>   
      <tr align="left">
        <td style='text-align:center;vertical-align:middle'><?=$sn++?></td>
        <td style='text-align:center;vertical-align:middle'><?='Produto A'?></td>
        <td style='text-align:center;vertical-align:middle'><?='Tipo 1'?></td>
        <td style='text-align:center;vertical-align:middle'><?='8'?></td>
        <td style='text-align:center;vertical-align:middle'><?='20'?></td>
        <td style='text-align:center;vertical-align:middle'><?='10'?></td>
        <td style='text-align:center;vertical-align:middle'>
            <!-- <form method="post"> -->
                <!-- <input href="insert.php" type="submit" class="btn btn-success" name= "update" value="Alterar" ><span class="glyphicon glyphicon-plus-sign"></span>  -->
                <!-- <a href="edit.php" class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Alterar</a> 
                <a href="edit.php" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span> Excluir</a>  -->
                <button class="btn btn-info" data-toggle="modal" data-target="#modal_mensagem"><span class="glyphicon glyphicon-info-sign"></span></button>
                <!-- <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_mensagem">Launch Default Modal</button> -->
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalExemplo">
                    Abrir modal de demonstração
                </button> -->
                
                <!-- <input type="submit" onClick="return confirm('Please confirm deletion');" class="btn btn-danger" name= "delete" value="Excluir"> -->
                <!-- <input type="hidden" value="<?=$user->id?>" name="id"> -->
            <!-- </form> -->
            </td>
        </tr>
        <?php //endwhile; ?>   
        </tbody>
    </table>
    </div>
</div>
<?php
include('footer.php');
?>
<script><?php include 'mercado.js';?></script>

