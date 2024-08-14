@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Add New Task</h1>
                <form action="{{ route("tasks.store") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
