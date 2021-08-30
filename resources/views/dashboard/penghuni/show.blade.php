<!-- ini adalah konten dari halaman Detail Penghuni -->
@extends('layout/main')

<!-- ini adalah title dari halaman Detail Penghuni -->
@section('title', 'Detail Data Penghuni')

<!-- ini adalah isi konten dari halaman Detail Penghuni -->
@section('container')
 <!-- Header -->
 <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-8">  
              <nav aria-label="breadcrumb" class="d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                  <li class="breadcrumb-item"><a href="#">Kelola Penghuni</a></li>
                  <li class="breadcrumb-item " aria-current="page">Detail Penghuni</li>
                </ol>
              </nav>
            </div> 
          </div> 
        </div>
      </div>

    <!-- Page content -->
    <div class="container-fluid mt--4">
      <div class="row">
         <!-- disini isi konten -->
         <div class="container-xl"> 
           <!-- Form CRUD -->
            <div class="row ">
              <div class="col-lg-7 mx-auto">
                <div class="card mt-2 mx-auto p-4 bg-light">
                  <div class="card-body bg-light">
                    <div class="container">
                      <h5 class="text-center mb-4"><i class="ni ni-single-02 text-blue"></i> <br>
                        Detail Data Penghuni</h5>
                       <form id="contact-form" role="form">
                           <div class="controls">
                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group"> <label for="form_name">Nama :</label> <input id="form_name" type="text" name="name" class="form-control" value="Tegar" readonly > </div>
                                   </div>    
                               </div>

                               <div class="row">
                                 <div class="col-md-6">
                                   <div class="form-group"> <label for="form_email">Umur :</label> <input id="form_email" type="text" name="email" class="form-control" value="20 Tahun" readonly > </div>
                                 </div>

                                 <div class="col-md-6">
                                     <div class="form-group"> <label for="form_email">Agama :</label> <input id="form_email" type="text" name="email" class="form-control" value="Islam" readonly > </div>
                                    </div>
                                 </div>

                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group"> <label for="form_name">No KTP :</label> <input id="form_name" type="text" name="name" class="form-control"  value="912309128903" readonly > </div>
                                     </div>  
                                 </div>
                                 
                                 <div class="row">
                                     <div class="col-md-12">
                                         <div class="form-group"> <label for="form_name">Foto Penghuni :</label> <img src="../../assets/img/brand/blue.png" alt="" width="300px" height="200px"> </div>
                                     </div>  
                                 </div>

                               <div class="row">
                                   <div class="col-md-12">
                                       <div class="form-group"> <label for="form_message">Message *</label> <textarea id="form_message" name="message" class="form-control" placeholder="Write your message here." rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                   </div>
                                   <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Kembali"> </div>
                               </div>
                           </div>
                       </form> 
                     </div>
                  </div>
                <div>
              </div> <!-- /.8 -->
            </div> <!-- Tutup Row -->

      </div>    <!-- Tutup Row Isi Konten -->
         
    </div>
      <!-- ini adalah tutup endsection -->
      @endsection