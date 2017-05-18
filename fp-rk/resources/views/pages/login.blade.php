@extends('parts.master')

@section('title', 'Login')

@section('content')

<div class="section first">
    <div class="row container">
        <div class="col col-4 push-center">
            <div class="panel" style="text-align:center">
                <div id="login">
                    <h2>Login</h2>
                    <form>
                        <div class="form-item">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-item">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-item">
                            <button class="button primary w100">Login</button>
                        </div>
                    </form>
                    <a href="#!" id="registerTrigger">Belum punya akun? <b>Register di sini</b></a>
                </div>
                <div id="register">
                    <h2>Register</h2>
                    <form>
                        <div class="form-item">
                            <input type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-item">
                            <input type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-item">
                            <input type="password" name="confirm_password" placeholder="Confirm Password">
                        </div>
                        <div class="form-item">
                            <input type="type" name="sekolah" placeholder="Nama Sekolah">
                        </div>
                        <div class="row gutters">
                            <div class="col col-6">
                                <div class="form-item">
                                    <select name="role">
                                        <option disabled selected>Daftar Sebagai</option>
                                        <option value="murid">Murid</option>
                                        <option value="guru">Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col col-6">
                                <div class="form-item">
                                    <select name="jenjang">
                                        <option disabled selected>Jenjang</option>
                                        <option value="smaa">SMA IPA</option>
                                        <option value="smas">SMA IPS</option>
                                        <option value="smp">SMP</option>
                                        <option value="sd">SD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-item">
                            <button class="button primary w100">Sign Up</button>
                        </div>
                    </form>
                    <a href="#!" id="loginTrigger">Sudah punya akun? <b>Login di sini</b></a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('pagescript')
<script>
    $(document).ready(function(){
        $('#register').hide();
        $('#registerTrigger').click(function(){
            $('#login').hide();
            $('#register').show();
        });
        $('#loginTrigger').click(function(){
            $('#register').hide();
            $('#login').show();
        });
    });
</script>
@endsection