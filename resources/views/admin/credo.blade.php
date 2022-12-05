<!DOCTYPE html>
<html lang="en">
  <head>
    @include('admin.inc.head')

    <style>
      .div_center{
        text-align: center;
        padding-top: 40px;
      }

      .h2_font
      {
        font-size: 40px;
        padding-bottom: 40px;
        text-align: center;
      }

      .center
      {
        margin: auto;
        width: 50px;
        text-align: center;
        margin-top: 30px;
        border: 3px solid white;
      }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
     @include('admin.inc.sidebar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
     @include('admin.inc.navbar')
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">



            <div class="row">

            </div>
            <div class="h2_font">

                <h2> print Credentials</h2>
            </div>

            <table id="credo_table" class="table borderless center" style="width:100%">
              <thead>
                  <tr>
                    <th>Minister Name</th>
                    <th>Position</th>
                    <th>Church</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($minister as $minister)
                    <tr>
                        <td>{{$minister->minister}}</td>
                        <td>{{$minister->position}}</td>
                        <td>{{$minister->postion}}</td>
                        <td>{{ URL::to('/') }}/photos/{{$minister->image}}</td>
                        <td><a class="btn btn-primary" href="{{ url('cadi/'.$minister->id) }}">print</a> </td>
                    </tr>
                @endforeach
              </tbody>
            </table>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="admin/assets/js/dashboard.js"></script>

    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>

    <script>
      $.extend(true, $.fn.dataTable.defaults, {
          searching: true,
          ordering: true,
      });
        $(document).ready(function ()
        {
            $('#credo_table').DataTable();
        });
    </script>

    <script src="{{asset('template/assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{asset('template/assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('template/assets/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{asset('template/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}"></script>
    <script src="{{asset('template/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
    <script src="{{asset('template/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{asset('template/assets/js/off-canvas.js')}}"></script>
    <script src="{{asset('template/assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{asset('template/assets/js/misc.js')}}"></script>
    <script src="{{asset('template/assets/js/settings.js')}}"></script>
    <script src="template/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{asset('template/assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
  </body>
</html>