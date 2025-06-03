 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
   <!-- Brand Logo -->
   <a style="padding: 10px;" href="/home" class="brand-link d-flex align-items-center justify-content-center">
     <span style="font-size: medium;" class="brand-text font-weight-light">Gestor Financeiro</span>
   </a>

   <!-- Sidebar -->
   <div class="sidebar">
     <!-- Sidebar user panel (optional) -->
     <div class="user-panel mt-3 pb-3 mb-3 d-flex justify-content-start">
       <div class="image">
         <img src="<?= base_url('thema/dist/img/user2-160x160.jpg') ?>" class="img-circle elevation-2" alt="User Image">
       </div>


       <div class="info">
         <a href="/produtos/listar" class="d-block">Usuário</a>
       </div>


     </div>

     <!-- SidebarSearch Form -->
     <div style="display: flex; flex-direction:column;" class="form-inline">
       <div class="input-group" data-widget="sidebar-search">
         <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
         <div class="input-group-append">
           <button class="btn btn-sidebar">
             <i class="fas fa-search fa-fw"></i>
           </button>
         </div>
       </div>
       <form style="margin-top: 1rem; width: 100%" action="/" method="get">
         <button type="submit" class="btn btn-primary btn-block">Sair</button>
       </form>

     </div>


   </div>
   <!-- /.sidebar -->
 </aside>