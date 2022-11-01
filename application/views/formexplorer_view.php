 <!--**********************************
            Content body start
        ***********************************-->
 <div class="content-body">
   <!-- row -->
   <div class="container-fluid">
     <div class="row">

       <div class="col-md-12">
         <div class="authincation-content">
           <div class="row no-gutters">
             <div class="col-xl-12">
               <div class="auth-form">
                 <div class="text-center mb-3"></div>
                 <form action="<?= base_url() ?>formexplorer/fe_action">
                   <div class="mb-3">
                     <label class="mb-1"><strong>Project Name</strong></label>
                     <input name="project_name" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label class="mb-1"><strong>Project Type</strong></label>
                     <input name="project_type" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label class="mb-1"><strong>Location Name</strong></label>
                     <input name="project_location" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label class="mb-1"><strong>Location Coordinate</strong></label>
                     <input name="project_longlat" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label class="mb-1"><strong>Client Name</strong></label>
                     <input name="project_client" class="form-control">
                   </div>
                   <div class="mb-3">
                     <label class="mb-1"><strong>Monitoring Point</strong></label>
                   </div>
                   <div class="row">
                     <div class="col">
                       <div class="form-check custom-checkbox mb-3 checkbox-success">
                         <input name="project_status[]" value="1" type="checkbox" class="form-check-input" checked id="customCheckBox3">
                         <label class="form-check-label" for="customCheckBox3">Checkbox 1</label>
                       </div>
                     </div>
                     <div class="col">
                       <div class="form-check custom-checkbox mb-3 checkbox-success">
                         <input name="project_status[]" value="2" type="checkbox" class="form-check-input" checked id="customCheckBox3">
                         <label class="form-check-label" for="customCheckBox3">Checkbox 2</label>
                       </div>
                     </div>
                     <div class="col">
                       <div class="form-check custom-checkbox mb-3 checkbox-success">
                         <input name="project_status[]" value="3" type="checkbox" class="form-check-input" checked id="customCheckBox3">
                         <label class="form-check-label" for="customCheckBox3">Checkbox 3</label>
                       </div>
                     </div>
                     <div class="col">
                       <div class="form-check custom-checkbox mb-3 checkbox-success">
                         <input name="project_status[]" value="4" type="checkbox" class="form-check-input" checked id="customCheckBox3">
                         <label class="form-check-label" for="customCheckBox3">Checkbox 4</label>
                       </div>
                     </div>
                   </div>
                   <div class="text-end">
                     <button type="submit" class="btn btn-primary">Save</button>
                   </div>
                 </form>
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