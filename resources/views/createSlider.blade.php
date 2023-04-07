<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
@include('layout.head')
<style>
body {
            background-color: #f2f2f2;
            direction: ltr;
        }
        form {

  padding: 20px;
}
input[type="text"], input[type="number"], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
button[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

button[type="submit"]:hover {
  background-color: #45a049;
}
select {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
}
label {
  font-weight: bold;
  display: block;
  margin-bottom: 5px;
}
textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

    
    
</style>

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
                <form  method="post" enctype="multipart/form-data" action="{{url('/slider')}}" >
                    {{csrf_field()}}
                    <label for="cikis-durumu">Urun </label>
                    <select id="Urun" name="Urun">
                    <option value="">Urun sec</option>
                    @foreach($Urun as $urun)
                      <option value="{{$urun->urun_adi}}">{{$urun->urun_adi}}</option>
                      @endforeach
                    </select>

                    <label for="il">il</label>
                    <select id="il" name="il">
                     <option value="">Select an il</option>
                        @foreach ($il as $iller)
                           <option value="{{ $iller->il_adi }}">{{ $iller->il_adi }}</option>
                        @endforeach
                    </select>

                    <label for="ilce">Ilce</label>
                     <select id="ilce" name="ilce">
                      <option value="">Select an ilce</option>
                        @foreach ($ilceler as $ilce)
                           <option value="{{ $ilce->ilce_adi }}">{{ $ilce->ilce_adi }}</option>
                        @endforeach
                      </select>

                    
                                     

                    <div class="form-group col-md-12">
                        <label for="formGroupExampleInput2">EkimAlani</label>
                        <input type="number" name="EkimAlani" class="form-control" id="formGroupExampleInput2" placeholder="EkimAlani girin">
                    </div>
                    
                    
                    <label for="cikis-durumu">Çıkış Durumu</label>
                    <select id="cikis-durumu" name="cikis_durumu">
                    <option value="">Select an ilce</option>
                    @foreach($cikis as $Cikis)
                      <option value="{{$Cikis->Cikis_Durumu}}">{{$Cikis->Cikis_Durumu}}</option>
                    @endforeach
                      
                    </select>
                    
                    <label for="gelisme-bakim-durumu">Gelişme ve Bakım Durumu</label>
                    <select id="gelisme_bakim_durumu" name="gelisme_bakim_durumu">
                    <option value="">Select an ilce</option>
                    @foreach($gelisme as $Gelisme)
                       <option value="{{$Gelisme->Gelisme}}">{{$Gelisme->Gelisme}}</option>
                       @endforeach
                     </select>
                     

                     <label for="Ay">Ay</label>
                    <select id="Ay" name="Ay">
                    <option value="">raporun bulundugu ayi secin</option>
                    @foreach($Ay as $ay)
                       <option value="{{$ay->Ay_adi}}">{{$ay->Ay_adi}}</option>
                       @endforeach
                     </select>

                     <label for="description">GozlemDurumu</label>
                    
                     <textarea id="Gozlem-Durumu" name="Gozlem_Durumu" rows="5" cols="50"></textarea>
                     
                    <button type="submit" value="save post" class="btn btn-success btn-lg ">ekle</button>
                </form>
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
