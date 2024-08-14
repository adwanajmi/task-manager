@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Assessment Task - Muhammad Adwa Najmi</h1>
                <a href="{{ route("tasks.create") }}" class="btn btn-primary">Add New Task</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                <a
                                    href="{{ route("tasks.index", ["sort" => "title", "direction" => request("direction") == "asc" ? "desc" : "asc"]) }}">
                                    Title
                                    @if (request("sort") == "title")
                                        @if (request("direction") == "asc")
                                            <i class="fa fa-sort-up"></i>
                                        @else
                                            <i class="fa fa-sort-down"></i>
                                        @endif
                                    @endif
                                </a>
                            </th>
                            <th>
                                <a
                                    href="{{ route("tasks.index", ["sort" => "is_completed", "direction" => request("direction") == "asc" ? "desc" : "asc"]) }}">
                                    Completed
                                    @if (request("sort") == "is_completed")
                                        @if (request("direction") == "asc")
                                            <i class="fa fa-sort-up"></i>
                                        @else
                                            <i class="fa fa-sort-down"></i>
                                        @endif
                                    @endif
                                </a>
                            </th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td>{{ $task->title }}</td>
                                <td>{{ $task->is_completed ? "Yes" : "No" }}</td>
                                <td>
                                    <a href="{{ route("tasks.show", $task->id) }}" class="btn btn-info">Details</a>
                                    <a href="{{ route("tasks.edit", $task->id) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route("tasks.destroy", $task->id) }}" method="POST"
                                        style="display:inline-block;">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
