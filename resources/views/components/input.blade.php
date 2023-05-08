<div class="mb-3">
    <label for="" class="form-label">{{$label}}</label>
    <input type="{{$type}}" class="form-control" name="{{$name}}" id="{{$id}}"  aria-describedby="helpId"
        placeholder="">
    <span class="text-danger">
        {{-- @error('name')
            {{$message}}
        @enderror --}}
    </span>
</div>