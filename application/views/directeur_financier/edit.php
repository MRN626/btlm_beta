<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Directeur Financier Edit</h3>
            </div>
			<?php echo form_open('directeur_financier/edit/'.$directeur_financier['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="NOM_COMPLET" class="control-label"><span class="text-danger">*</span>NOM COMPLET</label>
						<div class="form-group">
							<input type="text" name="NOM_COMPLET" value="<?php echo ($this->input->post('NOM_COMPLET') ? $this->input->post('NOM_COMPLET') : $directeur_financier['NOM_COMPLET']); ?>" class="form-control" id="NOM_COMPLET" />
							<span class="text-danger"><?php echo form_error('NOM_COMPLET');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="SIGNATURE_DAF" class="control-label">SIGNATURE DAF</label>
						<div class="form-group">
							<input type="text" name="SIGNATURE_DAF" value="<?php echo ($this->input->post('SIGNATURE_DAF') ? $this->input->post('SIGNATURE_DAF') : $directeur_financier['SIGNATURE_DAF']); ?>" class="form-control" id="SIGNATURE_DAF" />
							<span class="text-danger"><?php echo form_error('SIGNATURE_DAF');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_CREATION" class="control-label">DATE CREATION</label>
						<div class="form-group">
							<input type="text" name="DATE_CREATION" value="<?php echo ($this->input->post('DATE_CREATION') ? $this->input->post('DATE_CREATION') : $directeur_financier['DATE_CREATION']); ?>" class="has-datetimepicker form-control" id="DATE_CREATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_MODIFICATION" class="control-label">DATE MODIFICATION</label>
						<div class="form-group">
							<input type="text" name="DATE_MODIFICATION" value="<?php echo ($this->input->post('DATE_MODIFICATION') ? $this->input->post('DATE_MODIFICATION') : $directeur_financier['DATE_MODIFICATION']); ?>" class="has-datetimepicker form-control" id="DATE_MODIFICATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_SUPPRESSION" class="control-label">DATE SUPPRESSION</label>
						<div class="form-group">
							<input type="text" name="DATE_SUPPRESSION" value="<?php echo ($this->input->post('DATE_SUPPRESSION') ? $this->input->post('DATE_SUPPRESSION') : $directeur_financier['DATE_SUPPRESSION']); ?>" class="has-datetimepicker form-control" id="DATE_SUPPRESSION" />
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