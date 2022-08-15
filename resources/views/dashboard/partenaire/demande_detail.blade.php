@extends('layouts.app1')
@section('content')

@if(Session::has('flash_message_error'))
  <div class="toast" id="danger" data-autohide="true" data-delay="2300" style="background-color:#d42d2d;position:relative;margin-top: -20px; margin-left: 850px;">
    <div class="toast-header" style="background-color:#d42d2d;">
      <strong class="mr-auto"><h4 style="color:white;">Ouups !</h4></strong>
      <small class="text-muted"></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" style="color:white;">
      <img src="{{URL::asset('assets/images/dashboard/danger.png')}}" style="width:30px;height: 30px; float: left;">
      <p style="margin-left: 50px;">{!! session('flash_message_error') !!}</p>
    </div>
  </div>

  <script>
    $(document).ready(function(){
      $('#danger').toast('show');
    });
  </script>
@endif


@if(Session::has('flash_message_success'))
      <div class="toast" id="success" data-autohide="true" data-delay="2300" style="background-color:#1bcfb4;position:relative;margin-top: -20px; margin-left: 850px;">
    <div class="toast-header" style="background-color:#1bcfb4;">
      <strong class="mr-auto"><h4 style="color:white;">Succés</h4></strong>
      <small class="text-muted"></small>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
    </div>
    <div class="toast-body" style="color:white;">
      <img src="{{URL::asset('assets/images/dashboard/success.png')}}" style="width:30px;height: 30px; float: left;">
      <p style="margin-left: 50px;">{!! session('flash_message_success') !!}</p>
    </div>
  </div>
 
  <script>
    $(document).ready(function(){
      $('#success').toast('show');
    });
  </script>
    @endif
<!----------->
 <div class="row">
      {{-- kariù
      <div class="col-md-5 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @if($Demande != NULL)
                    @foreach($Demande as $val)
                      {{-- <center><img src='{{ URL::asset("img/produit/m/$val->image")}}' style="width: 90%;height: auto;border-radius: 7%;"></center>
                      <br> 
                      <center><h4>{{ $val->nom }}</h4></center>
                    <center><p class="card-description">{{ $val->code }}</p></center>
                    @endforeach
                    @endif
                  </div>
                </div>
      </div> --}}
      <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title float-left">Détail Demande</h4>
                       
                    <div class="clearfix" >
                      <br><br><br><br>   
                      @if($Demande != NULL)
                          @foreach($Demande as $row) 
                          <div style="display: flex;flex-direction: row;justify-content: space-evenly;">
                      <ul class="list-ticked">
                        
                          <li><b>NOM</b> : {{ $row->nom}}</li><br><br>
                          <li><b>E-mail</b> : {{ $row->email }}</li><br><br>
                          <li><b>Tel</b> : {{ $row->tel }}</li><br><br>
                          <li><b>Adresse</b> : {{ $row->adresse }}</li><br><br>
                          
                      </ul>
                      <ul class="list-ticked">
                          <li><b>Type</b> : {{ $row->type }}</li><br><br>
                          <li><b>Cin</b> : {{ $row->cin }}</li><br><br>
                          <li><b>Gender</b> : {{ $row->gender }}</li><br><br>
                          <li><b>date de naissance</b> : {{ $row->brith }}</li>
                      </ul>
                        <br><br><br>
                        </div>
                        <div>
                            <center>
                        <button type="button" class="btn btn-danger btn-rounded btn-icon" id="ForDeleteProd" data-toggle="modal" data-target="#ModalProd" data-fourni="{{ $row->id }}" title="Supprimer"><i class="mdi mdi-delete"></i></button>

                          

                          <a href="{{ url('/edit-product',$row->id)}}">
                          <button type="button" class="btn btn-dark btn-rounded btn-icon" title="Modifier">
                            <i class="mdi mdi-pencil"></i>
                          </button></a>

                          {{-- <a href="{{ url('/add-attribute',$row->id)}}">
                          <button type="button" class="btn btn-success btn-rounded btn-icon" title="Ajouter attribut">
                            <i class="mdi mdi-plus-circle-outline"></i>
                          </button></a> --}}

                          {{-- <a href="{{ url('/add-image',$row->id)}}">
                          <button type="button" class="btn btn-info btn-rounded btn-icon" title="Ajouter image">
                            <i class="mdi mdi-image-filter"></i>
                          </button></a></center> --}}
                        </div>
                        
                        @endforeach
                        @endif



                        
                    </div>
                    
                  </div>
                </div>
      </div>
              
</div>
<!--fin model-->

@endsection