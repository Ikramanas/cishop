<main role="main" class="container">
    <?php $this->load->view('layout/_alert'); ?>
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    Login
                </div>
                <div class="card-body ">
                    <?= form_open('login', ['method', 'post']) ?>
                    <div class="form-group pt-9">
                        <label for="">E-mail</label>
                        <!-- <input type="email" class="form-control" required autofocus> -->
                        <?= form_input(['type' => 'email', 'name' => 'email', 'value' => $input->email, 'class' => 'form-control', 'placeholder' => 'Masukkan alamat email aktif', 'required' => true]) ?>
                        <!-- <small class="form-text text-danger">E-mail tidak boleh kosong</small> -->
                        <?= form_error('email'); ?>
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <!-- <input type="password" class="form-control" required autofocus> -->
                        <?= form_password('password', '', ['class' => 'form-control', 'type' => 'password', 'required' => true, 'placeholder' => 'Masukkan Password minimal 8 karakter']) ?>
                        <!-- <small class="form-text text-danger">E-mail tidak boleh kosong</small> -->
                        <?= form_error('password'); ?>
                    </div>
                    <button type="submit " class="btn btn-primary">Login</button>
                    <?= form_close() ?>
                </div>
            </div>
        </div>
    </div>
</main>