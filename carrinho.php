<?php 
include('header.php');
include('scripts.php');
include('links.php');
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
?>
<div class="container-fluid bg-3 text-center">    
  <div class="panel panel-primary">
        <div class="panel-heading">CARRINHO DE COMPRAS</div> 
            <div class="panel-body" style="display:none">
  <form method="post">
    <table class="table table-bordered table-striped">
      <thead>
        <tr class="active">
          <th style='text-align:center;vertical-align:middle'>ID Produto</th>  
          <th style='text-align:center;vertical-align:middle'>Produto</th>       
          <th style='text-align:center;vertical-align:middle'>Tipo Produto</th>
          <th style="text-align:center;vertical-align:middle;width:150px;">Quantidade</th>
          <th style='text-align:center;vertical-align:middle'>Valor Unid.(R$)</th>
          <th style='text-align:center;vertical-align:middle'>Imposto(%)</th>
          <th style='text-align:center;vertical-align:middle'>Imposto Total(R$)</th>
          <th style='text-align:center;vertical-align:middle'>Valor Total(R$)</th>
        </tr>
      </thead>
      <tbody>
        <?php //while($user = pg_fetch_object($users)): ?>   
          <tr align="left">
            <td style='text-align:center;vertical-align:middle'><?=$sn++?></td>
            <td style='text-align:center;vertical-align:middle'><?='Produto A'?></td>
            <td style='text-align:center;vertical-align:middle'><?='Tipo 1'?></td>
            <td style='text-align:center;vertical-align:middle'>
              <button type="button" class="btn btn-box-tool btn-menos pull-left" style="padding: 4px"><i class="fa fa-minus"></i></button>
              <input value="<?php $qtd = 150; echo $qtd;?>" id="qtd_cart" style="border-radius:5px;text-align:center;width:70px;">
              <button type="button" class="btn btn-box-tool btn-mais pull-right" style="padding: 4px"><i class="fa fa-plus"></i></button>
            </td>
            <td style='text-align:center;vertical-align:middle'><input value="<?php $vlr_und = 22.50; echo $vlr_und;?>" id="vlr_und" style="border-radius:5px;text-align:center;width:70px;" disabled>
          </td>
            <td style='text-align:center;vertical-align:middle'><input value="<?php $imposto = 10; echo $imposto;?>" id="imposto" style="border-radius:5px;text-align:center;width:70px;" disabled>
          </td>
            <td style='text-align:center;vertical-align:middle'>
            <input id="imp_total" value="<?php $vlr_total = ($qtd * $vlr_und)*$imposto/100; echo $vlr_total;?>" style="border-radius:5px;text-align:center;width:70px;" disabled>
            </td>
            <td style='text-align:center;vertical-align:middle'>
            <input id="vlr_total" value="<?php $vlr_total = $qtd * $vlr_und; echo $vlr_total;?>" style="border-radius:5px;text-align:center;width:70px;" disabled>
            </td>
          </tr>
          <?php //endwhile; ?>   
        </tbody>
      </table>
            <input type="submit" class="btn btn-success" name="concluir_venda" id="concluir_venda" value="Concluir Venda" action="index.php" href="index.php">
    </form>
</div>
 
</div>
</div>  
<?php
include('footer.php');
?>
<script>
<?php include 'mercado.js';?>
</script>