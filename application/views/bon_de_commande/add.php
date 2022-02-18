<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Bon De Commande Add</h3>
            </div>
            <?php echo form_open('bon_de_commande/add'); ?>
          	<div class="box-body">
          		<div class="row clearfix">
					<div class="col-md-6">
						<div class="form-group">
							<input type="checkbox" name="TYPE_BON_COMMANDE" value="1"  id="TYPE_BON_COMMANDE" />
							<label for="TYPE_BON_COMMANDE" class="control-label">TYPE BON COMMANDE</label>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_FICHE_BESOIN" class="control-label">Fiche De Besoin</label>
						<div class="form-group">
							<select name="ID_FICHE_BESOIN" class="form-control">
								<option value="">select fiche_de_besoin</option>
								<?php 
								foreach($all_fiche_de_besoin as $fiche_de_besoin)
								{
									$selected = ($fiche_de_besoin['ID'] == $this->input->post('ID_FICHE_BESOIN')) ? ' selected="selected"' : "";

									echo '<option value="'.$fiche_de_besoin['ID'].'" '.$selected.'>'.$fiche_de_besoin['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_SERVICE_GEN" class="control-label">Service Gen</label>
						<div class="form-group">
							<select name="ID_SERVICE_GEN" class="form-control">
								<option value="">select service_gen</option>
								<?php 
								foreach($all_service_gen as $service_gen)
								{
									$selected = ($service_gen['ID'] == $this->input->post('ID_SERVICE_GEN')) ? ' selected="selected"' : "";

									echo '<option value="'.$service_gen['ID'].'" '.$selected.'>'.$service_gen['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_DAF" class="control-label">Directeur Financier</label>
						<div class="form-group">
							<select name="ID_DAF" class="form-control">
								<option value="">select directeur_financier</option>
								<?php 
								foreach($all_directeur_financier as $directeur_financier)
								{
									$selected = ($directeur_financier['ID'] == $this->input->post('ID_DAF')) ? ' selected="selected"' : "";

									echo '<option value="'.$directeur_financier['ID'].'" '.$selected.'>'.$directeur_financier['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="ID_DG" class="control-label">Direction Gen</label>
						<div class="form-group">
							<select name="ID_DG" class="form-control">
								<option value="">select direction_gen</option>
								<?php 
								foreach($all_direction_gen as $direction_gen)
								{
									$selected = ($direction_gen['ID'] == $this->input->post('ID_DG')) ? ' selected="selected"' : "";

									echo '<option value="'.$direction_gen['ID'].'" '.$selected.'>'.$direction_gen['ID'].'</option>';
								} 
								?>
							</select>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM_FOURNISSEUR" class="control-label">NOM FOURNISSEUR</label>
						<div class="form-group">
							<input type="text" name="NOM_FOURNISSEUR" value="<?php echo $this->input->post('NOM_FOURNISSEUR'); ?>" class="form-control" id="NOM_FOURNISSEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ADRESSE_FOURNISSEUR" class="control-label">ADRESSE FOURNISSEUR</label>
						<div class="form-group">
							<input type="text" name="ADRESSE_FOURNISSEUR" value="<?php echo $this->input->post('ADRESSE_FOURNISSEUR'); ?>" class="form-control" id="ADRESSE_FOURNISSEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="TELEPHONE_FOURNISSEUR" class="control-label">TELEPHONE FOURNISSEUR</label>
						<div class="form-group">
							<input type="text" name="TELEPHONE_FOURNISSEUR" value="<?php echo $this->input->post('TELEPHONE_FOURNISSEUR'); ?>" class="form-control" id="TELEPHONE_FOURNISSEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_BON_DEMANDE" class="control-label">DATE BON DEMANDE</label>
						<div class="form-group">
							<input type="text" name="DATE_BON_DEMANDE" value="<?php echo $this->input->post('DATE_BON_DEMANDE'); ?>" class="has-datepicker form-control" id="DATE_BON_DEMANDE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DESIGNATION_PRODUIT" class="control-label">DESIGNATION PRODUIT</label>
						<div class="form-group">
							<input type="text" name="DESIGNATION_PRODUIT" value="<?php echo $this->input->post('DESIGNATION_PRODUIT'); ?>" class="form-control" id="DESIGNATION_PRODUIT" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="QUANTITE" class="control-label">QUANTITE</label>
						<div class="form-group">
							<input type="text" name="QUANTITE" value="<?php echo $this->input->post('QUANTITE'); ?>" class="form-control" id="QUANTITE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="OBSERVATION" class="control-label">OBSERVATION</label>
						<div class="form-group">
							<input type="text" name="OBSERVATION" value="<?php echo $this->input->post('OBSERVATION'); ?>" class="form-control" id="OBSERVATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="PROFORMAT_FOURNISSEUR" class="control-label">PROFORMAT FOURNISSEUR</label>
						<div class="form-group">
							<input type="text" name="PROFORMAT_FOURNISSEUR" value="<?php echo $this->input->post('PROFORMAT_FOURNISSEUR'); ?>" class="form-control" id="PROFORMAT_FOURNISSEUR" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="FACTURE" class="control-label">FACTURE</label>
						<div class="form-group">
							<input type="text" name="FACTURE" value="<?php echo $this->input->post('FACTURE'); ?>" class="form-control" id="FACTURE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="ETAT_BON_COMMANDE" class="control-label">ETAT BON COMMANDE</label>
						<div class="form-group">
							<input type="text" name="ETAT_BON_COMMANDE" value="<?php echo $this->input->post('ETAT_BON_COMMANDE'); ?>" class="form-control" id="ETAT_BON_COMMANDE" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="EVALUTION_FOURNISSEUR" class="control-label">EVALUTION FOURNISSEUR</label>
						<div class="form-group">
							<input type="text" name="EVALUTION_FOURNISSEUR" value="<?php echo $this->input->post('EVALUTION_FOURNISSEUR'); ?>" class="form-control" id="EVALUTION_FOURNISSEUR" />
							<span class="text-danger"><?php echo form_error('EVALUTION_FOURNISSEUR');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_SERVICE_GEN" class="control-label">SIGNATURE SERVICE GEN</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_SERVICE_GEN" value="<?php echo $this->input->post('SIGNATURE_SERVICE_GEN'); ?>" class="form-control" id="SIGNATURE_SERVICE_GEN" />
							<span class="text-danger"><?php echo form_error('SIGNATURE_SERVICE_GEN');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_DAF" class="control-label">SIGNATURE DAF</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_DAF" value="<?php echo $this->input->post('SIGNATURE_DAF'); ?>" class="form-control" id="SIGNATURE_DAF" />
							<span class="text-danger"><?php echo form_error('SIGNATURE_DAF');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_DG" class="control-label">SIGNATURE DG</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_DG" value="<?php echo $this->input->post('SIGNATURE_DG'); ?>" class="form-control" id="SIGNATURE_DG" />
							<span class="text-danger"><?php echo form_error('SIGNATURE_DG');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_CREATION" class="control-label">DATE CREATION</label>
						<div class="form-group">
							<input type="text" name="DATE_CREATION" value="<?php echo $this->input->post('DATE_CREATION'); ?>" class="has-datetimepicker form-control" id="DATE_CREATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_MODIFICATION" class="control-label">DATE MODIFICATION</label>
						<div class="form-group">
							<input type="text" name="DATE_MODIFICATION" value="<?php echo $this->input->post('DATE_MODIFICATION'); ?>" class="has-datetimepicker form-control" id="DATE_MODIFICATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_SUPPRESSION" class="control-label">DATE SUPPRESSION</label>
						<div class="form-group">
							<input type="text" name="DATE_SUPPRESSION" value="<?php echo $this->input->post('DATE_SUPPRESSION'); ?>" class="has-datetimepicker form-control" id="DATE_SUPPRESSION" />
						</div>
					</div>
				</div>
			</div>
          	<div class="box-footer">
            	<button type="submit" class="btn btn-success">
            		<i class="fa fa-check"></i> Save
            	</button>
          	</div>
            <?php echo form_close(); ?>
      	</div>
    </div>
</div>