<div class="card">
    <div class="card-body">

        <h4 class="card-title">لیست کارها</h4>
        <h6 class="card-subtitle">توضیحات بیشتر </h6>

<div class="row">
    <div class="col-lg-6">   
            <div class="form-group">
            <label class="text-danger font-normal">نوع دستور کار</label>
            <select class="form-control">
                <option>نمایش همه</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
        <div class="col-lg-6">   
            <div class="form-group">
            <label class="text-danger font-normal">پیمانکار</label>
            <select class="form-control">
                <option>نمایش همه</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
            </select>
        </div>
    </div>
</div>

<div class="d-flex">
        <div class="mr-auto">
            <div class="form-group">
                <button id="demo-btn-addrow" class="btn btn-primary btn-sm"><i class="icon wb-plus" aria-hidden="true"></i>پروژه جدید
                </button>
                <small>اضافه کردن پروژه جدید....</small> 
            </div>
        </div>
        <div class="ml-auto">
            <div class="form-group">
                <input id="demo-input-search2" type="text" placeholder="جستجو" autocomplete="off">
            </div>
        </div>
</div>

<div class="m-t-10">

        <table data-show-columns="true" data-height="300" id="clmtable" class="table table-bordered table-hover toggle-circle" >
            <thead>
                <tr>
                    <th>شماره</th>
                    <th data-toggle="true">تاریخ</th>
                    <th>پیمانکار</th>
                    <th data-hide>نوع دستور کار</th>
                    <th data-hide>مشترک</th>
                    <th data-hide >کابل اولیه</th>
                    <th data-sort-ignore="true" class="min-width">حذف</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>1</td>
                    <td>Shona</td>
                    <td>Woldt</td>
                    <td>Airline Transport Pilot</td>
                    <td>3 Oct 2017</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>2</td>
                    <td>Lizzee</td>
                    <td>Goodlow</td>
                    <td>Technical Services Librarian</td>
                    <td>1 Nov 2014</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>3</td>
                    <td>Isidra</td>
                    <td>Boudreaux</td>
                    <td>Traffic Court Referee</td>
                    <td>22 Jun 2014</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>4</td>
                    <td>Doris</td>
                    <td>Michael</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>5</td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>6</td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2017</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>7</td>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>8</td>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>9</td>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>10</td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>11</td>
                    <td>Maple</td>
                    <td>Halladay</td>
                    <td>Aviation Tactical Readiness Officer</td>
                    <td>30 Dec 2017</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>12</td>
                    <td>Lorraine</td>
                    <td>Mcgaughy</td>
                    <td>Hemodialysis Technician</td>
                    <td>11 Nov 2014</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>13</td>
                    <td>Judi</td>
                    <td>Badgett</td>
                    <td>Electrical Lineworker</td>
                    <td>23 Jun 2013</td>
                    <td><span class="label label-table label-success">Active</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>14</td>
                    <td>Granville</td>
                    <td>Leonardo</td>
                    <td>Business Services Sales Representative</td>
                    <td>19 Apr 2013</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>
                <tr>
                <td>15</td>
                    <td>Lauri</td>
                    <td>Hyland</td>
                    <td>Blackjack Supervisor</td>
                    <td>15 Nov 2014</td>
                    <td><span class="label label-table label-danger">Suspended</span> </td>
                    <td>
                        <button type="button" class="btn btn-sm btn-icon btn-pure btn-outline delete-row-btn" data-toggle="tooltip" data-original-title="Delete"><i class="ti-close" aria-hidden="true"></i></button>
                    </td>
                </tr>

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">
                        <div class="text-right">
                            <ul class="pagination">
                            </ul>
                        </div>
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

