<?php 
	require '../../config/conexion.php';
	require '../../config/ventas.php';
	$obj = new ventas();
	$sql=$con->query("SELECT * FROM liquidar");
 ?>

 <table class="table table-sm table-hover" id="tabliquis">
  <thead class="font-primary">
    <tr>
      <th>#</th>
      <th>FECHA</th>
      <th>CHOFER</th>
      <th>N° Recargas</th>
      <th>GASTOS</th>
      <th>TOTAL</th>
      <th>REPORTE</th>
    </tr>
  </thead>
  <tbody class="bg-white">
  	<?php while ($ver = $sql->fetch_row()): ?>
    <tr>
      <td><?php echo $ver[0] ?></td>
      <td><?php echo $ver[1] ?></td>
      <td><?php echo $obj->nombreRepartidor($ver[7]) ?></td>
      <td><?php echo $ver[3] ?></td>
      <td><?php echo $ver[5] ?></td>
      <td><?php echo "S/.".$obj->obtenerMonto($ver[0]) ?></td>
      <td>
      	<a href="../../procesos/liquidar/crearReporteLiqPdf.php?idliqi=<?php echo $ver[0] ?>" class="btn btn-sm btn-danger-melody"><i class="fas fa-file-pdf"></i> Reporte</a>
      </td>
    </tr>
    <?php endwhile;  ?>
  </tbody>
</table>
<script type="text/javascript">
      $(document).ready(function() {
        $('#tabliquis').DataTable({
            "language": {
                "lengthMenu": "Mostrar _MENU_ registros por página",
                "zeroRecords": "Nada encontrado, lo siento!",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "No hay registros disponibles",
                "infoFiltered": "(filtered from _MAX_ total records)",
                "search": "Buscar",
                "paginate": {
                  "first":      "Primero",
                  "previous":   "Anterior",
                  "next":       "Siguiente",
                  "last":       "Último"
                }
            }
        });
      });
 </script>