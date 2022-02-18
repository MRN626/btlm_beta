<div class="row">
    <div class="col-md-12">
      	<div class="box box-info">
            <div class="box-header with-border">
              	<h3 class="box-title">Agent Edit</h3>
            </div>
			<?php echo form_open('agent/edit/'.$agent['ID']); ?>
			<div class="box-body">
				<div class="row clearfix">
					<div class="col-md-6">
						<label for="MOT_DE_PASSE" class="control-label">MOT DE PASSE</label>
						<div class="form-group">
							<input type="text" name="MOT_DE_PASSE" value="<?php echo ($this->input->post('MOT_DE_PASSE') ? $this->input->post('MOT_DE_PASSE') : $agent['MOT_DE_PASSE']); ?>" class="form-control" id="MOT_DE_PASSE" />
							<span class="text-danger"><?php echo form_error('MOT_DE_PASSE');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="NOM_COMPLET" class="control-label"><span class="text-danger">*</span>NOM COMPLET</label>
						<div class="form-group">
							<input type="text" name="NOM_COMPLET" value="<?php echo ($this->input->post('NOM_COMPLET') ? $this->input->post('NOM_COMPLET') : $agent['NOM_COMPLET']); ?>" class="form-control" id="NOM_COMPLET" />
							<span class="text-danger"><?php echo form_error('NOM_COMPLET');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DEPARTEMENT" class="control-label"><span class="text-danger">*</span>DEPARTEMENT</label>
						<div class="form-group">
							<input type="text" name="DEPARTEMENT" value="<?php echo ($this->input->post('DEPARTEMENT') ? $this->input->post('DEPARTEMENT') : $agent['DEPARTEMENT']); ?>" class="form-control" id="DEPARTEMENT" />
							<span class="text-danger"><?php echo form_error('DEPARTEMENT');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="FONCTION" class="control-label">FONCTION</label>
						<div class="form-group">
							<input type="text" name="FONCTION" value="<?php echo ($this->input->post('FONCTION') ? $this->input->post('FONCTION') : $agent['FONCTION']); ?>" class="form-control" id="FONCTION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="CHEF_DEPARTEMENT" class="control-label"><span class="text-danger">*</span>CHEF DEPARTEMENT</label>
						<div class="form-group">
							<input type="text" name="CHEF_DEPARTEMENT" value="<?php echo ($this->input->post('CHEF_DEPARTEMENT') ? $this->input->post('CHEF_DEPARTEMENT') : $agent['CHEF_DEPARTEMENT']); ?>" class="form-control" id="CHEF_DEPARTEMENT" />
							<span class="text-danger"><?php echo form_error('CHEF_DEPARTEMENT');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="TELEPHONE" class="control-label">TELEPHONE</label>
						<div class="form-group">
							<input type="text" name="TELEPHONE" value="<?php echo ($this->input->post('TELEPHONE') ? $this->input->post('TELEPHONE') : $agent['TELEPHONE']); ?>" class="form-control" id="TELEPHONE" />
							<span class="text-danger"><?php echo form_error('TELEPHONE');?></span>
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_CREATION" class="control-label">DATE CREATION</label>
						<div class="form-group">
							<input type="text" name="DATE_CREATION" value="<?php echo ($this->input->post('DATE_CREATION') ? $this->input->post('DATE_CREATION') : $agent['DATE_CREATION']); ?>" class="has-datetimepicker form-control" id="DATE_CREATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_MODIFICATION" class="control-label">DATE MODIFICATION</label>
						<div class="form-group">
							<input type="text" name="DATE_MODIFICATION" value="<?php echo ($this->input->post('DATE_MODIFICATION') ? $this->input->post('DATE_MODIFICATION') : $agent['DATE_MODIFICATION']); ?>" class="has-datetimepicker form-control" id="DATE_MODIFICATION" />
						</div>
					</div>
					<div class="col-md-6">
						<label for="DATE_SUPPRESSION" class="control-label">DATE SUPPRESSION</label>
						<div class="form-group">
							<input type="text" name="DATE_SUPPRESSION" value="<?php echo ($this->input->post('DATE_SUPPRESSION') ? $this->input->post('DATE_SUPPRESSION') : $agent['DATE_SUPPRESSION']); ?>" class="has-datetimepicker form-control" id="DATE_SUPPRESSION" />
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