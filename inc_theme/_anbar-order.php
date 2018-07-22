
<style>
.no-width{
    width:unset ;
}
.chk{
    padding-right: 15px !important;
    padding-left: 0px ;
}
.number-havale{
    width:50%;
}
.text-black{
    color: #455a64 !important;
}
</style>

<div class="card">
    <div class="card-body">

    <h4 class="card-title">حواله انبار</h4>

<form>

<div class="row">
    <div class="col-lg-3">
        <div class="checkbox chk ">
            <input type="checkbox" id="num">
            <label for="num" class="text-black">شماره حواله</label>
            <input type="text" class="form-control form-control-line number-havale">
        </div>
    </div>

    <div class="col-lg-5">
        <label for="example-date-input" class="col-form-label font-normal text-black">تاریخ حواله تحویل کالا</label>
        <input class="form-control no-width" type="date" value="2018-08-19" id="example-date-input">
    </div>
    <div class="col-lg-4">
        <label for="" class="col-form-label font-normal text-black">نوع عملیات</label>
        <select class="form-control no-width">
            <option>دستور کار نصب</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
        </select>
    </div>
</div>

<div class="row">
    <div class="col-lg-4">
    
    <button type="button" class="btn btn-primary btn-circle" data-toggle="modal" data-target="#responsive-modal" ><i class="ti-plus"></i></button>

    <label for="peymankar" class="font-normal text-black">پیمانکار</label>
        <input type="text" id="peymankar" class="form-control form-control-line number-havale m-r-10">



     </div>

</div>

</form>

    </div>
</div>