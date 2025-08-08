<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
       <h1>Dashboard <small>Control panel</small></h1>
       <ol class="breadcrumb">
          <li>
             <a href="#"><i class="fa fa-dashboard"></i> Home</a>
          </li>
          <li class="active">Dashboard</li>
       </ol>
    </section>
 
    <!-- Main content -->
    <section class="content">
       <!-- Small boxes (Stat box) -->
       <div class="row">
          <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-aqua">
                <div class="inner">
                   <h3>150</h3>
                   <p>New Orders</p>
                </div>
                <div class="icon">
                   <i class="ion ion-bag"></i>
                </div>
                <a href="#" class="small-box-footer"
                   >More info <i class="fa fa-arrow-circle-right"></i
                ></a>
             </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-green">
                <div class="inner">
                   <h3>53<sup style="font-size: 20px">%</sup></h3>
                   <p>Bounce Rate</p>
                </div>
                <div class="icon">
                   <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer"
                   >More info <i class="fa fa-arrow-circle-right"></i
                ></a>
             </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-yellow">
                <div class="inner">
                   <h3>44</h3>
                   <p>User Registrations</p>
                </div>
                <div class="icon">
                   <i class="ion ion-person-add"></i>
                </div>
                <a href="#" class="small-box-footer"
                   >More info <i class="fa fa-arrow-circle-right"></i
                ></a>
             </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6">
             <!-- small box -->
             <div class="small-box bg-red">
                <div class="inner">
                   <h3>65</h3>
                   <p>Unique Visitors</p>
                </div>
                <div class="icon">
                   <i class="ion ion-pie-graph"></i>
                </div>
                <a href="#" class="small-box-footer"
                   >More info <i class="fa fa-arrow-circle-right"></i
                ></a>
             </div>
          </div>
          <!-- ./col -->
       </div>
       <!-- /.row -->
       <!-- Main row -->
       <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
             <!-- Custom tabs (Charts with tabs)-->
             <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs pull-right">
                   <li class="active">
                      <a href="#revenue-chart" data-toggle="tab">Area</a>
                   </li>
                   <li><a href="#sales-chart" data-toggle="tab">Donut</a></li>
                   <li class="pull-left header">
                      <i class="fa fa-inbox"></i> Sales
                   </li>
                </ul>
                <div class="tab-content no-padding">
                   <!-- Morris chart - Sales -->
                   <div
                      class="chart tab-pane active"
                      id="revenue-chart"
                      style="position: relative; height: 300px"
                   ></div>
                   <div
                      class="chart tab-pane"
                      id="sales-chart"
                      style="position: relative; height: 300px"
                   ></div>
                </div>
             </div>
             <!-- /.nav-tabs-custom -->
 
             <!-- Reports box -->
             <div class="row">
                <section class="col-lg-12">
                   <div class="box box-success">
                      <div class="box-header with-border">
                         <i class="fa fa-bar-chart"></i>
                         <h3 class="box-title">IOT Reports</h3>
                      </div>
                      <div class="box-body">
                         <div class="reports-container">
                            <div class="report-controls">
                               <div class="row">
                                  <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="sel_report"
                                           >Report Name:</label
                                        >
                                        <select
                                           class="form-control"
                                           id="sel_report"
                                        >
                                           <option value="">
                                              Select Report...
                                           </option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="sel_date"
                                           >Report Period:</label
                                        >
                                        <select
                                           class="form-control"
                                           id="sel_date"
                                        >
                                           <option value="">
                                              Select Period...
                                           </option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="sel_customer"
                                           >Customer:</label
                                        >
                                        <select
                                           class="form-control"
                                           id="sel_customer"
                                        >
                                           <option value="">
                                              Select Customer...
                                           </option>
                                        </select>
                                     </div>
                                  </div>
                                  <div class="col-md-3">
                                     <div class="form-group">
                                        <label>&nbsp;</label><br />
                                        <button
                                           type="button"
                                           class="btn btn-primary btn-block"
                                           onclick="getReport()"
                                        >
                                           <i class="fa fa-search"></i> View
                                           Report
                                        </button>
                                     </div>
                                  </div>
                               </div>
                            </div>
 
                            <div
                               class="loading-spinner"
                               id="loading"
                               style="display: none"
                            >
                               <i class="fa fa-spinner fa-spin fa-2x"></i>
                               <p>Loading report data...</p>
                            </div>
 
                            <div
                               id="report-table-container"
                               style="display: none"
                            >
                               <div class="row" style="margin-bottom: 15px">
                                  <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="table-search">Search:</label>
                                        <input
                                           type="text"
                                           id="table-search"
                                           class="form-control"
                                           placeholder="Search in table data..."
                                        />
                                     </div>
                                  </div>
                                  <div class="col-md-3">
                                     <div class="form-group">
                                        <label for="page-size"
                                           >Show entries:</label
                                        >
                                        <select
                                           id="page-size"
                                           class="form-control"
                                        >
                                           <option value="10">10</option>
                                           <option value="25" selected>
                                              25
                                           </option>
                                           <option value="50">50</option>
                                           <option value="100">100</option>
                                           <option value="-1">All</option>
                                        </select>
                                     </div>
                                  </div>
                               </div>
 
                               <table
                                  id="report-table"
                                  class="table table-striped table-bordered data-table"
                               >
                                  <thead id="table-header"></thead>
                                  <tbody id="table-body"></tbody>
                               </table>
 
                               <div class="row">
                                  <div class="col-md-6">
                                     <div
                                        id="table-info"
                                        class="table-info"
                                     ></div>
                                  </div>
                                  <div class="col-md-6">
                                     <nav aria-label="Table pagination">
                                        <ul
                                           class="pagination pagination-sm pull-right"
                                           id="pagination-controls"
                                        ></ul>
                                     </nav>
                                  </div>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </section>
             </div>
             <!-- /.box (Reports box) -->
 
             <!-- TO DO List -->
             <div class="box box-primary">
                <div class="box-header">
                   <i class="ion ion-clipboard"></i>
                   <h3 class="box-title">To Do List</h3>
                   <div class="box-tools pull-right">
                      <ul class="pagination pagination-sm inline">
                         <li><a href="#">&laquo;</a></li>
                         <li><a href="#">1</a></li>
                         <li><a href="#">2</a></li>
                         <li><a href="#">3</a></li>
                         <li><a href="#">&raquo;</a></li>
                      </ul>
                   </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                   <ul class="todo-list">
                      <li>
                         <!-- drag handle -->
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <!-- checkbox -->
                         <input type="checkbox" value="" name="" />
                         <!-- todo text -->
                         <span class="text">Design a nice theme</span>
                         <!-- Emphasis label -->
                         <small class="label label-danger"
                            ><i class="fa fa-clock-o"></i> 2 mins</small
                         >
                         <!-- General tools such as edit or delete-->
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                      <li>
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <input type="checkbox" value="" name="" />
                         <span class="text">Make the theme responsive</span>
                         <small class="label label-info"
                            ><i class="fa fa-clock-o"></i> 4 hours</small
                         >
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                      <li>
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <input type="checkbox" value="" name="" />
                         <span class="text">Let theme shine like a star</span>
                         <small class="label label-warning"
                            ><i class="fa fa-clock-o"></i> 1 day</small
                         >
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                      <li>
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <input type="checkbox" value="" name="" />
                         <span class="text">Let theme shine like a star</span>
                         <small class="label label-success"
                            ><i class="fa fa-clock-o"></i> 3 days</small
                         >
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                      <li>
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <input type="checkbox" value="" name="" />
                         <span class="text"
                            >Check your messages and notifications</span
                         >
                         <small class="label label-primary"
                            ><i class="fa fa-clock-o"></i> 1 week</small
                         >
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                      <li>
                         <span class="handle">
                            <i class="fa fa-ellipsis-v"></i>
                            <i class="fa fa-ellipsis-v"></i>
                         </span>
                         <input type="checkbox" value="" name="" />
                         <span class="text">Let theme shine like a star</span>
                         <small class="label label-default"
                            ><i class="fa fa-clock-o"></i> 1 month</small
                         >
                         <div class="tools">
                            <i class="fa fa-edit"></i>
                            <i class="fa fa-trash-o"></i>
                         </div>
                      </li>
                   </ul>
                </div>
                <!-- /.box-body -->
                <div class="box-footer clearfix no-border">
                   <button class="btn btn-default pull-right">
                      <i class="fa fa-plus"></i> Add item
                   </button>
                </div>
             </div>
             <!-- /.box -->
 
             <!-- quick email widget -->
             <div class="box box-info">
                <div class="box-header">
                   <i class="fa fa-envelope"></i>
                   <h3 class="box-title">Quick Email</h3>
                   <!-- tools box -->
                   <div class="pull-right box-tools">
                      <button
                         class="btn btn-info btn-sm"
                         data-widget="remove"
                         data-toggle="tooltip"
                         title="Remove"
                      >
                         <i class="fa fa-times"></i>
                      </button>
                   </div>
                   <!-- /. tools -->
                </div>
                <div class="box-body">
                   <form action="#" method="post">
                      <div class="form-group">
                         <input
                            type="email"
                            class="form-control"
                            name="emailto"
                            placeholder="Email to:"
                         />
                      </div>
                      <div class="form-group">
                         <input
                            type="text"
                            class="form-control"
                            name="subject"
                            placeholder="Subject"
                         />
                      </div>
                      <div>
                         <textarea
                            class="textarea"
                            placeholder="Message"
                            style="
                               width: 100%;
                               height: 125px;
                               font-size: 14px;
                               line-height: 18px;
                               border: 1px solid #dddddd;
                               padding: 10px;
                            "
                         ></textarea>
                      </div>
                   </form>
                </div>
                <div class="box-footer clearfix">
                   <button class="pull-right btn btn-default" id="sendEmail">
                      Send <i class="fa fa-arrow-circle-right"></i>
                   </button>
                </div>
             </div>
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
             <!-- Map box -->
             <div class="box box-solid bg-light-blue-gradient">
                <div class="box-header">
                   <!-- tools box -->
                   <div class="pull-right box-tools">
                      <button
                         class="btn btn-primary btn-sm daterange pull-right"
                         data-toggle="tooltip"
                         title="Date range"
                      >
                         <i class="fa fa-calendar"></i>
                      </button>
                      <button
                         class="btn btn-primary btn-sm pull-right"
                         data-widget="collapse"
                         data-toggle="tooltip"
                         title="Collapse"
                         style="margin-right: 5px"
                      >
                         <i class="fa fa-minus"></i>
                      </button>
                   </div>
                   <!-- /. tools -->
 
                   <i class="fa fa-map-marker"></i>
                   <h3 class="box-title">Visitors</h3>
                </div>
                <div class="box-body">
                   <div id="world-map" style="height: 250px; width: 100%"></div>
                </div>
                <!-- /.box-body-->
                <div class="box-footer no-border">
                   <div class="row">
                      <div
                         class="col-xs-4 text-center"
                         style="border-right: 1px solid #f4f4f4"
                      >
                         <div id="sparkline-1"></div>
                         <div class="knob-label">Visitors</div>
                      </div>
                      <!-- ./col -->
                      <div
                         class="col-xs-4 text-center"
                         style="border-right: 1px solid #f4f4f4"
                      >
                         <div id="sparkline-2"></div>
                         <div class="knob-label">Online</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-4 text-center">
                         <div id="sparkline-3"></div>
                         <div class="knob-label">Exists</div>
                      </div>
                      <!-- ./col -->
                   </div>
                   <!-- /.row -->
                </div>
             </div>
             <!-- /.box -->
 
             <!-- solid sales graph -->
             <div class="box box-solid bg-teal-gradient">
                <div class="box-header">
                   <i class="fa fa-th"></i>
                   <h3 class="box-title">Sales Graph</h3>
                   <div class="box-tools pull-right">
                      <button class="btn bg-teal btn-sm" data-widget="collapse">
                         <i class="fa fa-minus"></i>
                      </button>
                      <button class="btn bg-teal btn-sm" data-widget="remove">
                         <i class="fa fa-times"></i>
                      </button>
                   </div>
                </div>
                <div class="box-body border-radius-none">
                   <div
                      class="chart"
                      id="line-chart"
                      style="height: 250px"
                   ></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer no-border">
                   <div class="row">
                      <div
                         class="col-xs-4 text-center"
                         style="border-right: 1px solid #f4f4f4"
                      >
                         <input
                            type="text"
                            class="knob"
                            data-readonly="true"
                            value="20"
                            data-width="60"
                            data-height="60"
                            data-fgColor="#39CCCC"
                         />
                         <div class="knob-label">Mail-Orders</div>
                      </div>
                      <!-- ./col -->
                      <div
                         class="col-xs-4 text-center"
                         style="border-right: 1px solid #f4f4f4"
                      >
                         <input
                            type="text"
                            class="knob"
                            data-readonly="true"
                            value="50"
                            data-width="60"
                            data-height="60"
                            data-fgColor="#39CCCC"
                         />
                         <div class="knob-label">Online</div>
                      </div>
                      <!-- ./col -->
                      <div class="col-xs-4 text-center">
                         <input
                            type="text"
                            class="knob"
                            data-readonly="true"
                            value="30"
                            data-width="60"
                            data-height="60"
                            data-fgColor="#39CCCC"
                         />
                         <div class="knob-label">In-Store</div>
                      </div>
                      <!-- ./col -->
                   </div>
                   <!-- /.row -->
                </div>
                <!-- /.box-footer -->
             </div>
             <!-- /.box -->
 
             <!-- Calendar -->
             <div class="box box-solid bg-green-gradient">
                <div class="box-header">
                   <i class="fa fa-calendar"></i>
                   <h3 class="box-title">Calendar</h3>
                   <!-- tools box -->
                   <div class="pull-right box-tools">
                      <!-- button with a dropdown -->
                      <div class="btn-group">
                         <button
                            class="btn btn-success btn-sm dropdown-toggle"
                            data-toggle="dropdown"
                         >
                            <i class="fa fa-bars"></i>
                         </button>
                         <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Add new event</a></li>
                            <li><a href="#">Clear events</a></li>
                            <li class="divider"></li>
                            <li><a href="#">View calendar</a></li>
                         </ul>
                      </div>
                      <button
                         class="btn btn-success btn-sm"
                         data-widget="collapse"
                      >
                         <i class="fa fa-minus"></i>
                      </button>
                      <button
                         class="btn btn-success btn-sm"
                         data-widget="remove"
                      >
                         <i class="fa fa-times"></i>
                      </button>
                   </div>
                   <!-- /. tools -->
                </div>
                <!-- /.box-header -->
                <div class="box-body no-padding">
                   <!--The calendar -->
                   <div id="calendar" style="width: 100%"></div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-black">
                   <div class="row">
                      <div class="col-sm-6">
                         <!-- Progress bars -->
                         <div class="clearfix">
                            <span class="pull-left">Task #1</span>
                            <small class="pull-right">90%</small>
                         </div>
                         <div class="progress xs">
                            <div
                               class="progress-bar progress-bar-green"
                               style="width: 90%"
                            ></div>
                         </div>
 
                         <div class="clearfix">
                            <span class="pull-left">Task #2</span>
                            <small class="pull-right">70%</small>
                         </div>
                         <div class="progress xs">
                            <div
                               class="progress-bar progress-bar-green"
                               style="width: 70%"
                            ></div>
                         </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6">
                         <div class="clearfix">
                            <span class="pull-left">Task #3</span>
                            <small class="pull-right">60%</small>
                         </div>
                         <div class="progress xs">
                            <div
                               class="progress-bar progress-bar-green"
                               style="width: 60%"
                            ></div>
                         </div>
 
                         <div class="clearfix">
                            <span class="pull-left">Task #4</span>
                            <small class="pull-right">40%</small>
                         </div>
                         <div class="progress xs">
                            <div
                               class="progress-bar progress-bar-green"
                               style="width: 40%"
                            ></div>
                         </div>
                      </div>
                      <!-- /.col -->
                   </div>
                   <!-- /.row -->
                </div>
             </div>
             <!-- /.box -->
          </section>
          <!-- right col -->
       </div>
       <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
 </div>
 <script>
    const API_BASE_URL = "/api/reports.php";
    let currentTableData = [],
       filteredData = [],
       currentPage = 1,
       pageSize = 25,
       sortColumn = "",
       sortDirection = "asc";
 
    document.addEventListener("DOMContentLoaded", function () {
       setupEventListeners();
       loadReportsList();
       loadCustomerList();
       loadUsagePeriodList();
    });
 
    function setupEventListeners() {
       const searchInput = document.getElementById("table-search");
       const pageSizeSelect = document.getElementById("page-size");
 
       if (searchInput) {
          searchInput.addEventListener("input", filterTable);
       }
 
       if (pageSizeSelect) {
          pageSizeSelect.addEventListener("change", function () {
             pageSize = parseInt(this.value);
             currentPage = 1;
             displayTablePage();
          });
       }
    }
 
    function makeRequest(method, url, data, callback, errorCallback) {
       const xhr = new XMLHttpRequest();
 
       if (method === "GET" && data) {
          const params = new URLSearchParams(data).toString();
          url += (url.includes("?") ? "&" : "?") + params;
       }
 
       xhr.open(method, url, true);
       xhr.timeout = 10000;
 
       if (method === "POST") {
          xhr.setRequestHeader(
             "Content-Type",
             "application/x-www-form-urlencoded",
          );
       }
 
       xhr.onreadystatechange = function () {
          if (xhr.readyState === 4) {
             if (xhr.status === 200) {
                try {
                   const response = JSON.parse(xhr.responseText);
                   callback(response, xhr);
                } catch (e) {
                   if (errorCallback)
                      errorCallback(xhr, "parseerror", e.message);
                }
             } else {
                if (errorCallback) errorCallback(xhr, "error", xhr.statusText);
             }
          }
       };
 
       xhr.onerror = function () {
          if (errorCallback) errorCallback(xhr, "error", "Network error");
       };
 
       xhr.ontimeout = function () {
          if (errorCallback) errorCallback(xhr, "timeout", "Request timeout");
       };
 
       if (method === "POST" && data) {
          const params = new URLSearchParams(data).toString();
          xhr.send(params);
       } else {
          xhr.send();
       }
    }
 
    function loadReportsList() {
       makeRequest(
          "GET",
          API_BASE_URL,
          { method: "IOT_GetReportsList" },
          function (response) {
             let reports = [];
             if (response && response.status && response.message) {
                reports = response.message;
             } else if (response && response.message) {
                reports = response.message;
             } else if (Array.isArray(response)) {
                reports = response;
             }
 
             if (reports && reports.length > 0) {
                const select = document.getElementById("sel_report");
                if (select) {
                   select.innerHTML =
                      '<option value="">Select Report...</option>';
                   reports.forEach(function (report) {
                      const reportName =
                         typeof report === "string"
                            ? report
                            : report.name || report.report || report;
                      const option = document.createElement("option");
                      option.value = reportName;
                      option.textContent = reportName;
                      select.appendChild(option);
                   });
                }
             } else {
                showError("No reports available");
             }
          },
          function (xhr, status, error) {
             showError("Failed to connect to reports API: " + error);
          },
       );
    }
 
    function loadCustomerList() {
       makeRequest(
          "GET",
          API_BASE_URL,
          { method: "IOT_GetCustomerList" },
          function (response) {
             let customers = [];
             if (response && response.status && response.message) {
                customers = response.message;
             } else if (response && response.message) {
                customers = response.message;
             } else if (Array.isArray(response)) {
                customers = response;
             }
 
             if (customers && customers.length > 0) {
                const select = document.getElementById("sel_customer");
                if (select) {
                   select.innerHTML =
                      '<option value="">Select Customer...</option>';
                   customers.forEach(function (customer) {
                      const customerName =
                         customer.customer || customer.name || customer;
                      const option = document.createElement("option");
                      option.value = customerName;
                      option.textContent = customerName;
                      select.appendChild(option);
                   });
                }
             } else {
                showError("No customers available");
             }
          },
          function (xhr, status, error) {
             showError("Failed to load customer list: " + error);
          },
       );
    }
 
    function loadUsagePeriodList() {
       makeRequest(
          "GET",
          API_BASE_URL,
          { method: "IOT_GetUsagePeriodList" },
          function (response) {
             let periods = [];
 
             if (response && response.status && response.message) {
                if (
                   response.message.message &&
                   Array.isArray(response.message.message)
                ) {
                   periods = response.message.message;
                } else if (Array.isArray(response.message)) {
                   periods = response.message;
                }
             } else if (Array.isArray(response)) {
                periods = response;
             }
 
             if (periods && periods.length > 0) {
                const select = document.getElementById("sel_date");
                if (select) {
                   select.innerHTML =
                      '<option value="">Select Period...</option>';
 
                   periods.forEach(function (period) {
                      let periodValue = "",
                         periodText = "";
 
                      if (typeof period === "string") {
                         periodValue = period;
                         periodText = period;
                      } else if (period && period.period) {
                         periodValue = period.period;
                         periodText = period.period;
                      } else if (period && period.name) {
                         periodValue = period.name;
                         periodText = period.name;
                      }
 
                      if (periodValue && periodText) {
                         const option = document.createElement("option");
                         option.value = periodValue;
                         option.textContent = periodText;
                         select.appendChild(option);
                      }
                   });
                }
             } else {
                showError("No periods available");
             }
          },
          function (xhr, status, error) {
             showError("Failed to load usage periods: " + error);
          },
       );
    }
 
    function filterDataByPeriod(data, period) {
       if (!period || !data) return data;
 
       const monthMap = {
          JAN: "01",
          FEB: "02",
          MAR: "03",
          APR: "04",
          MAY: "05",
          JUN: "06",
          JUL: "07",
          AUG: "08",
          SEP: "09",
          OCT: "10",
          NOV: "11",
          DEC: "12",
       };
 
       const parts = period.split(" ");
       if (parts.length === 2) {
          const monthCode = monthMap[parts[0]];
          const year = parts[1];
 
          if (monthCode && year) {
             const targetYearMonth = year + "-" + monthCode;
 
             return data.filter(function (row) {
                if (row.date && row.date.length >= 7) {
                   const rowYearMonth = row.date.substring(0, 7);
                   return rowYearMonth === targetYearMonth;
                }
                return false;
             });
          }
       }
 
       return data;
    }
 
    function filterDataByCustomer(data, customer) {
       if (!customer || customer === "") {
          return data;
       }
 
       return data.filter(function (row) {
          if (
             customer === "Administrator" &&
             row.carrier === "Administrator_LTE"
          ) {
             return true;
          }
 
          if (
             customer === "Customer Name" &&
             row.carrier === "customer_name_LTE"
          ) {
             return true;
          }
 
          return false;
       });
    }
 
    function filterDataByPeriodAndCustomer(data, period, customer) {
       if (!data) return data;
 
       let filteredData = data;
 
       if (customer && customer !== "") {
          filteredData = filterDataByCustomer(filteredData, customer);
       }
 
       if (period) {
          filteredData = filterDataByPeriod(filteredData, period);
       }
 
       return filteredData;
    }
 
    function getReport() {
       const reportSelect = document.getElementById("sel_report");
       const dateSelect = document.getElementById("sel_date");
       const customerSelect = document.getElementById("sel_customer");
 
       const reportName = reportSelect ? reportSelect.value : "";
       const period = dateSelect ? dateSelect.value : "";
       const customer = customerSelect ? customerSelect.value : "";
 
       if (!reportName) {
          showError("Please select a report");
          return;
       }
 
       showLoading();
       hideError();
       hideReportContent();
 
       makeRequest(
          "GET",
          API_BASE_URL,
          {
             method: "IOT_GetReport",
             report: reportName,
             period: period,
             customer: customer,
          },
          function (response) {
             hideLoading();
 
             if (
                response.status &&
                response.message &&
                response.message.result
             ) {
                let data = response.message;
 
                if (data.result) {
                   data.result = filterDataByPeriodAndCustomer(
                      data.result,
                      period,
                      customer,
                   );
 
                   if (data.result.length > 0) {
                      const totalData = data.result.reduce((sum, row) => {
                         return sum + parseFloat(row["data [MB]"] || 0);
                      }, 0);
 
                      data.summary = {
                         "data [MB]": totalData.toFixed(2),
                         total_records: data.result.length,
                         period: period || "All Periods",
                         customer: customer || "All Customers",
                      };
                   } else {
                      const filterDescription = [];
                      if (customer && customer !== "")
                         filterDescription.push("customer: " + customer);
                      if (period) filterDescription.push("period: " + period);
 
                      showError(
                         "No data available for the selected " +
                            filterDescription.join(" and "),
                      );
                      return;
                   }
                }
 
                if (data.result && data.result.length > 0) {
                   displayReport(data);
                } else {
                   showError("No data available for the selected criteria");
                }
             } else {
                showError("No data available for the selected criteria");
             }
          },
          function (xhr, status, error) {
             hideLoading();
             showError("Failed to load report data: " + error);
          },
       );
    }
 
    function displayReport(data) {
       if (data.summary) {
          displaySummary(data.summary);
       }
 
       if (data.result && data.result.length > 0) {
          displayDataTable(data.result);
       } else {
          showError("No data found for the selected criteria");
       }
    }
 
    function displaySummary(summary) {
       let summaryHtml = "";
       for (const [key, value] of Object.entries(summary)) {
          summaryHtml += `<strong>${key}:</strong> ${formatValue(value, key)}<br>`;
       }
 
       const reportSummary = document.getElementById("report-summary");
 
       if (reportSummary) reportSummary.style.display = "block";
    }
 
    function displayDataTable(data) {
       if (data.length === 0) {
          showError("No data to display");
          return;
       }
 
       currentTableData = data;
       filteredData = data;
       currentPage = 1;
 
       const columns = Object.keys(data[0]);
 
       let headerHtml = "<tr>";
       columns.forEach(function (column) {
          headerHtml += `<th style="cursor: pointer;" onclick="sortTable('${column}')">
                 ${column} 
                 <i class="fa fa-sort" id="sort-${column}"></i>
             </th>`;
       });
       headerHtml += "</tr>";
 
       const tableHeader = document.getElementById("table-header");
       if (tableHeader) tableHeader.innerHTML = headerHtml;
 
       displayTablePage();
 
       const tableContainer = document.getElementById("report-table-container");
       if (tableContainer) tableContainer.style.display = "block";
    }
 
    function filterTable() {
       const searchInput = document.getElementById("table-search");
       const searchTerm = searchInput ? searchInput.value.toLowerCase() : "";
 
       if (searchTerm === "") {
          filteredData = currentTableData;
       } else {
          filteredData = currentTableData.filter(function (row) {
             return Object.values(row).some(function (value) {
                return String(value).toLowerCase().includes(searchTerm);
             });
          });
       }
 
       currentPage = 1;
       displayTablePage();
    }
 
    function sortTable(column) {
       if (sortColumn === column) {
          sortDirection = sortDirection === "asc" ? "desc" : "asc";
       } else {
          sortColumn = column;
          sortDirection = "asc";
       }
 
       document.querySelectorAll('[id^="sort-"]').forEach(function (icon) {
          icon.className = "fa fa-sort";
       });
 
       const sortIcon = document.getElementById("sort-" + column);
       if (sortIcon) {
          sortIcon.className =
             "fa fa-sort-" + (sortDirection === "asc" ? "up" : "down");
       }
 
       filteredData.sort(function (a, b) {
          let aVal = a[column];
          let bVal = b[column];
 
          if (
             column.toLowerCase().includes("mb") ||
             column.toLowerCase().includes("data")
          ) {
             aVal = parseFloat(aVal) || 0;
             bVal = parseFloat(bVal) || 0;
          }
 
          if (column.toLowerCase().includes("date")) {
             aVal = new Date(aVal);
             bVal = new Date(bVal);
          }
 
          if (aVal < bVal) return sortDirection === "asc" ? -1 : 1;
          if (aVal > bVal) return sortDirection === "asc" ? 1 : -1;
          return 0;
       });
 
       currentPage = 1;
       displayTablePage();
    }
 
    function displayTablePage() {
       const totalRecords = filteredData.length;
       const totalPages =
          pageSize === -1 ? 1 : Math.ceil(totalRecords / pageSize);
 
       let startIndex = 0;
       let endIndex = totalRecords;
 
       if (pageSize !== -1) {
          startIndex = (currentPage - 1) * pageSize;
          endIndex = Math.min(startIndex + pageSize, totalRecords);
       }
 
       const pageData = filteredData.slice(startIndex, endIndex);
 
       const columns =
          currentTableData.length > 0 ? Object.keys(currentTableData[0]) : [];
       let bodyHtml = "";
 
       pageData.forEach(function (row) {
          bodyHtml += "<tr>";
          columns.forEach(function (column) {
             const value = row[column] || "";
             bodyHtml += `<td>${formatValue(value, column)}</td>`;
          });
          bodyHtml += "</tr>";
       });
 
       const tableBody = document.getElementById("table-body");
       if (tableBody) tableBody.innerHTML = bodyHtml;
 
       const infoText =
          pageSize === -1
             ? `Showing all ${totalRecords} entries`
             : `Showing ${startIndex + 1} to ${endIndex} of ${totalRecords} entries`;
 
       const tableInfo = document.getElementById("table-info");
       if (tableInfo) tableInfo.textContent = infoText;
 
       updatePagination(totalPages);
    }
 
    function updatePagination(totalPages) {
       const paginationControls = document.getElementById("pagination-controls");
       if (!paginationControls || pageSize === -1) {
          if (paginationControls) paginationControls.innerHTML = "";
          return;
       }
 
       let paginationHtml = "";
 
       if (currentPage > 1) {
          paginationHtml += `<li><a href="#" onclick="goToPage(${currentPage - 1})">&laquo;</a></li>`;
       } else {
          paginationHtml += `<li class="disabled"><span>&laquo;</span></li>`;
       }
 
       const startPage = Math.max(1, currentPage - 2);
       const endPage = Math.min(totalPages, currentPage + 2);
 
       if (startPage > 1) {
          paginationHtml += `<li><a href="#" onclick="goToPage(1)">1</a></li>`;
          if (startPage > 2) {
             paginationHtml += `<li class="disabled"><span>...</span></li>`;
          }
       }
 
       for (let i = startPage; i <= endPage; i++) {
          if (i === currentPage) {
             paginationHtml += `<li class="active"><span>${i}</span></li>`;
          } else {
             paginationHtml += `<li><a href="#" onclick="goToPage(${i})">${i}</a></li>`;
          }
       }
 
       if (endPage < totalPages) {
          if (endPage < totalPages - 1) {
             paginationHtml += `<li class="disabled"><span>...</span></li>`;
          }
          paginationHtml += `<li><a href="#" onclick="goToPage(${totalPages})">${totalPages}</a></li>`;
       }
 
       if (currentPage < totalPages) {
          paginationHtml += `<li><a href="#" onclick="goToPage(${currentPage + 1})">&raquo;</a></li>`;
       } else {
          paginationHtml += `<li class="disabled"><span>&raquo;</span></li>`;
       }
 
       paginationControls.innerHTML = paginationHtml;
    }
 
    function goToPage(page) {
       currentPage = page;
       displayTablePage();
    }
 
    function formatValue(value, key) {
       if (
          key &&
          key.toLowerCase().includes("data") &&
          key.toLowerCase().includes("mb")
       ) {
          return parseFloat(value).toFixed(2) + " MB";
       }
       if (key && key.toLowerCase().includes("date")) {
          return value;
       }
       return value;
    }
 
    function showLoading() {
       const loading = document.getElementById("loading");
       if (loading) loading.style.display = "block";
    }
 
    function hideLoading() {
       const loading = document.getElementById("loading");
       if (loading) loading.style.display = "none";
    }
 
    function showError(message) {
       const errorText = document.getElementById("error-text");
       const errorMessage = document.getElementById("error-message");
 
       if (errorText) errorText.textContent = message;
       if (errorMessage) errorMessage.style.display = "block";
    }
 
    function hideError() {
       const errorMessage = document.getElementById("error-message");
       if (errorMessage) errorMessage.style.display = "none";
    }
 
    function hideReportContent() {
       const reportSummary = document.getElementById("report-summary");
       const tableContainer = document.getElementById("report-table-container");
 
       if (reportSummary) reportSummary.style.display = "none";
       if (tableContainer) tableContainer.style.display = "none";
    }
 </script>
 