@extends('layout.app')
@section('content')






<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

  <!-- Main Content -->
  <div id="content">


    <!-- Begin Page Content -->
    <div class="container-fluid">

      <!-- Page Heading -->
      <div class="d-sm-flex align-items-center justify-content-between mb-4">
      </div>

      <!-- Content Row -->
      <div class="row">

        <!-- Growth Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
          <div class="card border-left-primary shadow h-100 py-4">
            <div class="card-img-top ">
              <i class="fas fa-calendar fa-2x text-info"></i>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">কাস্টমার</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$customers}}</div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!--Today order  Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 text-center vtopCard">
          <div class="card border-left-success shadow h-100 py-4">
            <div class="card-img-top ">
              <i class="fas fa-calendar fa-2x text-info"></i>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">সাপ্লাইয়ার</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$suppliers}}</div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Today item selll Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
          <div class="card border-left-info shadow h-100 py-4">
            <div class="card-img-top ">
              <i class="fas fa-calendar fa-2x text-info"></i>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> অর্ডার </div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$orders}}</div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Today sell Amount Card Example -->
        <div class="col-xl-3 col-md-6 mb-4 text-center topCard">
          <div class="card border-left-info shadow h-100 py-4">
            <div class="card-img-top ">
              <i class="fas fa-calendar fa-2x text-info"></i>
            </div>
            <div class="card-body">
              <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                  <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">প্রোডাক্ট</div>
                  <div class="h5 mb-0 font-weight-bold text-gray-800">{{$products}}</div>
                </div>

              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->

        <div class="row ">
          <div class="col-xl-8 col-lg-7 ">
            <!-- 1111111111111111111111111111111111111111111111111111 -->
            <div class="row ">
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('orders.create') }}"> <i class="fas fa-hand-pointer fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('orders.index') }}">বিক্রয়</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="   {{ route('customer_cash_receive_create') }} "> <i class="fas fa-dollar-sign fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="  {{ route('customer_cash_receive_create') }} ">ক্যাশ ( কাস্টমার )</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>



              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('complete-product') }}"> <i class="fas fa-shopping-bag fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('complete-product') }}">প্রোডাক্ট</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('purchases.create') }}"> <i class="fas fa-shopping-cart fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('purchases.index') }}">ক্রয়</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('customers.index') }}"> <i class="fas fa-user fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('customers.index') }}">কাস্টমার</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('suppliers.index') }}"> <i class="fas fa-people-carry fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('suppliers.index') }}">সাপ্লাইয়ার</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('supplier_payment') }}"> <i class="fas fa-users fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('supplier_payment') }}">পেমেন্ট(সাপ্লাইয়ার)</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>

              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="{{ route('daily-expenses.index') }}"> <i class="fas fa-hand-holding-usd fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="{{ route('daily-expenses.index') }}">খরচ</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>
              <!-- Growth Card Example -->
              <div class="col-xl-4 col-md-6 mb-4  text-center  ">
                <div class="card border-none  h-100 p-4">
                  <div class="card-img-top ">
                    <a href="#"> <i class="fas fa-calendar fa-2x  text-info "></i></a>
                  </div>
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> <a href="#">দৈনিক রিপোর্ট</a> </div>
                      </div>


                    </div>
                  </div>
                </div>
              </div>








            </div>

          </div>
          <!-- 1111111111111111111111111111111111 -->




          <!-- 1111111111111111111111111111111111111111111111111111 -->
          <!-- <div class="card shadow mb-4"> -->
          <!-- Card Header - Dropdown -->
          <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Earningse Overview</h6>
                  <div class="dropdown no-arrow">
                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                      <div class="dropdown-header">Dropdowne Header:</div>
                      <a class="dropdown-item" href="#">Acteeeeion</a>
                      <a class="dropdown-item" href="#">Anoeeeeeether action</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Somethingeeee else here</a>
                    </div>
                  </div>
                </div> -->
          <!-- Card Body -->
          <!-- <div class="card-body">
                  <div class="chart-area">
                    <canvas id="myAreaChart"></canvas>
                  </div>
                </div>
              </div>
            </div> -->
          <!-- 1111111111111111111111111111111111 -->





          <!-- Pie Chart -->
          <div class="col-xl-4 col-lg-5">


            <!--  <div class="card shadow mb-4"> -->
            <!-- Card Header - Dropdown -->
            <!-- <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
              <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
              <div class="dropdown no-arrow">
                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                  <div class="dropdown-header">Dropdown Header:</div>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </div>
            </div> -->
            <!-- Card Body -->
            <!-- <div class="card-body">
              <div class="chart-pie pt-4 pb-2">
                <canvas id="myPieChart"></canvas>
              </div>
              <div class="mt-4 text-center small">
                <span class="mr-2">
                  <i class="fas fa-circle text-primary"></i> Direct
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-success"></i> Social
                </span>
                <span class="mr-2">
                  <i class="fas fa-circle text-info"></i> Referral
                </span>
              </div>
            </div>
          </div> -->


            <!-- Project Card Example -->
            <div class="card shadow mb-4">

              <div class="card-body">

                <h4 class="small font-weight-bold">দৈনিক লক্ষ্যমাত্রা <span class="float-right">{{(int)$daily}}%</span></h4>
                <div class="progress mb-4">
                  <div class="progress-bar bg-secondary" role="progressbar" style="width: {{$daily}}%" aria-valuenow="{{$daily}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">সাপ্তাহিক  লক্ষ্যমাত্রা <span class="float-right">{{(int)$weekly}}%</span></h4>
                <div class="progress mb-4">
                  <div class="progress-bar" role="progressbar" style="width: {{$weekly}}%" aria-valuenow="{{$weekly}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">মাসিক  লক্ষ্যমাত্রা <span class="float-right">{{(int)$monthly}}%</span></h4>
                <div class="progress mb-4">
                  <div class="progress-bar bg-info" role="progressbar" style="width: {{$monthly}}%" aria-valuenow="{{$monthly}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">বার্ষিক  লক্ষ্যমাত্রা <span class="float-right"> {{(int)$yearly}}%</span></h4>
                <div class="progress">
                  <div class="progress-bar bg-success" role="progressbar" style="width: {{$yearly}}%" aria-valuenow=" {{$yearly}}" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>




            </div>


            <!-- It firm info -->
            <div class="card shadow mb-4">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between bg-abasas-dark">
                <h6 class="m-0 font-weight-bold ">Developed By</h6>
              </div>
              <div class="card-body text-center">
                <img src="{{asset('img/abasasit.png')}}" height="50px" alt="">
                <div class="text-dark font-weight-bold "> <i class="fas fa-phone fa-sm fa-fw mr-2 text-success-400  "></i> 01840000408</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Content Row -->



      </div>

    </div>
    <!-- /.container-fluid -->

  </div>
  <!-- End of Main Content -->


</div>
<!-- End of Content Wrapper -->


<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>







@endsection