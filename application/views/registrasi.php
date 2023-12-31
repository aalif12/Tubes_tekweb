
<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">DAFTAR AKUN TOKO BUKU</h1>
                            </div>
                            <form method="post" action="<?php echo base_url('registrasi/index') ?>"class="user">
                                    
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Nama Anda" name="nama_user" minlength="2" maxlength="25" pattern="[A-Za-z ]+" title="Hanya berisi huruf besar atau kecil" required>

                                    <?php echo form_error('nama_user', '<div class="text-danger small ml-2"> ',' </div')?>

                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Username Anda" name="username" minlength="2" pattern="[A-Za-z]+" title="Username diawali dengan huruf" required>

                                    <?php echo form_error('username', '<div class="text-danger small ml-2"> ',' </div')?>

                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password_1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Harus berisi setidaknya satu angka dan satu huruf besar dan kecil, dan setidaknya 8 karakter atau lebih" required>

                                    <?php echo form_error('password_1', '<div class="text-danger small ml-2"> ',' </div')?>
                                </div>                  

                                <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password" name="password_2" required>
                                <div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-user btn-block">Daftar</button>
                                </div>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?php echo base_url('auth/login');?>">Sudah Punya Akun? Silahkan Login</a>
                            </div>
                            </hr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>