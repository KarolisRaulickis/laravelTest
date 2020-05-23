<form method="post" action="{{ route('DB.store') }}"> 
    <div class="form-group">
        {{-- @method('PUT')PUT, PATCH or DELETE --}}
        @csrf            
        <label for="age">Age</label> 
        <input type="text" class="form-control" name="age" placeholder="Title placeholder"/> 
    </div>

    <div class="form-group"> 
        <label for="name">Name</label> 
        <textarea class="form-control" name="name" cols="30" rows="10" placeholder="Body Text placeholder"></textarea> 
    </div> 
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



 