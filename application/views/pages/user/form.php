<main role="main" class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-header">
                        Tambah Pengguna
                    </div>
                    <div class="card-body ">
                     
                        <?= form_open_multipart($form_action, ['method' => 'POST']) ?>
                        <?= isset($input->id) ? form_hidden('id', $input->id) : '' ?>
                           <div class="form-group pt-9">
                        <label for="">Nama</label>
                        <!-- <input type="text" class="form-control" required autofocus> -->
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]); ?>
                        <!-- <small class="form-text text-danger">Nama tidak boleh kosong</small> -->
                        <?= form_error('name'); 
                            var_dump($input->name);
                            die;
                        ?>

                        
                    </div>
                    <div class="form-group pt-9">
                        <label for="">E-mail</label>
                        <!-- <input type="email" class="form-control" required> -->
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'required' => true, 'placeholder' => 'masukkan alamat email aktif']) ?>
                        <!-- <small class="form-text text-danger">E-mail tidak boleh kosong</small> -->
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <!-- <input type="password" class="form-control" required> -->
                        <?= form_password('password', '', ['class' => 'form-control', 'placeholder' => 'Isikan Password']) ?>
                        <!-- <small class="form-text text-danger">E-mail tidak boleh kosong</small> -->
                        <?= form_error('password'); ?>
                    </div>
               
                   
                    <br>
                            <div class="form-group">
                                <label for="role">Role</label>
                                <br>
                                <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'role', 'value' => 'admin', 'checked'=> $input->role == 1 ? true : false, 'form-check-input'])?>
                                <label for="" class="corm-check-label">   Admin</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'role', 'value'    => '  admin', 'checked'=> $input->role == 1 ? true : false, 'form-check-input'])?>
                                <label for="" class="corm-check-label">  member</label>
                            </div>

                                <br>
                                
                                <div class="form-group">
                                <label for="status">Status</label>
                                <br>
                                <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'is_active', 'value' => '1', 'checked'=> $input->is_active == 1 ? true : false, 'form-check-input'])?>
                                <label for="" class="corm-check-label">   Aktif</label>
                                </div>
                                <div class="form-check form-check-inline">
                                <?= form_radio(['name' => 'is_active', 'value'    => '  0', 'checked'=> $input->is_active == 1 ? true : false, 'form-check-input'])?>
                                <label for="" class="corm-check-label">  Nonaktif</label>
                            </div>

                            <div class="form-group">
							<label for="">Foto</label>
							<br>
							<?= form_upload('image') ?>
							<?php if ($this->session->flashdata('image_error')) : ?>
								<small class="form-text text-danger"><?= $this->session->flashdata('image_error') ?></small>
							<?php endif ?>
							<?php if (isset($input->image)): ?>
								<img src="<?= base_url("/images/user/$input->image") ?>" alt="" width="200" height="150">
							<?php endif ?>
						</div>
                            <button type="submit " class="btn btn-primary">Tambah</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>