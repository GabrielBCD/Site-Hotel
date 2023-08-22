<?php
    session_start();
    require("conexao.php");
    
        try {
            $lista = $conexao->prepare("select * from reserva where reserva.status = 1");
            $lista->execute();
            $itens = $lista->fetchAll(PDO::FETCH_OBJ); 

            if (empty($itens)) {
                echo "<tr><th scope='row'></th><th scope='row'>Você não possui fichas cadastradas</th></tr>";
              } else {
                $contador = 0;
                foreach ($itens as $item) {
                  $contador = $contador + 1;
                
                    echo "<div class='card'>
                    <div class='card-header'>
                    <h3 class='card-title'>Reservas de quartos</h3>
                    </div>
                    
                    <div class='card-body'>
                    <div id='example1_wrapper' class='dataTables_wrapper dt-bootstrap4'>
                        <div class='row'><div class='col-sm-12 col-md-6'>
                            <div class='dt-buttons btn-group flex-wrap'>               
                                <button class='btn btn-secondary buttons-copy buttons-html5' tabindex='0' aria-controls='example1' type='button'><span>Copy</span></button> 
                                <button class='btn btn-secondary buttons-csv buttons-html5' tabindex='0' aria-controls='example1' type='button'><span>CSV</span></button> 
                                <button class='btn btn-secondary buttons-excel buttons-html5' tabindex='0' aria-controls='example1' type='button'><span>Excel</span></button> 
                                <button class='btn btn-secondary buttons-pdf buttons-html5' tabindex='0' aria-controls='example1' type='button'><span>PDF</span></button> 
                                <button class='btn btn-secondary buttons-print' tabindex='0' aria-controls='example1' type='button'><span>Print</span></button> 
                                <div class='btn-group'>
                                    <button class='btn btn-secondary buttons-collection dropdown-toggle buttons-colvis' tabindex='0' aria-controls='example1' type='button' aria-haspopup='true'><span>Colunas</span><span class='dt-down-arrow'></span></button>
                                </div> 
                            </div>
                        </div>
                        <div class='col-sm-12 col-md-6'><div id='example1_filter' class='dataTables_filter'>
                            <label>Pesquisar:<input type='search' class='form-control form-control-sm' placeholder='' aria-controls='example1'></label>
                        </div>
                    </div>
                    </div>
                    <div class='row'><div class='col-sm-12'><table id='example1' class='table table-bordered table-striped dataTable dtr-inline' aria-describedby='example1_info'>
                    <thead>
                    <tr>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='Nome' name='contador'></th>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='Nome' name='nome'>Nome</th>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='chegada' name='chegada'>Chegada</th>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='saida' name='saida' style=''>Saída</th>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='valor' name='valor' style=''>valor</th>
                        <th class='sorting' tabindex='0' aria-controls='example1' rowspan='1' colspan='1' aria-label='valor' name='valor' style=''>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class='odd'>
                        <td>$contador</td>
                        <td tabindex='0'>$item->nome</td>
                        <td>$item->checkin</td>
                        <td>$item->checkout</td>
                        <td>$item->valor</td>
                        <td>
                        <a href='edit_reserva.php?id=$item->id'>Editar</a>
                        <a href='rmv_reserva.php?id=$item->id'>Remover</a>
                        </td>
                    </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th rowspan='1' colspan='1'>Valor total:</th><th rowspan='1' colspan='1'>Browser</th>
                        </tr>
                    </tfoot>
                    </table></div></div><div class='row'></div>
                    </div>
                    </div>
                    </div>";
            
        }
        }
        } catch (Exception $e) {
            header("location:erro404.php?erro=erro");
    
        }

    ?>
