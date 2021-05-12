@extends('backend.layouts.master')
@section('content')
    <div class="span9">
        <div class="module">
            <div class="module-head">
                <h3>All Quizes</h3>
            </div>
            <div class="module-body">
                <table class="table table-striped">

                    <thead>
                    <th>#</th>
                    <th>Quiz name</th>
                    <th>Quiz Description</th>
                    <th>Quiz Duration </th>
                    <th>Edit</th>
                    <th>Delete</th>
                    </thead>
                    <tbody>
                    @if(count($quizzes)>0)
                     @foreach($quizzes as $key=>$quiz)
                    <tr>
                        <td>{{$key++}}</td>
                        <td>{{$quiz->name}}</td>
                        <td>{{$quiz->description}}</td>
                        <td>{{$quiz->minutes}}</td>
                        <td>
                            <button>Edit</button>
                        </td>
                        <td>
                            <button>Delete</button>
                        </td>
                    </tr>
                    @endforeach()
                    @else
                    <td>NO Data to display</td>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection
