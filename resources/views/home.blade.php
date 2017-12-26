@extends('layouts.app')

@section('content')
  
<div class="container">
          <div class="row">
            <div class="col-lg-6">
                <form class="form-vertical" role="form" method="post" enctype="multipart/form-data" action="{{ route('home') }}" >
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="control-label">Name Of The Image</label>
                                <input type="text" name="name" class="form-control" id="name">
                                 @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        </div>
                        <div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                <label for="image" class="control-label">Featured Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                 @if ($errors->has('image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                        </div>
                    
                        <div class="form-gorup">
                                <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}" >
                </form>
        </div>
    </div>
</div>

@endsection
