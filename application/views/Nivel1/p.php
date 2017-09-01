<?php 
header("Content-type: application/x-msdownload");
header("Content-Disposition: attachment; filename=$filename.xls");
 ?>
<table class="table table-striped" style="width: 1000px; font-size: 17px;"  >
  <thead>
    <tr>
      <th>Indicador</th>
      <th style=" width:150px;">Formula</th>
     <?php 
          $queryAño = $this -> db -> get('años');
          foreach ($queryAño -> result() as $queryAño) { ?>
          
            <th style=" width:70px;"><?= $queryAño -> Años; ?></th>
          
          <?php }
        ?>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php 
        $queryIndicador = $this -> db -> get('indicadores');
          foreach ($queryIndicador -> result() as $queryIndicador) {
     ?>
      <td><?= htmlentities($queryIndicador -> Nombre) ?></td>
      <td><?= $queryIndicador -> Forma_de_Calculo; ?></td>
         <?php 
            $queryAño2 = $this -> db -> get('años');
          foreach ($queryAño2 -> result() as $queryAño2) {
              $año = $queryAño2 -> Años;
            $queryValor = $this-> db->where('Nombre',$queryIndicador -> Nombre);
            $queryValor = $this-> db->where('Año',$queryAño2 -> Años);
            $queryValor = $this-> db->where('User',$usr);
            $queryValor = $this -> db -> get('IndAño');
            if ($queryValor -> num_rows()>0){
            foreach ($queryValor -> result() as $queryValor) {?>
              <td align="center"><?= $queryValor -> Valor; ?></td>
            <?php } 
            } else{ 
          ?>
            <td align="center">-</td>
          <?php }
            }
          
           ?>
    </tr>
      <?php } ?>
  </tbody>
</table>