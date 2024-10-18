<script setup>
    import Topbar from './Topbar.vue';
    import Sidebar from './Sidebar.vue';
    import Footer from './Footer.vue';
</script>

<template>
    <div>
        <!-- Begin page -->
        <div id="layout-wrapper">

            <!-- Topbar -->
            <Topbar />

            <!-- Sidebar -->
             <Sidebar />
          
            <!-- Start right Content here -->
                <div class="main-content">
                    <div class="page-content">
                        <div class="container-fluid">

                            <slot />
                            
                        </div>
                    </div>
                    <!-- End Page-content -->

                   <!-- Footer -->
                    <Footer />

                </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
    </div>
</template>
