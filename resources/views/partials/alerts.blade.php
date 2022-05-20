@if(session('success'))
  <x-success-alert>{{session('success')}}</x-success-alert>
@endif

@if(session('error'))
  <x-danger-alert>{{session('error')}}</x-danger-alert>
@endif

