 <!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
     <!-- row -->
     <div class="container-fluid">
         <div class="row">

             <div class="col-xl-12">
                 <div id="map" style="width: 100%, height 400px"></div>

             </div>

             <div class="col-xl-12">
                 <table class="table table-bordered">
                     <tr>

                         <th>Project id</th>
                         <th>Project Name</th>
                         <th>Project Location</th>
                         <th>Emergency Call Number</th>
                     </tr>

                     <?php foreach ($user as $u) { ?>
                         <tr>
                             <td><?php echo $u['id']; ?></td>
                             <td><?php echo $u['nama']; ?></td>
                             <td><?php echo $u['alamat']; ?></td>
                             <td><?php echo $u['telpon']; ?></td>
                             <td><a href="<?= base_url() . 'admin/detail/' . $u['id'] ?>">Detail</a></td>
                         </tr>
                     <?php } ?>


                 </table>
                 <?php
                    foreach ($user as $u) {
                        echo $u['id'];
                        echo '. ';
                        echo $u['nama'];
                        echo '<br>';
                    }
                    ?>
             </div>

             <div class="col-xl-12">
                 <div class="col-xl-12 card h-auto">
                     <div class="card-body">
                         <div class="row align-items-center">
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                 <div class="income-data d-flex align-items-center justify-content-xl-start justify-content-between mb-xl-0 mb-3">
                                     <span class=" income-icon style-1 me-4">
                                         <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                             <path d="M20.4764 0.97345C20.4255 0.974639 20.3747 0.978331 20.3241 0.984696C19.9555 1.02962 19.6167 1.20961 19.3732 1.48989C19.1297 1.77018 18.9988 2.13096 19.0057 2.50219V29.4991C19.0077 29.8041 19.1026 30.1012 19.2778 30.3509C19.453 30.6006 19.7001 30.7909 19.9862 30.8966C20.2723 31.0022 20.5838 31.0183 20.8792 30.9424C21.1746 30.8665 21.4398 30.7023 21.6395 30.4718L30.6425 19.9748C30.7704 19.8249 30.8676 19.6513 30.9284 19.4639C30.9893 19.2765 31.0126 19.079 30.9971 18.8825C30.9816 18.6861 30.9276 18.4946 30.8381 18.319C30.7486 18.1435 30.6254 17.9875 30.4755 17.8595C30.3257 17.7316 30.1521 17.6344 29.9647 17.5735C29.7773 17.5127 29.5797 17.4893 29.3833 17.5048C29.1869 17.5204 28.9954 17.5745 28.8199 17.664C28.6443 17.7535 28.4882 17.8766 28.3602 18.0265L21.994 25.4444V2.50219C21.9976 2.30152 21.9608 2.10206 21.8859 1.91585C21.811 1.72965 21.6995 1.56043 21.5579 1.41809C21.4164 1.27576 21.2478 1.16328 21.062 1.08729C20.8763 1.01131 20.6771 0.973336 20.4764 0.975699L20.4764 0.97345ZM11.453 1.00736C11.2441 1.01319 11.0388 1.0627 10.8501 1.15252C10.6614 1.24234 10.4935 1.37054 10.3573 1.52899L1.3661 12.026C1.22021 12.1722 1.10608 12.3469 1.03084 12.5392C0.955604 12.7315 0.920883 12.9374 0.928852 13.1437C0.936821 13.3501 0.98731 13.5526 1.07716 13.7385C1.167 13.9245 1.29427 14.0897 1.45099 14.2242C1.60771 14.3587 1.79051 14.4595 1.98794 14.52C2.18537 14.5806 2.39318 14.5997 2.59835 14.5763C2.80352 14.5528 3.00163 14.4871 3.18029 14.3835C3.35895 14.2799 3.51429 14.1407 3.6366 13.9743L10.0028 6.55623V29.4988C9.99838 29.6986 10.0339 29.8972 10.1073 30.0831C10.1807 30.2689 10.2905 30.4383 10.4302 30.5812C10.5699 30.724 10.7368 30.8374 10.921 30.9149C11.1052 30.9924 11.303 31.0324 11.5028 31.0324C11.7026 31.0324 11.9005 30.9924 12.0847 30.9149C12.2689 30.8374 12.4357 30.724 12.5754 30.5812C12.7152 30.4383 12.8249 30.2689 12.8983 30.0831C12.9717 29.8972 13.0072 29.6986 13.0028 29.4988V2.50167C13.0021 2.30093 12.9611 2.10237 12.8823 1.91775C12.8035 1.73314 12.6884 1.56607 12.5439 1.42674C12.3993 1.28741 12.2283 1.17853 12.041 1.1065C11.8536 1.03447 11.6536 1.00089 11.453 1.00753V1.00736Z" fill="#fff" />
                                         </svg>
                                     </span>
                                     <div>
                                         <h2 class="font-w600 mb-0 income-value">3&#8451;</h2>
                                         <span class=" fs-6 font-w500">Average Temperature</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                 <div class="d-flex align-items-end justify-content-xl-start justify-content-between mb-xl-0 mb-3">
                                     <div id="NewCustomers"></div>
                                     <div class=" ms-3">
                                         <h6 class="fs-18 font-w600 mb-0 text-success">+2.4%</h6>
                                         <span class="fs-14 font-w400">Than last Hour</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                 <div class="card trading mb-sm-0 mb-3">
                                     <div class="card-body">
                                         <div class="income-data d-flex justify-content-between align-items-center mb-sm-0 mb-2 ps-lg-0">
                                             <div>
                                                 <h3 class="font-w600 fs-2 mb-0 text-white">7&#8451;</h3>
                                                 <span class="fs-6 font-w500 text-white">NEED ATTENTION HERE!</span>
                                             </div>

                                             <span id="boot-icon" class="bi bi-thermometer" style="font-size: 63px; color: rgb(165, 42, 42); opacity: 1; -webkit-text-stroke-width: 1px;"></span>
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                                 <div class="card booking mb-0">
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
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="mt-5 mb-4">
                     <div class="d-flex align-items-center justify-content-between mb-sm-0 mb-2">
                         <h2 class="font-w500">Units Preview</h2>
                         <div class="swiper-pagination style-1 room-swiper-pagination"></div>
                     </div>
                     <div class="swiper front-view-slider">
                         <div class="swiper-wrapper">
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-success">GOOD</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0"><a href="javascript:void(0);">Muara Baru</a></h3>
                                         <span class="font-w400 text-white">5&#8451;</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-primary">WARMING</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0"><a href="javascript:void(0);">Jembrana</a></h3>
                                         <span class="font-w400 text-white">6&#8451;</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-primary">HOT</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0"><a href="javascript:void(0);">Bekasi Timur</a></h3>
                                         <span class="font-w400 text-white">7&#8451;</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-primary">BURNED</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0">Mimika</h3>
                                         <span class="font-w400 text-white">8&#8451;</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-primary">BURNED</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0"><a href="javascript:void(0);">Gorontalo</a></h3>
                                         <span class="font-w400 text-white">9&#8451;</span>
                                     </div>
                                 </div>
                             </div>
                             <div class="swiper-slide">
                                 <div class="popular-rooms">
                                     <img src="<?= base_url() ?>templates/kamr/images/map.png" alt="image">
                                     <div class="content">
                                         <span class="badge badge-success">GOOD</span>
                                         <h3 class="font-w500 text-white pt-3 pb-2 m-0"><a href="javascript:void(0);">Bengkulu</a></h3>
                                         <span class="font-w400 text-white">4&#8451;</span>
                                     </div>
                                 </div>
                             </div>



                         </div>
                     </div>
                 </div>
                 <div class="row">
                     <div class="col-xl-6">
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
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                         <div class="card availability line">
                             <div class="card-header border-0">
                                 <h3>Rooms Availability</h3>
                             </div>
                             <div class="card-body pb-2">
                                 <div id="pieChart1"></div>
                                 <div class="d-flex justify-content-between pt-3 pt-sm-5 flex-wrap">
                                     <span><span class="pills-lable bg-dark me-2"></span>Available</span>
                                     <h4>66 Rooms</h4>
                                 </div>
                                 <div class="d-flex justify-content-between flex-wrap">
                                     <span><span class="pills-lable me-2"></span>Sold Out</span>
                                     <h4>129 Rooms</h4>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6">
                         <div class="card">
                             <div class="card-header border-0 pb-0">
                                 <h3 class="mb-0">Visitor</h3>
                             </div>
                             <div class="card-body pt-2 pb-2">
                                 <h2 class="text">12,456</h2>
                                 <div id="columnChart" class="crd-coloum"></div>
                             </div>
                         </div>
                     </div>
                 </div>

             </div>
         </div>
     </div>
 </div>
 <!--**********************************
            Content body end
        ***********************************-->