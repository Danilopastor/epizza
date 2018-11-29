<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title ">Planos</h4>
                  <p class="card-category"> Crie e modifique os planos e pacotes do sistema</p>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead class=" text-primary">
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Preço</th>
                        <th>Período</th>
                        <th>Ações</th>
                      </thead>
                      <tbody>
					  <?php foreach($page['plans'] as $plan){ ?>
                        <tr>
                          <td><?php echo $plan['id']; ?></td>
                          <td><?php echo $plan['name']; ?></td>
                          <td><?php echo $plan['price_value']; ?></td>
                          <td><?php echo $plan['period']; ?></td>
                          <td class="td-actions text-right">
                              <button type="button" rel="tooltip" title="Edit Task" class="btn btn-primary btn-link btn-sm">
                                <i class="material-icons">edit</i>
                              </button>
                              <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-link btn-sm">
                                <i class="material-icons">close</i>
                              </button>
                           </td>
                        </tr>
					  <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  
<div class="fixed-plugin">
    <div class="btn btn-primary btn-round">
             <i class="material-icons">add</i>
    </div>
  </div>