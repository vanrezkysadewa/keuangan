 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
   </div>

   <div class="row">
     <!-- Area Chart -->
     <div class="col-lg-12">
       <div class="card shadow mb-4">
         <!-- Card Header - Dropdown -->
         <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
           <h6 class="m-0 font-weight-bold text-primary">Persebaran Tempat Pembuangan Sampah</h6>
         </div>
         <!-- Card Body -->
         <div class="card-body">
           <?php echo $map['html'] ?>
         </div>
       </div>
     </div>