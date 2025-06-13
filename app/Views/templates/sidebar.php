 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a style="padding: 10px;" href="#" class="brand-link d-flex align-items-center justify-content-center">
     <span style="font-size: medium;" class="brand-text font-weight-light">Gestor Financeiro</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-start">
       <div class="image">
         <img src="<?= base_url('thema/dist/img/no-image-user.png') ?>" class="img-circle elevation-2" alt="User Image">
       </div>


       <div class="info">
         <a href="/transactions" class="d-block"><?= session()->username ?></a>
       </div>


     </div>

     <!-- SidebarSearch Form -->
     <div style="display: flex; flex-direction:column;" class="form-inline">
       
       <form style="margin-top: 1rem; width: 100%" action="<?= base_url('/logout') ?>" method="get">
         <button type="submit" class="btn btn-primary btn-block">Sair</button>
       </form>

     </div>


   </div>
   <!-- /.sidebar -->
 </aside>