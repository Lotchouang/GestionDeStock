
           <div class="ccol-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading"><h2 class="panel-title">Informations</h2></div>
                                    <div class="panel-body">
                                        <form class="form-inline" role="form">
                                            <div class="form-group">
                                                <label for="references" class="col-sm-3 control-label">references</label>
                                                <div class="col-sm-3">
                                                  <input type="text" class="col-sm-3 form-control" id="references" placeholder="references"readonly/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="nom" class="col-sm-3 control-label">nom</label>
                                                <div class="col-sm-3">
                                                  <input type="text" class="col-sm-3 form-control" id="nom" placeholder="nom"readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="qteCmd" class="col-sm-3 control-label">Quantite</label>
                                                <div class="col-sm-3">
                                                  <input type="number" class="col-sm-3 form-control" id="QteCmd" placeholder="Qte"readonly/>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="prix" class="col-sm-3 control-label">Prix</label>
                                                <div class="col-sm-3">
                                                  <input type="number" class="col-sm-3 form-control" id="prix" placeholder="Qte"readonly/>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group ">
                                                <div class="col-sm-offset-3 col-sm-9">
                                                  <button type="submit" class="btn btn-success waves-effect waves-light">Ajouter</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div> <!-- panel-body -->
                                </div> <!-- panel -->
                            </div>
                            <div class="ccol-md-12">
                            <div class=" col-md-12" style="margin-top:10px;">
                                <div class="panel panel-default">
                                     <div class="panel-heading"><h1 class="panel-title">Liste des commandes</h1></div>
                                        <div class="panel-body" id="table_f">
                                            <table class="table table-bordered">
                                            <tr>
                                                <td><b>NON LIVRER</b> </td>
                                                <td>
                                                <b>LIVRER</b> 
                                                <div class="form-group">
                                                <label for="fournisseur" class="col-sm-3 control-label">fournisseur:</label>
                                                <div class="col-sm-3">
                                                  <input type="text" class="col-sm-3 form-control" id="fournisseur" placeholder="fourniseur..."/>
                                                </div>
                                                <div class="form-group">
                                                <label for="date" class="col-sm-3 control-label">date:</label>
                                                <div class="col-sm-3">
                                                  <input type="date" class="col-sm-3 form-control" id="date" placeholder="date..."/>
                                                </div>
                                                </td >
                                               
                                                    
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                <table class="table table-bordered">
                                                    <tr>
                                                            <td>numero</td>
                                                            <td>Date</td>
                                                            <td>Fournisseur</td>
                                                            <td>Date Livraison</td>
                                                            <td></td>                                    
                                                        </tr>
                                                </table>
                                                </td>
                                            </tr>
                                            </table>
                                           
                                        </div>
                                      <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <a href="#" class="modall__open"><button type="button" data-toggle="modal" data-target="#infos" class="btn btn-info waves-effect waves-light pull-right" id="commander">Commander</button></a>
                                                </div>
                                         </div>
                                         </div>
                                         
                                        
                                        </div>
                                        </div>
                                    </div>
                                            
                                </div>
                            </div>
                            
                    </div>
                           