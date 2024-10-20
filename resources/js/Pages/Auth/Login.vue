<script setup>
    import InputError from '@/Components/InputError.vue';
    import { Head, Link, useForm } from '@inertiajs/vue3';
    
    defineProps({
        canResetPassword: {
            type: Boolean,
        },
        status: {
            type: String,
        },
    });

    const form = useForm({
        email: '',
        password: '',
        remember: false,
    });

    const submit = () => {
        form.post(route('login'), {
            onFinish: () => form.reset('password'),
        });
    };

</script>
<template>
    <Head title="Login" />

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Authentication card start -->
                    <form class="md-float-material form-material" @submit.prevent="submit">
                        <div class="text-center">
                            <img src="../../../../public/backend/files/assets/images/logo.png" alt="logo.png">
                        </div>
                        <div class="auth-box card">
                            <div class="card-block">
                                <div class="row m-b-20">
                                    <div class="col-md-12">
                                        <h3 class="text-center txt-primary">Sign In</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <button class="btn btn-facebook m-b-20 btn-block"><i class="icofont icofont-social-facebook"></i>facebook</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-twitter m-b-20 btn-block"><i class="icofont icofont-social-twitter"></i>twitter</button>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign in with your regular account</p>
                                
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="" placeholder="Email"  v-model="form.email" autocomplete="email">
                                    <span class="form-bar"></span>
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>

                                <div class="form-group form-primary">
                                    <input type="password" name="password"  v-model="form.password" class="form-control" required="" placeholder="Password">
                                    <span class="form-bar"></span>
                                    <InputError class="mt-2" :message="form.errors.password" />
                                </div>

                                <div class="row m-t-25 text-left">
                                    <div class="col-12">
                                        <div class="checkbox-fade fade-in-primary">
                                            <label>
                                                <input type="checkbox" value="" v-model="form.remember">
                                                <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                <span class="text-inverse">Remember me</span>
                                            </label>
                                        </div>
                                        <div class="forgot-phone text-right f-right">
                                            <Link :href="route('password.request')" class="text-right f-w-600"> Forgot Password?</Link>
                                        </div>
                                    </div>
                                </div>

                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20" :disabled="form.processing" :class="{ 'opacity-25': form.processing }">LOGIN</button>
                                        
                                    </div>
                                </div>
                                <p class="text-inverse text-left">Don't have an account? 
                                    <Link :href="route('register')"> <b class="f-w-600">Register here </b></Link>for free!</p>
                            </div>
                        </div>
                    </form>
                        <!-- end of form -->
                    </div>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        <!-- end of container-fluid -->
    </section>
</template>


