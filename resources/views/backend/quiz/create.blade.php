@extends('backend.layouts.master')
@Section('title','Create Quiz')

@Section('content')
    <div class="span9">
        <div class="content">
            @if(Session::has('message'))
                <div class="alert-alert-success">{{Session::get('message')}}</div>
            @endif
            <form action="{{route('quiz.store')}}" method="post">@csrf
            <div class="module">
                <div class="module-head">
                    <h3>Create Quiz</h3>
                </div>
                <div class="module-body">
                    <div class="control-group">
                        <label for="name" class="control-label">Quiz name</label>
                        <div class="controls">
                            <input type="text" name="name" class="span8" placeholder="name of quiz" value="{{old('name')}}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{'message'}}</strong>
                            </span>
                            @enderror

                        </div>
                        <label for="minutes" class="control-label">Quiz Description</label>
                        <div class="controls">
                            <textarea name="description" class="span8" id="" cols="30" rows="10" {{old('description')}}></textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{'message'}}</strong>
                            </span>
                            @enderror

                        </div>
                        <label for="minutes" class="control-label">Quiz Minutes</label>
                        <div class="controls">
                            <input type="number" name="minutes" class="span8" placeholder="Quiz duration" value="{{old('minutes')}}">
                            @error('minutes')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{'message'}}</strong>
                            </span>
                            @enderror

                        </div>



                        <div class="controls">
                            <button class="btn btn-primary" type="submit">Create Quiz</button>

                        </div>


                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
@endsection
