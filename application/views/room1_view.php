 <!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
     <!-- row -->
     <div class="container-fluid">
         <div class="row">

             <div class="col-md-6">
                 <div class="card">
                     <div class="card-header border-0 pb-0 flex-wrap">
                         <h3 class="mb-1">Room Map</h3>
                     </div>
                     <div class="card-body pb-6">
                         <img style="margin-bottom: 10px;" width="100%" src="images/room1.png" alt="">
                     </div>
                 </div>
             </div>

             <div class="col-xl-6">
                 <div class="card">
                     <div class="card-header border-0 pb-0">
                         <h3 class="mb-0">Room Monitor</h3>
                     </div>
                     <div class="card-body mt-3">
                         <div class="row align-items-center">
                             <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                 <div class="income-data d-flex align-items-center justify-content-xl-start justify-content-between mb-xl-0 mb-3">
                                 </div>
                             </div>
                             <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                 <div class="d-flex align-items-end justify-content-xl-start justify-content-between mb-xl-0 mb-3">
                                 </div>
                             </div>
                             <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                                 <div class="card trading mb-sm-3 mb-6">
                                     <div class="card-body">
                                         <div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2 ps-lg-0">
                                             <div>
                                                 <h3 class="font-w600 fs-2 mb-0 text-white">7&#8451;</h3>
                                                 <span class="fs-6 font-w500 text-white">NEED ATTENTION HERE!</span>
                                             </div>
                                             <span id="boot-icon" class="bi bi-thermometer" style="font-size: 63px; color: #f0f0f0; opacity: 1; -webkit-text-stroke-width: 1px;"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <!-- <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                                 <div class="card booking mb-3">
                                     <div class="card-body">
                                         <div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2  mb-sm-0 mb-2 ps-lg-0 ">
                                             <div>
                                                 <h3 class="font-w600 fs-2 mb-0">4</h3>
                                                 <span class="fs-6 font-w500">DOORS OPENED since last 30 Minutes</span>
                                             </div>
                                             <span class=" fa-rotate-by" style="--fa-rotate-angle: 135deg">
                                                 <svg width="51" height="51" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                     <path d="M20.0734 0C15.6988 0 12.1485 3.54844 12.1485 7.92443C12.1485 9.14474 12.4477 10.2895 12.9391 11.3213L0.516482 23.7488C-0.172161 24.4374 -0.172161 25.5504 0.516482 26.239L1.76163 27.4841C2.09101 27.8152 2.53822 28 3.00678 28C3.47341 28 3.92084 27.8152 4.25193 27.4841L7.02037 24.7158L9.551 27.2516C9.88209 27.581 10.3292 27.7658 10.7962 27.7658C11.2648 27.7658 11.7119 27.5827 12.0413 27.2516L12.6649 26.6284C13.3535 25.9398 13.3535 24.8269 12.6649 24.1382L10.1306 21.6024L16.6763 15.0566C17.7118 15.5497 18.853 15.8489 20.0751 15.8489C24.453 15.8489 28 12.3004 28 7.92443C28 3.54844 24.4533 0 20.0734 0ZM20.0734 12.3269C17.6448 12.3269 15.6706 10.3509 15.6706 7.92443C15.6706 5.49796 17.6448 3.52197 20.0734 3.52197C22.502 3.52197 24.4761 5.49796 24.4761 7.92443C24.4761 10.3509 22.502 12.3269 20.0734 12.3269Z" fill="var(--primary)" />
                                                 </svg>
                                             </span>
                                         </div>
                                     </div>
                                 </div>
                             </div> -->
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         <div class="row">
             <div class="col-xl-12">
                 <div class="card">
                     <div class="card-header border-0 pb-0 flex-wrap">
                         <h3 class="mb-1">Temperature Chart</h3>
                         <div class="card-action coin-tabs mt-3 mt-sm-0">
                             <ul class="nav nav-tabs" role="tablist">
                                 <li class="nav-item">
                                     <a class="nav-link" data-bs-toggle="tab" href="#month" role="tab" aria-selected="false">Month</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link active" data-bs-toggle="tab" href="#weekly" role="tab" aria-selected="true">Weekly</a>
                                 </li>
                                 <li class="nav-item">
                                     <a class="nav-link" data-bs-toggle="tab" href="#day" role="tab" aria-selected="false">Day</a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="card-body pb-2">
                         <div class="d-flex align-items-center mb-5">
                             <div class="d-flex align-items-center flex-lg-wrap me-5 flex-wrap">
                                 <span class="me-3 d-flex align-items-center">
                                     <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <rect y="0.716797" width="12" height="12" rx="4" fill="var(--primary)" />
                                     </svg>
                                     Highest
                                 </span>
                                 <h4 class="mb-0">8&#8451;</h4>
                             </div>
                             <div class="d-flex align-items-center flex-lg-wrap flex-wrap">
                                 <span class=" squre me-3 d-flex align-items-center">
                                     <svg class="me-2" width="12" height="13" viewBox="0 0 12 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                         <rect y="0.716797" width="12" height="12" rx="4" fill="#ff9d43" />
                                     </svg>
                                     Lowest
                                 </span>
                                 <h4 class="mb-0">2&#8451;</h4>
                             </div>
                         </div>
                         <div class="tab-content">
                             <div class="tab-pane fade show active" id="month">
                                 <div id="reservationChart" class="reservationChart"></div>
                             </div>
                             <div class="tab-pane fade" id="weekly">
                                 <div id="reservationChart1" class="reservationChart"></div>
                             </div>
                             <div class="tab-pane fade" id="day">
                                 <div id="reservationChart2" class="reservationChart"></div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="col-md-12">
                 <a type="button" class="btn btn-primary col-md-12 xl-12" style="color: #fff;" href="<?= base_url(); ?>secondroom">Click to view Room 2 Monitoring</a>
             </div>
         </div>
     </div>
 </div>
 </div>
 <!--**********************************
            Content body end
        ***********************************-->