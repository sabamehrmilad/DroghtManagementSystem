<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<style>
table
{

unicode-bidi: embed;
font-family: "Arial", sans-serif;
        direction: ltr;
}


    


</style>
@include('layout.head')
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<div class="hold-transition skin-blue sidebar-mini">


    <div class="wrapper">
        <!-- Main Header -->
    @include('layout.header')


    <!-- right side column. contains the logo and sidebar -->

        <!-- Sidebar Menu -->

    @include('layout.sidebarmenu')

    <!-- Sidebar Menu -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">

                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> خانه</a></li>
                    <li class="active">صفحه</li>
                </ol>
            </section>

            <!-- Main content -->
            <section class="content container-fluid">

                <!--------------------------
                  | Your Page Content Here |
                  -------------------------->

                <div class="container">
                    <table class="table table-bordered table-responsive" style="border-radius: 15px; background-color: white; margin-top: 20px;">
                        <thead>
                        <tr>
                            <th scope="col">id</th>
                            <th scope="col">Urun</th>
                            <th scope="col">il</th>
                            <th scope="col">ilce</th>
                            <th scope="col">CikisDurumu</th>
                            <th scope="col">EkimAlani</th>
                            <th scope="col">GelismeVeBakim</th>
                            <th scope="col">Ay</th>
                            <th scope="col">GozlemDurumu</th>
                            
                        </tr>
                        </thead>
                        @foreach($slider as $row)
                        
                            <tr>
                                <td>{{$row->id}}</td>
                                <td>{{$row->Urun}}</td>
                                <td>{{$row->il}}</td>
                                <td>{{$row->ilce}}</td>
                                <td>{{$row->CikisDurumu}}</td>
                                <td>{{$row->EkimAlani}}</td>
                                <td>{{$row->GelismeVeBakim}}</td>
                                <td>{{$row->Ay}}</td>
                                <td>{{$row->GozlemDurumu}}</td>
                                
                                

                                <td>
                                    <form action="{{ route('slider.destroy', $row) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                                            <i class="fa fa-trash fa-lg text-danger"></i>
                                        </button>
                                        <a href="{{ route('slider.editSlider', $row->id) }}">
                                            <i class="fa fa-edit  fa-lg"></i>
                                        </a>

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                    <a href="{{ route('slider.pdf') }}" class="btn btn-primary">Download PDF</a>

                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Main Footer -->
    @include('layout.footer')

    <!-- Control Sidebar -->

        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
        immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>


    </div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 3 -->
<script src="/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</html>
