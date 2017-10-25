<?php

namespace ProcessWire;

/**
 * Table Template for : ProcessPathHistoryCentralManager
 * @var PDO $redirectsQueryResult
 */
$tBody = '';
while ($row = $redirectsQueryResult->fetch_assoc()) {
    $created = date('m/d/y',strtotime($row['created']));
    $tBody .= "<TR>";
    $tBody .= "<td>{$row['path']}</td>";
    $tBody .= "<td>/{$row['page_path']}</td>";
    $tBody .= "<td>{$created}</td>";
    $tBody .= "<td><a class='js-datatables-delete' href=delete/?id={$row['id']}>delete</a></td>";
    $tBody .= "</TR>";
}
?>

<table width="100%" id="path-history" class="dataTable display path-history">
    <col width="35%"/>
    <col width="35%"/>
    <col width="3%"/>
    <col width="5%"/>
    <thead>
        <tr>
            <th>From (Past Location)</th>
            <th>To (Active Page)</th>
            <th>Create</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
         <?=$tBody?>
    </tbody>
</table>

<script>
$(document).ready(function(){
    var oTable= $('#path-history').DataTable( {
        stateSave: true
    } );
});
</script>

<style>
    /* Automatically added by data tables to wrap the table, and controls */
    .dataTables_wrapper {margin: 20px 0px 20px 0px;}
</style>
