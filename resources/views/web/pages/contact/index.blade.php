@extends('web.layout.default')

@section('content')

    <ul class="list-group float-center">
        <li class="list-group-item" id="searchbox">
            <input type="text" name="search" id="search" class="form-control" placeholder="search" v-model="search">
            <button class='btn btn-primary float-right mt-2'>Search</button>
            <span>@{{ search }}</span>
        </li>
        
        @foreach ($contacts as $contact)
        <li class="list-group-item">{{ $contact['firstname'] }} {{ $contact['lastname'] }} 
            <span class='float-right'>
                <span id="add"><i class="fas fa-plus-circle"></i></span>
                <i class="fas fa-edit"></i>
                <i class="fas fa-trash"></i>
            </span>
        </li> 
        @endforeach
    </ul>

@endsection
    
@section('footer')

<script>
var searchbox = new Vue({
  el: '#search-box',
  data: {
    search: '',
    result: '',
  },
})
</script>

@endsection
    
    
    

