
                                <!-- sample modal content -->
                                <div id="add-project-modal" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dia">
        <div class="modal-content">
           
        
        <div class="modal-header">
            <h4 class="modal-title pright">تعریف پروژه</h4>
            <button type="button" class="close pleft" data-dismiss="modal" aria-hidden="true">×</button>
        </div>




            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-6">
                        <div class="row">
                            <div class="col-3">
                            <div class="checkbox checkbox-success p-t-0 p-l-10">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup">کد پروژه</label>
                                </div><!-- checkbox checkbox-success p-t-0 p-l-10 -->
                                </div><!-- col-3 -->
                            <div class="col-9"><input type="text" class="form-control  " ></div><!-- col-9 -->
                        </div>
                            
						</div><!-- col-6 -->
                        <div class="col-6">
                                     <div class="form-group">
                                         <div class="row">
                                            <div class="col-3">
                                                <label>نوع عملیات</label>
                                            </div><!-- col-3 -->
                                            <div class="col-9">
                                                <select class="form-control   ">
                                                    <option>دستور کار نصب</option>
                                                    <option>اصلاح سرویس</option>
                                                </select>
                                            </div><!-- col-9 -->
                                        </div><!-- row -->
                             
                             
                                        </div>  <!-- form-group -->
                                    </div><!-- col-6 -->
					</div><!-- row -->
							<div class="row">
								<div class="col-6">
									<div class="form-group">
									<div class="row">
                                            <div class="col-3">
                                                <label for="projectTitle">عنوان پروژه</label>
                                            </div>
                                            <div class="col-9">
                                                <input type="text" class="form-control  " id="projectTitle">
                                            </div>
                                        </div><!-- row-->
                            
                            
									</div>  <!-- form-group -->
								</div><!-- col-6 -->
								<div class="col-6">
									<div class="form-group">
									<div class="row">
                                            <div class="col-3">
                                                 <label for="projectTitle">پیمانکار</label>
                                                 <button type="button" class="btn btn-success btn-circle waves-effect waves-light"><i class="fa fa-plus" ></i> </button>
                                            </div>
                                            <div class="col-9">
                                                  
                                                 <input type="text" class="form-control  " id="projectTitle">
                                            </div>
                                        </div><!-- row -->
                            
                            
									</div> <!-- form-group -->
							</div><!--row -->
 </div>
                           <div class="row">
                               <div class="col-2">
                               <label class="col-form-label">زمان پروژه</label>
                               </div>
                               <div class="col-4">
                                    <div class="form-group ">
                                        <div class="row">
                                                <div class="col-3">
                                             <label for="example-date-input" class="col-form-label">از تاریخ</label>
                                            </div><!-- col-3 -->
                                            <div class="col-9">
                                            <input class="form-control  " type="date" value="2011-08-19" id="example-date-input">
                                            </div><!-- col-9 -->
                                        </div><!-- row -->
                                       
                                        
                                            
                                        
                                    </div><!-- form-group -->
                               </div>
                               <div class="col-4">
                                    <div class="form-group ">
                                    <div class="row">
                                    <div class="col-3">
                                             <label for="example-date-input" class="col-form-label">تا تاریخ</label>
                                            </div><!-- col-3 -->
                                            <div class="col-9">
                                            <input class="form-control  " type="date" value="2011-08-19" id="example-date-input">
                                            </div><!-- col-9 -->
                                    </div><!-- row -->
                               </div><!-- form-group -->
                               </div><!-- col-4 -->
							   <div class="col-2">
                                    <label class="col-form-label" id ="addproject-days">200 روز</label>
                               </div>
                           </div>
                         
                   
                   
                    <div class="card">
                            <div class="card-body collapse show">
                               
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5"><label for="counterdg">تعداد کنتور دیجیتال</label></div>
                                                <div class="col-7"> <input type="text" class="form-control  " id="counterdg"></div>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-5"> <label for="countermch">تعداد کنتور مکانیکی</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="countermch"></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                            <div class="col-5">  <label for="amper5">تعداد فیوز 5 آمپر</label></div>
                                                <div class="col-7"> <input type="text" class="form-control  " id="amper5"></div>
                                              
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="row">
                                                <div class="col-3"> <label for="cable26">کابل 2*6</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="cable26"></div>
                                                <div class="col-2"><label >متر</label></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="row">
                                            <div class="col-5"><label for="amper15">تعداد فیوز 15 آمپر</label></div>
                                                <div class="col-7">  <input type="text" class="form-control  " id="amper15"></div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-6">
                                             <div class="row">
                                                <div class="col-3"> <label for="cable46">کابل 4*6</label></div>
                                                <div class="col-7"> <input type="text" class="form-control  " id="cable46"></div>
                                                <div class="col-2"><label >متر</label></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-6">
                                        <div class="row">
                                            <div class="col-5"><label for="amper25">تعداد فیوز 25 آمپر</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="amper25"></div>
                                               
                                            </div>
                                        </div>
                                        <div class="col-6">

                                            <div class="row">
                                            <div class="col-3"> <label for="cable410">کابل 4*10</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="cable410"></div>
                                                <div class="col-2"><label >متر</label></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                    <div class="row">
                                        <div class="col-6">
                                        <div class="row">
                                            <div class="col-5"> <label for="amper32">تعداد فیوز 32 آمپر</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="amper32"></div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            
                                            <div class="row">
                                            <div class="col-3"><label for="cable416">کابل 4*16</label></div>
                                                <div class="col-7"><input type="text" class="form-control  " id="cable416"></div>
                                                <div class="col-2"><label >متر</label></div>
                                            </div>
                                        </div>
                                    </div><!-- row -->
                                        
                                </div><!-- form-group -->
                            </div><!-- card-body collapse show -->
                        </div><!-- card -->
                     
                   
                    </form>
                </div>



           
           <div class="modal-footer">
                 <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">برگشت</button>
                 <button type="button" class="btn btn-danger waves-effect waves-light">ثبت</button>
            </div>


        </div>
    </div>
</div>

                                                 
                                <!-- /.modal -->
                               