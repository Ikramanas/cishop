<main role="main" class="container">
    <?php
    $this->load->view('layout/_alert');
    ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Formulir Registrasi
                </div>
                <div class="card-body ">
                    <?= form_open('register', ['method' => 'POST']) ?>

                    <div class="form-group pt-9">
                        <label for="">Nama</label>
                        <!-- <input type="text" class="form-control" required autofocus> -->
                        <?= form_input('name', $input->name, ['class' => 'form-control', 'required' => true, 'autofocus' => true]); ?>
                        <!-- <small class="form-text text-danger">Nama tidak boleh kosong</small> -->
                        <?= form_error('name'); ?>
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
                        <?= form_password('password', '', ['class' => 'form-control', 'required' => true, 'placeholder' => 'Isikan Password']) ?>
                        <!-- <small class="form-text text-danger">E-mail tidak boleh kosong</small> -->
                        <?= form_error('password'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Konfirmasi Password</label>
                        <!-- <input type="password" class="form-control" required> -->
                        <?= form_password('password_confirmation', '', ['class' => 'form-control', 'required' => true, 'placeholder', 'isikan password yang sama']) ?>
                        <!-- <small class="form-text text-danger">Password harus sama.</small> -->
                        <?= form_error('password_confirmation'); ?>
                    </div>
                    <button type="submit " class="btn btn-primary">register</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>