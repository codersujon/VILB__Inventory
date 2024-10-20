<script setup>
    import InputError from '@/Components/InputError.vue';
    import { Head, Link, useForm } from '@inertiajs/vue3';

    const form = useForm({
        name: '',
        email: '',
        password: '',
        password_confirmation: '',
    });

    const submit = () => {
        form.post(route('register'), {
            onFinish: () => form.reset('password', 'password_confirmation'),
        });
    };
    </script>
<template>
    <Head title="Register"/>
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
                                        <h3 class="text-center txt-primary">Register</h3>
                                    </div>
                                </div>
                                <div class="row m-b-20">
                                    <div class="col-md-6">
                                        <a href="#!"
                                            class="btn btn-facebook m-b-20 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-facebook"></i>facebook</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="#!" class="btn btn-twitter m-b-0 btn-block waves-effect waves-light"><i
                                                class="icofont icofont-social-twitter"></i>twitter</a>
                                    </div>
                                </div>
                                <p class="text-muted text-center p-b-5">Sign up with your regular account</p>
                                
                                <!-- Name -->
                                <div class="form-group form-primary">
                                    <input type="text" name="name" class="form-control" required="" v-model="form.name" placeholder="Name">
                                    <span class="form-bar"></span>
                                    <InputError class="mt-2" :message="form.errors.name" />
                                </div>

                                <!-- Email -->
                                <div class="form-group form-primary">
                                    <input type="email" name="email" class="form-control" required="" v-model="form.email"
                                        placeholder="Email Address">
                                    <span class="form-bar"></span>
                                    <InputError class="mt-2" :message="form.errors.email" />
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password" v-model="form.password" class="form-control" required="" placeholder="Password">
                                            <span class="form-bar"></span>
                                            <InputError class="mt-2" :message="form.errors.password" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group form-primary">
                                            <input type="password" name="password_confirmation"  v-model="form.password_confirmation"  class="form-control"
                                                required="" placeholder="Confirm Password">
                                            <span class="form-bar"></span>
                                            <InputError class="mt-2" :message="form.errors.password_confirmation" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row m-t-30">
                                    <div class="col-md-12">
                                        <button type="submit" :class="{ 'opacity-25': form.processing }" :disabled="form.processing"
                                            class="btn btn-primary btn-md btn-block waves-effect text-center m-b-20">Register</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- Authentication card end -->
                </div>
                <!-- end of col-sm-12 -->
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container-fluid -->
    </section>
</template>
