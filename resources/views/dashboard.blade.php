@extends('layout')
  
@section('content')
<div class="container">
    <style>
         Button {
  background-color: 90EE90;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  width: 40%;
  cursor: pointer;
}
</style>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Supervisor') }}</div>
  
                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif
                    
                    You are Logged In<br><br>

                    <button><a href="nuser">Offline Users </a></button><br><br>
                    <button><a href="slot">Add Slot</button><br><br>
                    <!-- <button><a href="">Requests</button><br><br> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection