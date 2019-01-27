
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
                            <div class=" col-md-6" style="margin-top:10px;">
                                <div class="panel panel-default ">
                                <div class="panel-heading"><h1 class="panel-title">PRODUITS</h1></div>
                                        <div class="panel-body" id="table_f">
                                            <table class="table table-bordered">
                                                <tr>
                                                    <td>references</td>
                                                    <td>nom</td>
                                                    <td>PU</td>
                                                    <td>Quantite</td>
                                                    <td>Stock</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-6" style="margin-top:10px;">
                                <div class="panel panel-default">
                                     <div class="panel-heading"><h1 class="panel-title">commandes</h1></div>
                                        <div class="panel-body" id="table_f">
                                            <table class="table table-bordered">
                                            <tr>
                                                    <td>references</td>
                                                    <td>nom</td>
                                                    <td>PU</td>
                                                    <td>Quantite</td>
                                                    <td>Total</td>
                                                    <td>Etat</td>
                                                    
                                                </tr>
                                            </table>
                                           
                                        </div>
                                      <div class="form-group">
                                            <div class="col-sm-offset-3 col-sm-9">
                                                <a href="#" class="modall__open"><button type="button" data-toggle="modal" data-target="#infos" class="btn btn-info waves-effect waves-light pull-right" id="commander">Commander</button></a>
                                                </div>
                                         </div>
                                         </div>
                                         
                                        <div class="modal" id="infos">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title">Plus d'informations</h4>
                                                <button type="button" class="close" data-dismiss="modal">
                                                <span>&times;</span>
                                                </button>            
                                            </div>
                                            <div class="modal-body">
                                                <form role="form">
                                                    <div class="form-group">
                                                        <label for="fournisseur">Fourmisseur</label>
                                                        <input type="text" class="form-control" id="searchFournisseur" placeholder="fournisseur" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date">Date commande</label>
                                                        <input type="date" class="form-control" id="date" placeholder="date" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="total">Total</label>
                                                        <input type="number" class="form-control" id="total" placeholder="total" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="tva">Tva</label>
                                                        <input type="number" class="form-control" id="tva" placeholder="5%" />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="ttva">Total Tva</label>
                                                        <input type="number" class="form-control" id="ttva" placeholder="" readonly />
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="payement"> payement:    </label>
                                                            <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="Payer" value="payer" name="radioInline" checked>
                                                            <label for="payer"> payer </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="credit" value="credit" name="radioInline" >
                                                            <label for="credit"> credit </label>
                                                        </div>
                                                        <div class="radio radio-info radio-inline">
                                                            <input type="radio" id="livraison" value="livraison" name="radioInline">
                                                            <label for="livraison"> livraison </label>
                                                        </div>
                                                        <div class="form-group" id="s_payer">
                                                            <label for="Montants">Montants: </label>
                                                            <input type="number" class="form-control" id="montant" placeholder="" />
                                                         </div>
                                                         <div class="form-group" id="s_credit">
                                                            <label for="Montants">date de paiement: </label>
                                                            <input type="date" class="form-control" id="dateP" placeholder="" />
                                                         </div>
                                                         <div class="form-group" id="s_livraison">
                                                            
                                                         </div>
                                                        
                                                    </div>
                                                    
                                                    </form>
                                             </div>
                                            <div class="modal-footer">
                                               <a href="#"><button type="button" class="btn btn-success" data-dismiss="modal">Enregistrer</button></a> 
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                            
                                </div>
                            </div>
                            
                    </div>
                           